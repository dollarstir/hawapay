<?php

class userModel {

    // get userdata from database
    public function getUserData($uid) {
        $query = new Query();
        $result = $query->fetchOne("SELECT * FROM users WHERE uid =?", [$uid]);

        if(empty($result)){
            return false;
        }else{
            return $result[0];
        }

       
    }
}