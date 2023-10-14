<?php

class Query extends database{


    public function fetchAll($query, $params=[]){
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function fetchOne($query, $params=[]){
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch();
    }

    public function insert($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        $success = $stmt->execute($params);
        if ($success) {
            return true; // Insertion was successful
        } else {
            return false; // Insertion failed
        }
    }


    public function delete($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        $success = $stmt->execute($params);
        if ($success) {
            // Check if any rows were affected by the delete operation
            if ($stmt->rowCount() > 0) {
                return true; // Deletion was successful
            } else {
                return false; // No rows were affected, so deletion failed
            }
        } else {
            return false; // Deletion failed
        }
    }
    
    public function update($query, $params = [],$rowsAffected = false) {
        $stmt = $this->conn->prepare($query);
        $success = $stmt->execute($params);
    
        if ($success) {
            // Check if any rows were affected by the update operation

            if($rowsAffected){
                return $stmt->rowCount();
            }
            if ($stmt->rowCount() > 0) {
                return true; // Update was successful
            } else {
                return false; // No rows were affected, so update failed
            }
        } else {
            return false; // Update failed
        }
    }
    
    

    public function executeSql($query, $params=[])
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
    }

    public function runQueriesInTransaction($queries)
    {
        // Connect to your database here 


        try {

            $pdo = $this->conn;

            // echo "Connected successfully";


            // Begin a transaction 
            $pdo->beginTransaction();
            // Prepare each query and execute it with any parameters 
            foreach ($queries as $query) {

                // print_r($query);
                $stmt = $pdo->prepare($query['sql']);
                $stmt->execute($query['params']);
            }

            // Commit the transaction 
            $pdo->commit();

            $msg = ["type"=>"success"];
        } catch (PDOException $e) {
            // If any queries fail, roll back the transaction and throw an error 
            $pdo->rollBack();

            $err = "Transaction failed: " . $e->getMessage();
            $msg = ["type"=>"error", "message"=>$err, "error_code"=>"TRANS110"];
        }

        // Close the database connection 
        $pdo = null;

        return $msg;
    }
}