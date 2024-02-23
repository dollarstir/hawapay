<?php

class userModel {

    // get userdata from database
    public static function  getUserData($uid) {
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

    // update user password
    public function updatePassword($data) : array{
        $query = new Query();
        $result = self::getUserData($data['uid']);
        if(Utils::checkIfEmpty($data) === true){
            return ['type'=>'error','message'=>'All fields are required','action'=>''];
        }else if(!Utils::isPasswordMatch($data['new_password'], $data['confirm_password'])){
            return ['type'=>'error','message'=>'New Password and Confirm Password do not match','action'=>''];
        }
        else{
            if (password_verify($data['old_password'], $result['password'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $sql = "UPDATE user_accounts SET password = ? WHERE uid = ?";
                if ($query->update($sql, [$data['password'], $data['uid']])) {
                    return ['type' => 'success', 'message' => 'Password Updated Successfully', 'action' => 'reload'];
                } else {
                    return ['type' => 'error', 'message' => 'Something went wrong', 'action' => ''];
                }
            } else {
                return ['type' => 'error', 'message' => 'Old Password is incorrect', 'action' => ''];
            }
        }
        
    }

    
    
}