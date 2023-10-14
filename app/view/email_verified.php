<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Success</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for the success page */
        body {
            background-color: #f3f3f3;
        }

        .success-container {
            text-align: center;
            padding: 50px;
            margin-top: 10%;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
        }

        .company-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .company-logo {
            max-width: 100px;
            margin: 20px 0;
        }

        .success-icon {
            font-size: 3rem;
            color: #3ab54a;
        }

        .success-message {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 20px;
            color: #3ab54a;
        }

        .sign-in-link {
            font-size: 1.2rem;
            text-decoration: none;
            color: #007bff;
        }

        .sign-in-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto success-container">

                        <div class="centerlogo" style="margin-top:-10px;border:10px solid #f1f1f1 ;width:100px;height:100px;border-radius:100px;
                            align-self: center;margin:auto;margin-top:-110px;
                            background-color: #fff;">
                            <img  style="height:100%;width:100%;object-fit:cover;" src="https://tuantem.com/images/svgs/logo.png" alt="logo" >
                        </div>
                        <br>
                
                <!-- <h1 class="company-name">Tuantem</h1> --><br>
                <i class="fas fa-check-circle success-icon"></i>
                <h1 class="success-message">Email Verified</h1>
                <p>Your email has been successfully verified. You can now <a href="login" class="sign-in-link">sign in</a> to your account.</p>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
