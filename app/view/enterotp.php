<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        /* Custom CSS for the OTP verification page */
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
            font-size: 1.5rem;
            text-align: center;
        }

        .verify-button {
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
                            align-self: center;margin:auto;margin-top:-100px;
                            background-color: #fff;">
                            <img  style="height:100%;width:100%;object-fit:cover;" src="https://tuantem.com/images/svgs/logo.png" alt="logo" >
                        </div>
                        <br>
                <i class="fas fa-lock verification-icon"></i>
                <h1 class="verification-title">OTP Verification</h1>
                <p>Please enter the OTP (One-Time Password) you received to verify your phone number.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control verification-input" placeholder="Enter OTP">
                    </div>
                    <button type="submit" class="btn btn-primary verify-button">Verify</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
