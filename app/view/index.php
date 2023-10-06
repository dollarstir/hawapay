<?= (new headerController())->header();?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- side menu hererrr   ****************************** -->

       <?php echo (new sidebarController())->sidebar(['page'=>1])  ;?>
  <!-- Side MENU HERE *********************** -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				
					<div class="col-12 col-md-4">
						
						
						<!-- BUY & SELL WIDGE GOES HERE  -->

						<?= (new buysellController())->buysellwidget();?>

						<!-- BUY & SELL WIDGET GOES HERE -->
					</div>




						<!-- Widget to Preview Sales -->

						<!-- <div class="col-12 col-lg-3">
						  	<div class="box text-center bg-info bg-banknote-white" style="background-color:#061f3c  !important;">
								<div class="box-body">
								<h2 class="mt-20"><i class="cc BTC mr-0"></i></h2>
								<h5 class="text-light">You are Buying</h5>
								<h2 class="text-bold  mt-20">420 USD</h2>
								<h5 class="text-light">You are paying 500 GHS at</h5>
								<h2 class="text-bold  mt-20">1 USD = 1.19 GHS</h2>
									<div class="mt-10 mb-15">

										<div class="input-group">
											
											
											<input type="text" class="form-control" placeholder="Enter discount code (optional)" style="background-color:#384c63;bordder-color:#384c63 !important;">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-success"><i  class="fa fa-arrow-right"></i></button>
											</div>
										</div>
									
										
									</div>
								</div>
							</div>
							<button type="button" class="waves-effect waves-light btn btn-success my-10 d-block w-p100">Buy Bitcoin (GHS120)</button>
						</div> -->

						
						<!-- Widget to preview Transaction -->



					<div class="col-12 col-md-8">
						<div class="box">
							<div class="box-header">
								<h4 class="box-title">Recent Transactions</h4>
								<div class="box-controls pull-right">
									Total: 409.2820
								</div>
							</div>
							<div class="box-body p-0">
								<div class="table-responsive buy-sall-table">
									<table class="table table-hover mb-0">
										<thead>							  	
											<tr>
												<th width="25%">Pri./ BTC</th>
												<th>BTC Amount</th>
												<th>Total: (USD)</th>
											</tr>
										</thead>
										<tbody>
											<tr><td>82.3</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.15</td><td>$ 134.7</td></tr>
											<tr><td>82.4</td> <td><i class="cc BTC font-size-14 mr-5"></i> 2.66</td><td>$ 238.3</td></tr>
											<tr><td>82.5</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.32</td><td>$ 288.6</td></tr>
											<tr><td>84.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 878.4</td></tr>
											<tr><td>95.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td><td>$ 958.6</td></tr>
											<tr><td>95.9</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.30</td><td>$ 270.4</td></tr>
											<tr><td>97.0</td> <td><i class="cc BTC font-size-14 mr-5"></i> 0.00</td><td>$ 30.2</td></tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					
					</div>
				

				
					
			</div>	
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
	<?= (new footerController())->footer();?>

	
</body>

</html>
