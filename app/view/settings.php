<?= (new headerController())->header();?>

<!-- Left side column. contains the logo and sidebar -->

<!-- side menu hererrr   ****************************** -->

<?php echo (new sidebarController())->sidebar(['page'=>1])  ;?>
<!-- Side MENU HERE *********************** -->

<?php 
$user = (new  userModel())->getUserData($_SESSION['account_user']['uid']);

if($user['id_verified']== ""){
	$verification = '<button class="btn btn-primary verifyidopt"  data-izimodal-open="#verifyid" data-izimodal-transitionin="fadeInDown" style="margin-top:15px;"> Verify Identity</button>';
}

elseif($user['id_verified'] == 0){
	$verification = '<button class="btn btn-info" style="margin-top:15px;border-color: #edf0f2;">Uder Review</button>';
}
elseif($user['id_verified'] ==1){
	$verification = '<button class="btn btn-default" style="margin-top:15px;border-color: #edf0f2;">ID Verified</button>';
}


elseif($user['id_verified']== ""){
	$verification = '<button class="btn btn-primary verifyidopt"  data-izimodal-open="#verifyid" data-izimodal-transitionin="fadeInDown" style="margin-top:15px;"> Verify Identity</button>';
}
$dob = ($user['id_verified'] ==1)?'<input type="text" class="form-control h-50 fw-bolder" placeholder="type name" name="dob" value="'.$user['dob'].'"
disabled>':'<input type="date" class="form-control h-50 fw-bolder" placeholder="date of birth" name="dob" value="'.$user['dob'].'">';


