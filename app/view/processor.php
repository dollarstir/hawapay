<?php


if(isset($_GET['action'])){

    $action = $_GET['action'];

    if($action == 'registeruser'){
        $data = $_POST;
        echo  json_encode((new registrationModel())->register($data));
        
    }

    if($action == 'loginuser'){
        $data = $_POST;
        echo  json_encode((new loginModel())->login($data));
        
    }

    if($action == 'addprimaryphone'){
        $data = $_POST;
        echo  json_encode( (new otpModel())->addprimarynumber($data['email'],$data['primary_nunmber']));
        
    }

    if($action == 'verifyotp'){
        $data = $_POST;
        echo  json_encode( (new otpModel())->verifyotp($data['email'],$data['otp']));
        
    }
}