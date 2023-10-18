<?php

class userModel {

    // get userdata from database
    public function getUserData($uid) {
        $query = new Query();
        $result = $query->fetchOne("SELECT * FROM user_accounts WHERE uid =?", [$uid]);

        if(empty($result)){
            return false;
        }else{
            return $result;
        }

       
    }


    public function logout(){
        session_start();
        session_destroy();
        return ['type'=>'success','message'=>'Logout Successful','action'=>'login'];
    }

    // update user data
    public function updateGeneralInfo($data) {
        $query = new Query();
        $setClauses = [];
        $params = [];
    
        foreach ($data as $key => $value) {
            // Add the key to the SET clause and the corresponding value to the parameters array
            $setClauses[] = "$key = ?";
            $params[] = $value;
        }
    
        // Add the WHERE clause to specify the user to update
        $params[] = $data['uid'];
    
        // Construct the SQL query
        $sql = "UPDATE user_accounts SET " . implode(', ', $setClauses) . " WHERE uid = ?";
    
        if ($query->update($sql, $params)) {
            return ['type' => 'success', 'message' => 'Profile Updated Successfully', 'action' => 'reload'];
        } else {
            return ['type' => 'error', 'message' => 'Something went wrong', 'action' => ''];
        }
    }
    
}