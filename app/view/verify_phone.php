<?php

session_start();

// checking if user session is set

 if(isset($_SESSION['account_user'])){
    $email = $_SESSION['account_user']['email'];
    $uid = $_SESSION['account_user']['uid'];
    $query = new Query();
    $result = $query->fetchAll("SELECT * FROM user_accounts WHERE email = ? ", [$email]);
    if($result){
        if($result[0]['email_verified'] == 1  && $result[0]['primary_verified'] == 1) {
            echo '<script>window.location="dashboard"</script>';
        }
        elseif($result[0]['email_verified'] != 1  && $result[0]['primary_verified'] == 1) {
            echo '<script>window.location="verify-email"</script>';
        }
        elseif($result[0]['email_verified'] == 1  && $result[0]['primary_verified'] != 1) {
            echo '<script>window.location="verify-phone"</script>';

        }

        elseif($result[0]['email_verified'] != 1  && $result[0]['primary_verified'] != 1) {
            echo '<script>window.location="verify-email"</script>';
        }


        // if(isset($_POST['primary_nunmber'])){

        //     (new otpModel())->addprimarynumber($email,$_POST['primary_nunmber']);
     
        // }
    }
    else{
        echo '<script>window.location="register"</script>';
    }


  


 }

 else{
    echo '<script>window.location="register"</script>';
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Verification</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        /* Custom CSS for the phone number verification page */
        body {
            background-color: #f3f3f3;
            font-family: 'Poppins';
        }

        .verification-container {
            text-align: center;
            padding: 50px;
            margin-top: 10%;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
        }

        .verification-icon {
            font-size: 3rem;
            color: #007bff;
        }

        .verification-title {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 20px;
            color: #007bff;
        }

        .verification-input {
            font-size: 1.2rem;
        }

        .send-otp-button {
            font-size: 1.2rem;
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
        }


        




        
    </style>



</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto verification-container">
                        <div class="centerlogo" style="margin-top:-10px;border:10px solid #f1f1f1 ;width:100px;height:100px;border-radius:100px;
                            align-self: center;margin:auto;margin-top:-110px;
                            background-color: #fff;">
                            <img  style="height:100%;width:100%;object-fit:cover;" src="https://tuantem.com/images/svgs/logo.png" alt="logo" >
                        </div>
                        <br>
                <i class="fas fa-mobile-alt verification-icon"></i>
                <!-- <div class="spinner-grow text-dark " role="status" style="font-size:10px;">
                    <span class="visually-hidden"></span>
                </div> -->
                           <h1 class="verification-title">Phone Number Verification</h1>
                <p>Please enter your phone number to receive an OTP (One-Time Password) for verification. This will be your primary phone number </p>
                <form class="addprimary">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control verification-input" placeholder="Enter your primary phone number" name="primary_nunmber">
                            <input type="hidden" name="email" id="" value= "<?=$email; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary send-otp-button">
                        <i class="fas fa-paper-plane"></i> Send OTP
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- <script src="app/view/allfiles/js/tuantem.js"></script>
 -->

 <script src="app/view/allfiles/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="app/view/allfiles/js/tuantem.js"></script>
</body>
</html>
