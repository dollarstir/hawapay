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

    if($action == 'logoutdialog'){
       
        echo  json_encode((new userController())->logoutdialog());
        
    }

    if($action == 'logout'){
       
        echo  json_encode((new userModel())->logout());
        
    }

    if($action == 'editgeneral'){
        extract($_POST);
        $data = $_POST;
        // print_r($data);
       
        echo  json_encode((new userModel())->updategeneralinfo($data));
        
    }
}