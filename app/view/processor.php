<?php

if(isset($_GET['action'])){
    $action = $_GET['action'];
    $data = $_POST; // Most actions use $_POST data, so we initialize it here.

    switch ($action) {
        case 'registeruser':
            echo json_encode((new registrationModel())->register($data));
            break;
        
        case 'loginuser':
            echo json_encode((new loginModel())->login($data));
            break;

        case 'addprimaryphone':
            echo json_encode((new otpModel())->addprimarynumber($data['email'], $data['primary_number']));
            break;

        case 'verifyotp':
            echo json_encode((new otpModel())->verifyotp($data['email'], $data['otp']));
            break;

        case 'logoutdialog':
            echo json_encode((new userController())->logoutdialog());
            break;

        case 'logout':
            echo json_encode((new userModel())->logout());
            break;

        case 'editgeneral':
            // Assuming $data is already extracted from $_POST
            echo json_encode((new userModel())->updategeneralinfo($data));
            break;

        case 'verifyiddialog':
            echo json_encode((new kycController())->kycforms());
            break;

        case 'loaddata':
            // Assuming necessary variables are extracted from $_GET
            $class = new $class();
            $class->$function();
            break;

        case 'changepassword':

            echo json_encode((new userModel())->updatepassword($data));
            break;

        default:
            // Optionally handle unknown actions
            echo json_encode(['error' => 'Unknown action']);
            break;
    }
}
