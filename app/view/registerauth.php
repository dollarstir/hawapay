<!DOCTYPE html>
<html lang="en">
  <head>
    <title>New Account : Tuantem </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="app/view/allfiles/css/login.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  </head>
  <body>
    <div class="container">
      <div class="center">
          <h1>Sign Up</h1>
          <form  class="registerfrm" >
              <div class="txt_field">
                  <input type="text" name="fullname" required>
                  <span></span>
                  <label>Full Name</label>
              </div>

             

              <div class="txt_field">
                  <input type="email" name="email" required>
                  <span></span>
                  <label>Email Address</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="password" required>
                  <span></span>
                  <label>Password</label>
              </div>

              <div class="txt_field">
                  <input type="password" name="repass" required>
                  <span></span>
                  <label>Confirm Password</label>
              </div>


              <div class="txt_field">
                  <select name="country" id="">
                    <option value=""> Select Country of Residence</option>
                    <option value="Ghana"> Ghana</option>
                    <option value="Nigeria"> Nigeria</option>
                  </select>
                 
              </div>


              <div class="txt_field">
                  <input type="text" name="referral_code" >
                  <span></span>
                  <label>Referral_code (optional)</label>
              </div>
              <!-- <div class="pass">Forget Password?</div> -->
              <div style="display:flex; justify-content:center; align-items:center">
                <button  type="submit" class="btn btn-primary">Register <span style="display:none;" class="spinner-border spinner-border-sm  statusloading" role="status" aria-hidden="true"></span></button>
              </div>
              <div class="signup_link">
                  Alread have accountr ? <a href="login">Login</a>
              </div>
          </form>
      </div>
    </div>

    <script src="app/view/allfiles/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="app/view/allfiles/js/tuantem.js"></script>
  </body>
</html>