<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="app/view/allfiles/css/login.css" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- Include Font Awesome library for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <style>
      .txt_field {
        position: relative;
      }
      
      .password-toggle {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="center">
          <h1>Login</h1>
          <form class="loginfrm">
              <div class="txt_field">
                  <input type="text" name="email" required>
                  <span></span>
                  <label>Email</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="password" id="password" required>
                  <span></span>
                  <label>Password</label>
                  <i class="password-toggle fa fa-eye" id="password-toggle" onclick="togglePassword(this)"></i>
              </div>
              <div class="pass">Forget Password?</div>
              <div style="display:flex; justify-content:center; align-items:center">
                <button type="submit" class="btn btn-primary">Login <span style="display:none;" class="spinner-border spinner-border-sm statusloading" role="status" aria-hidden="true"></span></button>
              </div>
              <div class="signup_link">
                  Not a Member ? <a href="register">Signup</a>
              </div>
          </form>
      </div>
    </div>

    <script src="app/view/allfiles/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="app/view/allfiles/js/izimodal.min.js"></script>
    <script src="app/view/allfiles/js/tuantem.js"></script>
    
    <script>
      function togglePassword(icon) {
        var passwordField = document.getElementById('password');
        
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          icon.className = 'password-toggle fa fa-eye-slash';
        } else {
          passwordField.type = 'password';
          icon.className = 'password-toggle fa fa-eye';
        }
      }
    </script>
  </body>
</html>
