<?php


if(isset($_GET['action'])){

    $action = $_GET['action'];

    if($action == 'registeruser'){
        $data = $_POST;
        echo  json_encode((new registrationModel())->register($data));
        
    }
}