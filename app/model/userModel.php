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
}