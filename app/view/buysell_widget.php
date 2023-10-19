
<?php

$user  = (new userModel)->getUserData($_SESSION['account_user']['uid']);
// print_r($user);
 ?>
<div class="box">
								<div class="box-header with-border p-0">
									<ul class="nav nav-tabs nav-fill das-tab" role="tablist">
										<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tabid1" role="tab">Buy</a> </li>
										<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tabid2" role="tab">Sell</a> </li>
									</ul>
								</div>
							<div class="box-body">
								<div class="tab-content">
									<div class="tab-pane active" id="tabid1" role="tabpanel">
										<?php

										if($user['id_verified'] !=1){

											echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											Kindly go the settings page (Settings -> My Profile -> Verify Identity) to verify your identify to gain access to all the features availabe. 
											
																					  </div>';

											
										}

										else{

											echo '<h4 class="box-title mb-15">Currency</h4>
											<div class="row bb-1 pb-15 mb-15">
												<div class="col-xl-3 col-md-3 col-12">
													<div class="sel-coin-type-outer">
														<input type="radio" name="coin-type" id="sell-1" checked="">
														<label for="sell-1" class="sel-coin-type">
															<i class="cc BTC mr-0"></i> 
															<p class="mb-5">Bitcoin</p>
															<small>@</small>
															<p class="mb-0"><small>1USD</small></p>
														</label>
													</div>
												</div>
												<div class="col-xl-3 col-md-3 col-12">
													<div class="sel-coin-type-outer">
														<input type="radio" name="coin-type" id="sell-2">
														<label for="sell-2" class="sel-coin-type">
															<i class="cc ETH mr-0"></i> 
															<p class="mb-5">Ethereum</p>
															<small>@</small>
															<p class="mb-0"><small>1USD</small></p>
														</label>
													</div>
												</div>
	
												<div class="col-xl-3 col-md-3 col-12">
													<div class="sel-coin-type-outer">
														<input type="radio" name="coin-type" id="sell-3">
														<label for="sell-3" class="sel-coin-type">
															<i class="cc ETH mr-0"></i> 
															<p class="mb-5">Ethereum</p>
															<small>@</small>
															<p class="mb-0"><small>1USD</small></p>
														</label>
													</div>
												</div>
												<div class="col-xl-3 col-md-3 col-12">
													<div class="sel-coin-type-outer">
														<input type="radio" name="coin-type" id="sell-4">
														<label for="sell-4" class="sel-coin-type">
															<i class="cc LTC mr-0"></i> 
															<p class="mb-5">Lite</p>
															<small>@</small>
															<p class="mb-0"><small>1USD</small></p>
														</label>
													</div>
												</div>
											</div>
	
	
	
											<!-- payment option  -->
	
											<h4 class="box-title mb-15">Payment Method</h4>
											<div class="row bb-1 pb-15 mb-15">
	
												<div class="col-xxxl-4 col-md-6 col-12">
													<div class="sel-coin-type-outer">
														<input type="radio" name="pay-type" id="pay-2">
														<label for="pay-2" class="sel-coin-type">
															<i class="fa fa-mobile"></i> 
															<p class="mb-5">Mobile Money</p>
															<!-- <p class="mb-0"><small>**** **** 8907</small></p> -->
														</label>
													</div>
												</div>	
												<div class="col-xxxl-4 col-md-6 col-12">
													<div class="sel-coin-type-outer">
														<input type="radio" name="pay-type" id="pay-1" checked="">
														<label for="pay-1" class="sel-coin-type">
															<i class="fa fa-credit-card"></i> 
															<p class="mb-5">Wallet</p>
															<p class="mb-0"><small>$209.00</small></p>
														</label>
													</div>
												</div>
																				
											</div>
	
											<!-- payment option  -->
											
											
											<!--  Buy Amount section  -->
											<h4 class="box-title mb-15">Amount</h4>
											<div class="row">
												<div class="col-12">
													<div class="buy-input-block-content row">
														<div class="buy-input-box col-md-12">
															<!-- <div class="form-group">
																<input type="text" class="form-control" placeholder="899 USD" name="">
															</div> -->
															<div class="input-group mb-50">
																<span class="input-group-addon">USD <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/us.svg" style="display: inline-block; width: 1.75rem; height: 1.75rem; vertical-align: middle;"></span>
																<input type="text" class="form-control" placeholder="Amount you need">
															</div>
														</div>
														<div class="col-md-10 text-center" style="margin-top:-20px;">
															<i class="fa fa-exchange dir-icon"></i>
														</div><br>
														<div class="buy-input-box col-md-12">
															<!-- <div class="form-group">
																<input type="text" class="form-control" placeholder="8 BTC" name="">
															</div> -->
															<div class="input-group mb-50">
																<span class="input-group-addon">GHS <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/gh.svg" style="display: inline-block; width: 1.75rem; height: 1.75rem; vertical-align: middle;"></span>
																<input type="text" class="form-control" placeholder="Amount to pay">
															</div>
														</div>
	
	
														<div class="buy-input-box col-md-12">
															
															<div class="input-group mb-50">
																
																<input type="text" class="form-control" placeholder="Enter wallet address">
															</div>
														</div>
	
														
														<h4 class="box-title mb-15">Miners Fee</h4>
														<div class="form-group row">
															<div class="ml-auto col-sm-3">
																<div class="checkbox">
																	<input type="radio" id="mfeecheck1" name="minersfees">
																	<label for="mfeecheck1">$1.59<small> <br>HIGH</small></label> 
																</div>
															</div>
	
															<div class="ml-auto col-sm-3">
																<div class="checkbox">
																	<input type="radio" id="mfeecheck2" name="minersfees">
																	<label for="mfeecheck2">$1.21<small> <br>MEDIUM</small></label> 
																</div>
															</div>
	
															<div class="ml-auto col-sm-3">
																<div class="checkbox">
																	<input type="radio" id="mfeecheck3" name="minersfees">
																	<label for="mfeecheck3">$1.03<small> <br>LOW</small></label> 
																</div>
															</div>
														</div>
	
	
	
	
	
														
														
	
														
													</div>
													<!-- <button type="button" class="waves-effect waves-light btn btn-success my-10 d-block w-p100">Buy Bitcoin (GHS120)</button> -->
												</div>
												
												<div class="col-12">
													<div class="box text-center bg-info bg-banknote-white" style="background-color:#061f3c  !important;">
														<div class="box-body">
														<h2 class="mt-20"><i class="cc BTC mr-0"></i></h2>
														<h5 class="text-light">You are Buying</h5>
														<h2 class="text-bold  mt-20">420 USD</h2>
														<h5 class="text-light">You are paying 500 GHS at</h5>
														<h2 class="text-bold  mt-20">1 USD = 1.19 GHS</h2>
															<div class="mt-10 mb-15">
	
																<div class="input-group">
																	
																	<!-- /btn-group -->
																	<input type="text" class="form-control" placeholder="Enter discount code (optional)" style="background-color:#384c63;bordder-color:#384c63 !important;">
																	<div class="input-group-prepend">
																		<button type="button" class="btn btn-success"><i  class="fa fa-arrow-right"></i></button>
																	</div>
																</div>
															
																
															</div>
														</div>
													</div>
													<button type="button" class="waves-effect waves-light btn btn-success my-10 d-block w-p100">Buy Bitcoin (GHS120)</button>
												</div>
											</div>';
										}
										?>
										<!-- Buy Amount Section Ends -->
									</div>




									<!-- tab Sell BTC -->
									<div class="tab-pane" id="tabid2" role="tabpanel">
										
										<h4 class="box-title mb-15">Currency</h4>
										<div class="row bb-1 pb-15 mb-15">
											<div class="col-xl-4 col-md-4 col-12">
												<div class="sel-coin-type-outer">
													<input type="radio" name="sell-coin-type" id="sell-4" checked="">
													<label for="sell-4" class="sel-coin-type">
														<i class="cc BTC mr-0"></i> 
														<p class="mb-5">Bitcoin</p>
														<small>@</small>
														<p class="mb-0"><small>1USD</small></p>
													</label>
												</div>
											</div>
											<div class="col-xl-4 col-md-4 col-12">
												<div class="sel-coin-type-outer">
													<input type="radio" name="sell-coin-type" id="sell-5">
													<label for="sell-5" class="sel-coin-type">
														<i class="cc ETH mr-0"></i> 
														<p class="mb-5">Ethereum</p>
														<small>@</small>
														<p class="mb-0"><small>1USD</small></p>
													</label>
												</div>
											</div>
											<div class="col-xl-4 col-md-4 col-12">
												<div class="sel-coin-type-outer">
													<input type="radio" name="sell-coin-type" id="sell-6">
													<label for="sell-6" class="sel-coin-type">
														<i class="cc LTC mr-0"></i> 
														<p class="mb-5">Lite</p>
														<small>@</small>
														<p class="mb-0"><small>1USD</small></p>
													</label>
												</div>
											</div>
										</div>




										<!-- payment option  -->

										<h4 class="box-title mb-15">Payment Method</h4>
										<div class="row bb-1 pb-15 mb-15">
											<div class="col-xxxl-4 col-md-6 col-12">
												<div class="sel-coin-type-outer">
													<input type="radio" name="pay-type" id="pay-1" checked="">
													<label for="pay-1" class="sel-coin-type">
														<i class="fa fa-mobile"></i> 
														<p class="mb-5">Mobile Money</p>
														<!-- <p class="mb-0"><small>$209.00</small></p> -->
													</label>
												</div>
											</div>
											<div class="col-xxxl-4 col-md-6 col-12">
												<div class="sel-coin-type-outer">
													<input type="radio" name="pay-type" id="pay-2">
													<label for="pay-2" class="sel-coin-type">
														<i class="fa fa-credit-card"></i> 
														<p class="mb-5">Cash-out Wallet</p>
														<!-- <p class="mb-0"><small>**** **** 8907</small></p> -->
													</label>
												</div>
											</div>									
										</div>

										<!-- payment option  -->
										
										
										
										<h4 class="box-title mb-15">Amount</h4>
										<div class="row">
											<div class="col-12">
												<div class="buy-input-block-content row">
													<div class="buy-input-box col-md-12">
														<!-- <div class="form-group">
															<input type="text" class="form-control" placeholder="899 USD" name="">
														</div> -->
														<div class="input-group mb-50">
															<span class="input-group-addon">USD <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/us.svg" style="display: inline-block; width: 1.75rem; height: 1.75rem; vertical-align: middle;"></span>
															<input type="text" class="form-control" placeholder="Amount you need">
														</div>
													</div>
													<div class="col-md-10 text-center" style="margin-top:-20px;">
														<i class="fa fa-exchange dir-icon"></i>
													</div><br>
													<div class="buy-input-box col-md-12">
														<!-- <div class="form-group">
															<input type="text" class="form-control" placeholder="8 BTC" name="">
														</div> -->
														<div class="input-group mb-50">
															<span class="input-group-addon">GHS <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/gh.svg" style="display: inline-block; width: 1.75rem; height: 1.75rem; vertical-align: middle;"></span>
															<input type="text" class="form-control" placeholder="Amount to pay">
														</div>
													</div>


													<div class="buy-input-box col-md-12">
														
														<div class="input-group mb-50">
															
															<input type="text" class="form-control" placeholder="Enter wallet address">
														</div>
													</div>
													
												</div>
												<!-- <button type="button" class="waves-effect waves-light btn btn-danger my-10 d-block w-p100">Sell Bitcoin</button> -->
											</div>
											
											<div class="col-12">
												<div class="box text-center bg-info bg-banknote-white" style="background-color:#061f3c  !important;">
													<div class="box-body">
													<h2 class="mt-20"><i class="cc BTC mr-0"></i></h2>
													<h5 class="text-light">You are Selling</h5>
													<h2 class="text-bold  mt-20">420 USD</h2>
													<h5 class="text-light">You will Receiving 500 GHS at</h5>
													<h2 class="text-bold  mt-20">1 USD = 1.19 GHS</h2>
														<div class="mt-10 mb-15">

															<div class="input-group">
																
																<!-- /btn-group -->
																<input type="text" class="form-control" placeholder="Enter discount code (optional)" style="background-color:#384c63;bordder-color:#384c63 !important;">
																<div class="input-group-prepend">
																	<button type="button" class="btn btn-success"><i  class="fa fa-arrow-right"></i></button>
																</div>
															</div>
														
															
														</div>
													</div>
												</div>
												<button type="button" class="waves-effect waves-light btn btn-danger my-10 d-block w-p100">Sell Bitcoin (120GHS)</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>