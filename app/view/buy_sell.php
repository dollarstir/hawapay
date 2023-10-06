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
				
					<div class="col-12 col-md-6">
						
						
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



					
				

				
					
			</div>	
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
	<?= (new footerController())->footer();?>

	
</body>

</html>