$emailverified = ($user['email_verified'] ==1)?'<div class="" style="display:flex;justify-content:right;align-items:right;"><div class="me-1"><svg width="16" fill="#5aa17f" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM9.29 16.29L5.7 12.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l6.88-6.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-7.59 7.59c-.38.39-1.02.39-1.41 0z"></path></svg></div><small class="dark-mint-text">Verified</small></div>':'<button class="btn btn-primary btn-sm" style="margin-top:15px;"> Verify Email</button>';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">

			<div class="row">

				<div class="col-12 col-lg-7 col-xl-8">

					<div class="nav-tabs-custom box-profile">
						<ul class="nav nav-tabs">
							<li><a class="active" href="#usertimeline" data-toggle="tab"> My Profile</a></li>
							<li><a href="#security" data-toggle="tab">Security</a></li>
							<li><a href="#settings" data-toggle="tab">Mobile Number</a></li>
							<li><a href="#referraltab" data-toggle="tab">Referrals</a></li>
						</ul>

						<div class="tab-content">

							<div class="active tab-pane box" id="usertimeline">
							<hr>
								<h3 style="padding:20px;font-weight: bold;">My profile</h3>
								<hr>

								<div class="row text-center" style="padding:30px;">

									<div class="col-lg-4">
										<h5 style="font-weight: bold;">Indentity</h5><br>
										<div class="d-flex justify-content-center">

											<div
												style="border-radius: 50%;margin-left:15px; border: 1px solid #f2f3f5;height: 5rem;width:5rem; display: flex;overflow: hidden;-webkit-box-align: center;align-items: center;	-webkit-box-pack: center;justify-content: center;background-color: #f2f3f5;">
												<img src="app/view/allfiles/images/card/id.svg" style="">

											</div>
										</div>

										<?=$verification;?> 
									</div>



									<div class="col-lg-6 mt-15">
										<h5 style="font-weight: bold;">Daily Limit</h5><br>


										<div class="progress" style="height: 30px;">
											<div class="progress-bar" role="progressbar"
												style="width: 25%;font-size: 12px;" aria-valuenow="25" aria-valuemin="0"
												aria-valuemax="100">95% remaining
											</div>
										</div>
										<br><br>

										<small>20,000 GHS / day</small>


									</div>
								</div>




								<hr>
								<h3 style="padding:20px;font-weight: bold;">General Info</h3>
								<hr>

								<form class="form-horizontal  editgeneral">
									<div class="form-group row padding:10px !important;">
										<div class="col-lg-4">

											<label class="col-md-6">First Name</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="type name" name="first_name" value="<?=$user['first_name']?>"
													 disabled>

													 <input type="hidden" name="uid" value="<?=$user['uid'];?>">
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">last Name</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="type name" name="last_name" value="<?=$user['last_name']?>"
													disabled>
											</div>
										</div>

									</div>



									<div class="form-group row ">
										<div class="col-lg-4">

											<label class="col-md-6">Date Of Birth</label>
											<div class="col-md-12">
												<?=$dob;?>
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">Phone Number</label>
											<div class="col-md-12">
												<input type="number" class="form-control h-50 fw-bolder" placeholder="phone number" name="primary_number" value="<?=$user['primary_number']?>"
													disabled>
											</div>
										</div>

									</div>

									<div class="form-group row">
										<div class="col-lg-4">

											<label class="col-md-6">Email Address</label>
											<div class="col-md-12">
												
												<input type="email" class="form-control h-50 fw-bolder" placeholder="emaill" value="<?=$user['email'];?>" disabled>
												<?=$emailverified;?>
											</div>
										</div>


									</div>
									<div style="justify-content: center; display: flex;">
										<?php  
										if(!empty($user['first_name']) && !empty($user['last_name']) && !empty($user['dob']) && !empty($user['primary_number']) && !empty($user['email']) && $user['id_verified'] == 1){
											echo '<button type="submit" disabled
											class="btn btn-primary mb-5">Save
										</button>';
										}
										else{
											echo '<button type="submit" 
											class="btn btn-primary mb-5">Save
										</button>';
										}
										
										;?>

									</div>
								</form>

									<hr>
									<!-- Address section -->

								<form class="form-horizontal  editgeneral" >

									<h3 style="padding:20px;font-weight: bold;">Address</h3>
									<hr>

									<div class="form-group row padding:10px !important;">
										<div class="col-lg-4">

											<label class="col-md-6">Country</label>
											<div class="col-md-12">
												<select class="form-control h-50 fw-bolder" name="country">
													<?php 

													if(empty($user['country'])){
														echo '<option value="">Select Country</option>';
													}
													else{
														echo '<option value="'.$user['country'].'">'.$user['country'].'</option>';
													}
													
													?>
													<option value="Ghana">Ghana</option>
													<option value="Nigeria">Nigeria</option>
													
												</select>
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">City</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="city" value="<?=$user['city'];?>" name="city" >
											</div>
										</div>

									</div>



									<div class="form-group row ">
										<div class="col-lg-4">

											<label class="col-md-6">Street Address 1</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="address 1" value="<?=$user['address'];?>" name="address">
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">Street Address 2</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="address 2" value="<?= $user['address2'];?>" name="address2">
											</div>
										</div>

									</div>

									<div class="form-group row">
										<div class="col-lg-4">

											<label class="col-md-8">House number / GPS Address</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder"
													placeholder="House number / GPS Address"  value="<?=$user['gps_address'];?>" name="gps_address">
													<input type="hidden" name="uid" value="<?=$user['uid'];?>">
											</div>


										</div>


									</div>
									<div style="justify-content: center; display: flex;"><button type="submit"
											class="btn btn-primary mb-5">Save</button></div>

									<hr>



								</form>




							</div>
							<!-- /.tab-pane -->


							<!-- Tab for Security  -->

							<div class="tab-pane box" id="security">

							<hr>
								<h3 style="padding:20px;font-weight: bold;">Security</h3>
								<hr>

								<div class="row text-center" style="padding:30px;">

									<div class="col-lg-4">
										<h5 style="font-weight: bold;">2 Factor Authentication</h5>

										<small>For an extra layer of security, enable one of the following.</small>
										<br><br>

										

										<div class="demo-radio-button" style="text-align: justify;">
											<input name="group1" type="radio" id="radio_1" checked="">
											<label for="radio_1" style="font-weight: bold;">sms</label>
											<br>
											<p>A verification code will be sent to your phone</p>
											<input name="group1" type="radio" id="radio_2">
											<label for="radio_2" style="font-weight: bold;">Google Authenticator</label>
											<br>
											<p>Use the Google Authenticator app to scan the QR code</p>
						
										</div>
										

										
									</div>



									
								</div>




								<hr>
								<h3 style="padding:20px;font-weight: bold;">Change Password</h3>
								<hr>

								<form class="form-horizontal ">
									<div class="form-group row padding:10px !important;">
										<div class="col-lg-4  col-sm-12">

											<label class="col-12">Current passwword</label>
											<div class="col-12">
												<input type="password" class="form-control h-50 fw-bolder" placeholder="current password"
													>
											</div>
										</div>
										

									</div>



									<div class="form-group row ">
										<div class="col-lg-4  col-sm-12">

											<label class="col-12">New Password</label>
											<div class="col-12">
												<input type="password" class="form-control h-50 fw-bolder" placeholder="New password">
													
											</div>
										</div>
										

									</div>

									<div class="form-group row">
										<div class="col-lg-4  col-sm-12">

											<label class="col-sm-12">Confirm New Password</label>
											<div class="col-sm-12">
												<input type="password" class="form-control h-50 fw-bolder" placeholder="confirm new password" >
											</div>
										</div>


									</div>




									
									<div style="justify-content: center; display: flex;"><button type="button"
											class="btn btn-primary mb-5">Save</button></div>

									<hr>
									<!-- Address section -->

									



									

								</form>


							</div>
							<!-- /.tab-pane -->


							<!-- tab for Mobile Numbers -->

							<div class="tab-pane box" id="settings">

								<div class="box p-15">
									<hr>
									<h3 style="padding:20px;font-weight: bold;">Mobile Numbers</h3>
									<hr>
										<h4>Mobile Money</h4>
										<h6>Your mobile numbers used for making and receiving payments</h6>

										<div class="numbersbox">
											<div class="row">
												<p class="col-6">Primary Number</p>
												<p class="col-6">+233 <?= $user['primary_number'];?> <svg width="14" fill="#39DA8A" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.19 1.36l-7 3.11C3.47 4.79 3 5.51 3 6.3V11c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6.3c0-.79-.47-1.51-1.19-1.83l-7-3.11c-.51-.23-1.11-.23-1.62 0zm-1.9 14.93L6.7 13.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l5.88-5.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-6.59 6.59c-.38.39-1.02.39-1.41 0z"></path></svg><small class="mt-15 text-success fw-bolder">verified</small></p>

											</div>
											<div class="row">
												<p class="col-6">Secondary Number</p>
												<p class="col-6"><?= empty($user['secondary_number'])?'':'+233 '.$user['secondary_number'].' <svg width="14" fill="#39DA8A" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.19 1.36l-7 3.11C3.47 4.79 3 5.51 3 6.3V11c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6.3c0-.79-.47-1.51-1.19-1.83l-7-3.11c-.51-.23-1.11-.23-1.62 0zm-1.9 14.93L6.7 13.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l5.88-5.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-6.59 6.59c-.38.39-1.02.39-1.41 0z"></path></svg><small class="mt-15 text-success fw-bolder">verified</small>';?></p>
											</div>
										</div>


								</div>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
			</div>
			<!-- /.row -->

		</section>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->

<?= (new footerController())->footer();?>

</body>



</html>