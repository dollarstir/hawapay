<?= (new headerController())->header();?>

<!-- Left side column. contains the logo and sidebar -->

<!-- side menu hererrr   ****************************** -->

<?php echo (new sidebarController())->sidebar(['page'=>1])  ;?>
<!-- Side MENU HERE *********************** -->


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

										<button class="btn btn-default"
											style="margin-top:15px;border-color: #edf0f2;">ID Verified</button>
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

								<form class="form-horizontal ">
									<div class="form-group row padding:10px !important;">
										<div class="col-lg-4">

											<label class="col-md-6">First Name</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="type name"
													 disabled>
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">last Name</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="type name"
													disabled>
											</div>
										</div>

									</div>



									<div class="form-group row ">
										<div class="col-lg-4">

											<label class="col-md-6">Date Of Birth</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="type name"
													disabled>
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">Phone Number</label>
											<div class="col-md-12">
												<input type="number" class="form-control h-50 fw-bolder" placeholder="phone number"
													disabled>
											</div>
										</div>

									</div>

									<div class="form-group row">
										<div class="col-lg-4">

											<label class="col-md-6">Email Address</label>
											<div class="col-md-12">
												<input type="email" class="form-control h-50 fw-bolder" placeholder="emaill" disabled>
											</div>
										</div>


									</div>
									<div style="justify-content: center; display: flex;"><button type="button"
											class="btn btn-primary mb-5">Save</button></div>

									<hr>
									<!-- Address section -->

									<h3 style="padding:20px;font-weight: bold;">Address</h3>
									<hr>

									<div class="form-group row padding:10px !important;">
										<div class="col-lg-4">

											<label class="col-md-6">Country</label>
											<div class="col-md-12">
												<select class="form-control h-50 fw-bolder">
													<option><img
															src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/gh.svg"
															style="display: inline-block; width: 1rem; height: 1rem; vertical-align: middle;">
														Ghana</option>
													<option>10</option>
													<option>20</option>
													<option>30</option>
													<option>40</option>
													<option>Custome</option>
												</select>
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">City</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="city">
											</div>
										</div>

									</div>



									<div class="form-group row ">
										<div class="col-lg-4">

											<label class="col-md-6">Street Address 1</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="address 1">
											</div>
										</div>
										<div class="col-lg-4">

											<label class="col-md-6">Street Address 2</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder" placeholder="address 2">
											</div>
										</div>

									</div>

									<div class="form-group row">
										<div class="col-lg-4">

											<label class="col-md-8">House number / GPS Address</label>
											<div class="col-md-12">
												<input type="text" class="form-control h-50 fw-bolder"
													placeholder="House number / GPS Address" disabled>
											</div>
										</div>


									</div>
									<div style="justify-content: center; display: flex;"><button type="button"
											class="btn btn-primary mb-5">Save</button></div>

									<hr>



									<!-- <div class="form-group">
								<label class="col-md-6">Select Number of people</label>
								<div class="col-md-6">
									<select class="form-control">
										<option>All Contacts</option>
										<option>10</option>
										<option>20</option>
										<option>30</option>
										<option>40</option>
										<option>Custome</option>
									</select>
								</div>
							</div> -->
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

							<div class="tab-pane box" id="settings">

								<div class="box p-15">
									<form class="form-horizontal form-element">
										<div class="form-group row">
											<label for="inputName" class="col-sm-2 control-label">Name</label>

											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputName" placeholder="">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail" class="col-sm-2 control-label">Email</label>

											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputEmail" placeholder="">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPhone" class="col-sm-2 control-label">Phone</label>

											<div class="col-sm-10">
												<input type="tel" class="form-control" id="inputPhone" placeholder="">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputExperience"
												class="col-sm-2 control-label">Experience</label>

											<div class="col-sm-10">
												<textarea class="form-control" id="inputExperience"
													placeholder=""></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputSkills" class="col-sm-2 control-label">Skills</label>

											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputSkills" placeholder="">
											</div>
										</div>
										<div class="form-group row">
											<div class="ml-auto col-sm-10">
												<div class="checkbox">
													<input type="checkbox" id="basic_checkbox_1" checked="">
													<label for="basic_checkbox_1"> I agree to the</label>
													&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="ml-auto col-sm-10">
												<button type="submit"
													class="btn btn-rounded btn-success">Submit</button>
											</div>
										</div>
									</form>
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