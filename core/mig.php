<?php

include 'database.php';

function execSQL($sql = '')
{
    $db = new database();
    $db = $db->conn->prepare($sql);

    return $db;
}

/**
 * create database columns.
 *
 * @param string $name - column name
 * @param string $type - The datatype for the column
 *@param    int  $length -The length of the column
 *@param bool $is_null - set tru if you want the column to be null
 *@param bool $increment - Set true to enable auto_increment
 *@param bool $key -  Set true for primary Key
 *@param string $default - The default value for first
 *
 * @return void
 */
function addColumn(
    $name,
    $type,
    $length,
    $is_null = false,
    $increment = false,
    $key = false,
    $default = null
) {
    $sql = $name;
    $datatype = 'VARCHAR';

    switch ($type) {
        case 'string':
            $datatype = 'VARCHAR';
            break;
        case 'int':
            $datatype = 'INT';
            break;
        case 'text':
            $datatype = 'TEXT';
            break;
        case 'date':
            $datatype = 'DATE';
            break;
        case 'timestamp':
            $datatype = 'TIMESTAMP';
            break;
        case 'double':
            $datatype = 'DOUBLE';
            break;
        case 'float':
            $datatype = 'FLOAT';
            break;
    }

    $sql .= " $datatype";
    if (isset($length)) {
        $sql .= "($length)";
    }

    if (isset($is_null) && $is_null) {
        $sql .= ' NULL';
    } else {
        $sql .= ' NOT NULL';
    }

    if (isset($increment) && $increment) {
        $sql .= ' AUTO_INCREMENT';
    }

    if (isset($key) && $key) {
        $sql .= ' PRIMARY KEY';
    }

    if (isset($default)) {
        $sql .= " DEFAULT $default";
    }

    return $sql;
}

function _preffixSQL($type, $sql, $constraint)
{
    $reg_parse = str_replace(['(', ')'], ["\(", "\)"], $type);

    if (!preg_match("/$reg_parse/", $sql)) {
        return " $type ".$constraint;
    }

    return " $constraint";
}

/**
 * create database tables.
 *
 * @param string $name - table name
 *
 * @return void
 */
function addTable($name, $columns = [])
{
    if (is_array($columns) && count($columns)) {
        $message = '';
        $sql = '';

        $check = execSQL('show table status where name = "'.$name.'"');
        $check->execute();

        if (count($check->fetchAll(PDO::FETCH_ASSOC)) == 0) {
            $sql_col = implode(',', $columns);
            $sql = "CREATE TABLE $name ($sql_col);";
            $message = '<h1>'.$name.' Table created successfully</h1>';
        } else {
            $sql_col = '';
            $check = execSQL('show columns from '.$name);
            $check->execute();

            $existing_columns = $check->fetchAll(PDO::FETCH_ASSOC);

            for ($col_pos = 0; $col_pos < count($columns); ++$col_pos) {
                $column = $columns[$col_pos];
                $data = explode(' ', $column);
                $existing = false;
                $sub_sql = '';

                for ($col_db_pos = 0; $col_db_pos < count($existing_columns); ++$col_db_pos) {
                    $value = $existing_columns[$col_db_pos];

                    if ($value['Field'] == $data[0]) {
                        $existing = true;

                        if ($sub_sql != '') {
                            $sub_sql .= ', ';
                        }

                        $sub_sql .= 'CHANGE COLUMN '.$data[0].' '.$data[0];

                        if (strtoupper($value['Type']) != $data[1]) {
                            $sub_sql .= " {$data[1]}";
                        }

                        if (
                            strtolower($value['Null']) == 'no'
                            &&
                            preg_match('/NULL/', $column) && !preg_match('/NOT NULL/', $column)
                        ) {
                            $sub_sql .= _preffixSQL($data[1], $sub_sql, 'NULL');
                        } elseif (
                            strtolower($value['Null']) == 'yes'
                            &&
                            preg_match('/NOT NULL/', $column)
                        ) {
                            $sub_sql .= _preffixSQL($data[1], $sub_sql, 'NOT NULL');
                        }

                        if (
                            preg_match('/auto_increment/', $value['Extra'])
                            &&
                            !preg_match('/AUTO_INCREMENT/', $column)
                        ) {
                            $sub_sql .= _preffixSQL($data[1], $sub_sql, 'AUTO_INCREMENT');
                        } elseif (
                            !preg_match('/auto_increment/', $value['Extra'])
                            &&
                            preg_match('/AUTO_INCREMENT/', $column)
                        ) {
                            $sub_sql .= '';
                        }

                        if ($col_pos != $col_db_pos) {
                            // echo "Index mismatch <br>";
                            $prev_col = explode(' ', $columns[$col_pos - 1])[0];
                            $curr_col = explode(' ', $columns[$col_pos])[0];

                            $tmp = strtoupper($value['Type']);
                            $reg_parse = str_replace(['(', ')'], ["\(", "\)"], $data[1]);

                            if (preg_match("/$reg_parse/", $sub_sql)) {
                                $tmp = '';
                            }
                            $sub_sql = $sub_sql." {$tmp} AFTER $prev_col";
                        }
                        break;
                    }
                }

                if (!$existing) {
                    if ($sql_col != '') {
                        $sql_col .= ', ';
                    }
                    $sql_col .= 'ADD '.$column.'';
                    $message = '<h1>'.$name.' Table modified successfully</h1>';
                } else {
                    if ('CHANGE COLUMN '.$data[0].' '.$data[0] != trim($sub_sql)) {
                        if ($sql_col != '') {
                            $sql_col .= ', ';
                        }
                        $sql_col .= $sub_sql;
                        $message = '<h1>'.$name.' Table modified successfully</h1>';
                    }
                }
            }

            if (count($existing_columns) > count($columns)) {
                foreach ($existing_columns as $value) {
                    $should_exist = false;

                    foreach ($columns as $column) {
                        $data = explode(' ', $column);

                        if ($value['Field'] == $data[0]) {
                            $should_exist = true;
                            break;
                        }
                    }

                    if (!$should_exist) {
                        if ($sql_col != '') {
                            $sql_col .= ', ';
                        }

                        $sql_col .= 'DROP '.$value['Field'];
                        $message = '<h1>'.$name.' Table modified successfully</h1>';
                    }
                }
            }

            $sql = 'ALTER TABLE '.$name.' '.$sql_col.';';
        }

        if ($sql_col != '') {
            if (execSQL($sql)->execute()) {
                echo $message;
            } else {
                echo '<h1>'.$name.' Creation Failed</h1>';
            }

            echo "\n";
        } else {
            // echo '<h1>No modifications in '.$name.' Table</h1>';
        }
    }
}
