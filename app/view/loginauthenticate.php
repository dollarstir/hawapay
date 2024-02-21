<!DOCTYPE html>
<html lang="en">
<head>
    <title>Responsive Login Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f7f6; /* Soft background color */
        padding-top: 40px;
      }
      .form-control, .form-control:focus {
        height: 48px; /* Increased input height */
        font-size: 16px; /* Comfortable font size */
        border-radius: 5px; /* Rounded borders for inputs */
        box-shadow: none; /* Remove Bootstrap default focus glow */
      }
      .form-label {
        font-weight: 600; /* Make labels slightly bolder */
      }
      .login-container {
        background: #ffffff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Subtle shadow for depth */
      }
      .btn-primary {
        font-size: 16px; /* Matching button text size */
        border-radius: 5px; /* Rounded button edges */
        padding: 10px 15px; /* Comfortable padding */
        width: 100%; /* Full width button */
      }
      .input-group-text {
        border: none;
        background: transparent;
        padding: 0 15px;
      }
      .password-toggle {
        cursor: pointer;
      }
      /* Adjusting the position of the eye icon */
      .input-group .form-control {
        border-right: none; /* Smooth transition to icon */
      }
      .input-group .input-group-append {
        background: transparent;
        border: 1px solid #ced4da; /* Match input border */
        border-left: none; /* Seamless connection */
      }


      .loader-container {
        position: fixed; /* Full screen */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        z-index: 9999; /* Make sure it's above all other elements */
      }

      .loader {
        width: 100px; /* Set the size of the loader image */
        height: 100px;
        background: url('app/view/allfiles/images/logo.png') no-repeat center center;
        background-size: contain; /* Make sure the image is contained within the div */
        animation: spin 2s linear infinite; /* Spin animation */
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
    </style>
</head>
<body onload="document.querySelector('.loader-container').style.display='none';">
<!-- loader -->
<div class="loader-container">
  <div class="loader"></div>
</div>
<!-- loader end -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="login-container">
        <h1 class="text-center mb-4">Login</h1>
        <form class="loginfrm">
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" name="password" id="password" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="password-toggle fa fa-eye" id="password-toggle" onclick="togglePassword()"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
          <div class="text-center mt-3">
            <a href="#">Forget Password?</a>
          </div>
          <div class="text-center mt-3">
            Not a Member? <a href="register">Signup</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- External JavaScript resources -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="app/view/allfiles/js/izimodal.min.js"></script>
<script src="app/view/allfiles/js/tuantem.js"></script>
<script>
  function togglePassword() {
    var passwordField = document.getElementById('password');
    var toggleIcon = document.getElementById('password-toggle');
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleIcon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
      passwordField.type = 'password';
      toggleIcon.classList.replace('fa-eye-slash', 'fa-eye');
    }
  }
</script>
</body>
</html>
