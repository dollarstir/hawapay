

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Notice</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        /* Custom CSS for the email icon and card design */
        
        body {
            font-family: 'Poppins';
        }
        .email-icon {
            font-size: 2rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .btn {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>


<?php

session_start();


if(isset($_SESSION['account_user']['email'])){

    $email = $_SESSION['account_user']['email'];

    if(isset($_GET['token'])){

        $token = $_GET['token'];

        $query = new Query();
        $result = $query->fetchAll("SELECT uid  FROM user_accounts WHERE email = ? ", [$email]);

        if($result){
            $uid = $result[0]['uid'];
            $result = $query->fetchAll("SELECT * FROM email_verification WHERE uid = ? AND verification_code = ? ", [$uid, $token]);

            if(!empty($result)){

                if($result[0]['exp_date'] > time()){
                    $query->update("UPDATE user_accounts SET email_verified = ? WHERE uid = ?", [1, $uid]);
                    $query->update(" UPDATE email_verification SET exp_date = ? WHERE uid = ? AND verification_code = ?", [time(), $uid, $token]);
                    echo '<script>window.location="email-verified"</script>';
                }
                else{
                    echo '<script> alert("verification link expired");</script>';
                }
                  
                
               
            }
            else{
                echo '<script> alert("Invalid token");  </script>';
            }
        }
        else{
            echo '<script>window.location="register"</script>';
        }

        
    }
    else{
        // echo '<script>window.location="register"</script>';

    }
  
}
else{
    echo '<script>window.location="register"</script>';
}


?>

<body style="background:#f1f1f1;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div  class="card">
                    <div class="card-body text-center">
                        <div class="centerlogo" style="margin-top:-10px;border:10px solid #f1f1f1 ;width:100px;height:100px;border-radius:100px;
                            align-self: center;margin:auto;margin-top:-70px;
                            background-color: #fff;">
                            <img  style="height:100%;width:100%;object-fit:cover;" src="https://tuantem.com/images/svgs/logo.png" alt="logo" >
                        </div>
                        <br>
                        <h5 class="card-title">
                            <i class="fas fa-envelope email-icon"></i> Email Verification
                        </h5>
                        <p class="card-text">Please check your email (<?= $email?>) to verify your email address. We've sent you a verification link <i class="fas fa-check text-success"></i>. Click the link to complete the verification process.</p>
                        <hr>
                        <p class="card-text">If you haven't received the verification email, you can click the "Resend Verification Code" button below: <button class="btn btn-primary" id="resendButton"><i class="fas fa-redo"></i> Resend Verification Code</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script src="app/view/allfiles/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="app/view/allfiles/js/tuantem.js"></script>

    <script>

        $(document).ready(function(){

            function trigermessage(message,type){


                toastr.type(message,type);
            }

            

        });
    </script>
</body>
</html>
