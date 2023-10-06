<?php

//  namespace db;
class database
{
    public $conn;
    public $conn3d;
    public $conpk10;
    public $connfast3;
    public $connmark6;

    public function __construct()
    {
        // $this->conn = mysqli_connect('localhost', 'root', '', 'hostel');
        // if (!$this->conn) {
        //     echo 'failed';
        // }
        $this->db5d();
        // $this->db3d();
        // $this->dbpk10();
        // $this->dbfast3();
        // $this->dbmark6();

       
       
    }

    public function dbpk10(){

        try {
            $this->conpk10 = new PDO('mysql:host='.Config::get("DB_HOST").';dbname='.Config::get("DB_PK10").'', ''.Config::get("DB_USER").'', ''.Config::get("DB_PASS").'');
            $this->conpk10->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }

    }

    public function db5d(){
        try {
            $this->conn = new PDO('mysql:host='.Config::get("DB_HOST").';dbname='.Config::get("DB_5D").'', ''.Config::get("DB_USER").'', ''.Config::get("DB_PASS").'');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }
    }


    public function db3d(){
        try {
            $this->conn3d = new PDO('mysql:host='.Config::get("DB_HOST").';dbname='.Config::get("DB_3D").'', ''.Config::get("DB_USER").'', ''.Config::get("DB_PASS").'');
            $this->conn3d->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }
    }



    public function dbfast3(){
        try {
            $this->connfast3 = new PDO('mysql:host='.Config::get("DB_HOST").';dbname='.Config::get("DB_FAST3").'', ''.Config::get("DB_USER").'', ''.Config::get("DB_PASS").'');
            $this->connfast3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }
    }


    public function dbmark6(){
        try {
            $this->connmark6 = new PDO('mysql:host='.Config::get("DB_HOST").';dbname='.Config::get("DB_MARK6").'', ''.Config::get("DB_USER").'', ''.Config::get("DB_PASS").'');
            $this->connmark6->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<h1 style="color:red;">ERROR: Failed to connect  Database</h1>';
            // var_dump($this->conn);
        }
    }



}
