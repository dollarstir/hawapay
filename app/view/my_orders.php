<?= (new headerController())->header();?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- side menu hererrr   ****************************** -->

       <?php echo (new sidebarController())->sidebar(['page'=>1])  ;?>
  <!-- Side MENU HERE *********************** -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				BUY & SELL ORDERS
		  	</h3>
		  	
		</div>
		

		<!-- Main content -->
		<section class="content">
		  	<div class="row">
				<div class="col-12 col-8">
                <div class="box-body box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs customtab2" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-selected="false"><span class="hidden-sm-up">Buy orders <i class="fa fa-shopping-cart" ></i></span> <span class="hidden-xs-down">Buy orders <i class="fa fa-shopping-cart" ></i></span></a> </li>
						<li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#profile7" role="tab" aria-selected="true"><span class="hidden-sm-up">Sell orders <i class="fa fa-institution" ></i></span> <span class="hidden-xs-down">Sell orders  <i class="fa fa-institution" ></i></span></a> </li>
						<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages7" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Withdrawal Balance (Naira)</span></a> </li> -->
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">

                    <!-- prepaid Wallet Balance -->
						<div class="tab-pane active" id="home7" role="tabpanel">
							<div class="p-15">
								


                                <div class="card p-10 mt-15" style="position: relative; display: flex; flex-direction: column;min-width: 0;word-wrap: break-word;border-radius: 0.5rem;background-color: #fff;background-clip: border-box;">

                                    <div class="box-header">
                                        <h4 class="box-title">Buy orders</h4>
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

                        <!-- Ghana cedis Withdrawl Balance -->
						<div class="tab-pane " id="profile7" role="tabpanel">
                            <div class="p-15">
							    



                                <div class="card p-10 mt-15" style="position: relative; display: flex; flex-direction: column;min-width: 0;word-wrap: break-word;border-radius: 0.5rem;background-color: #fff;background-clip: border-box;">

                                    <div class="box-header">
                                        <h4 class="box-title">Sell Orders</h4>
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
                                                    <tr><td col-span="100%">No transaction yet</td> </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                	
							</div>
						</div>

                        
					</div>
</div>
			  	</div>
			</div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>






  <!-- Modals -->

  <div class="modal center-modal fade" id="modal-universal" tabindex="-1" >
	  <div class="modal-dialog" style="border-radius:50% !important;">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title ">Deposit</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">

          <div class="row p-20" style="justify-content:center;">

            <div class="col-4">
                    <div width="136" class="sc-gXmSlM hcLCzv text-center"><small class="d-block clear-blue-text text-uppercase mb-4">FROM</small><div size="84" class="sc-jSMfEi kTVfHI mx-auto mb-4" opacity="1"><svg fill="none" width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M4 11.8605C4 10.833 4.83296 10 5.86047 10H37.4884C39.5434 10 41.2093 11.6659 41.2093 13.7209V36.2791C41.2093 38.3341 39.5434 40 37.4884 40H5.86046C4.83296 40 4 39.167 4 38.1395V11.8605Z" fill="#FFB121"></path><rect x="7" y="13" width="36" height="24" fill="#5FC484"></rect><rect x="7" y="16" width="34" height="18" fill="#6DD194"></rect><path d="M4 11.8605C4 10.833 4.83296 10 5.86047 10H35.0884C37.1434 10 38.8093 11.6659 38.8093 13.7209V36.2791C38.8093 38.3341 37.1434 40 35.0884 40H5.86047C4.83296 40 4 39.167 4 38.1395V11.8605Z" fill="#FFC642"></path><path d="M29.1162 23.1105C29.1162 22.083 29.9492 21.25 30.9767 21.25H43.9999V30.625H30.9767C29.9492 30.625 29.1162 29.792 29.1162 28.7645V23.1105Z" fill="#FFB121"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M34.6979 27.8125C35.7254 27.8125 36.5583 26.973 36.5583 25.9375C36.5583 24.902 35.7254 24.0625 34.6979 24.0625C33.6704 24.0625 32.8374 24.902 32.8374 25.9375C32.8374 26.973 33.6704 27.8125 34.6979 27.8125Z" fill="#E79A1D"></path></svg></div><small class="text-uppercase bluey-grey-text mb-2">CASH-OUT WALLET</small><p class="fw-bolder font-monospace">0.00 GHS</p>
                    </div>
            </div>

            <div class="col-2">
                <svg width="24" fill="var(--navy)" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="mx-auto"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg>
            </div>

            <div class="col-4">
                <div width="136" class="sc-gXmSlM hcLCzv text-center"><small class="d-block clear-blue-text text-uppercase mb-4">TO</small><div size="84" class="sc-jSMfEi kTVfHI mx-auto mb-4" opacity="1"><svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h48v48H0z"></path><g transform="translate(4 10)"><path fill="#FFB121" d="M1.86 0h31.628a3.72 3.72 0 0 1 3.721 3.72v22.56A3.72 3.72 0 0 1 33.49 30H1.86A1.86 1.86 0 0 1 0 28.14V1.86A1.86 1.86 0 0 1 1.86 0z"></path><path fill="#5FC484" d="M3 3h36v24H3z"></path><path fill="#6DD194" d="M3 6h34v18H3z"></path><path fill="#FFC642" d="M1.86 0h29.228a3.72 3.72 0 0 1 3.721 3.72v22.56A3.72 3.72 0 0 1 31.09 30H1.86A1.86 1.86 0 0 1 0 28.14V1.86A1.86 1.86 0 0 1 1.86 0z"></path><path fill="#FFB121" d="M26.977 11.25H40v9.375H26.977a1.86 1.86 0 0 1-1.86-1.86V13.11a1.86 1.86 0 0 1 1.86-1.86z"></path><ellipse cx="30.698" cy="15.938" fill="#E79A1D" rx="1.86" ry="1.875"></ellipse></g><g fill="#E79A1D" stroke="#E79A1D" stroke-linecap="round" stroke-width="1.571"><path stroke-linejoin="round" d="M23.51 23.537l-4.37-4.371 4.37 4.371zm-8.815.073l4.444-4.444-4.444 4.444z"></path><path d="M19.029 31.246V20.318"></path></g></g></svg></div><small class="text-uppercase bluey-grey-text mb-2">PREPAID WALLET</small><p class="fw-bolder font-monospace">0.00 GHS</p>
                </div>
            </div>
          </div>

          <!-- <div class="sc-fnykZs UOncG justify-content-center align-items-center mb-12"><div width="136" class="sc-gXmSlM hcLCzv text-center"><small class="d-block clear-blue-text text-uppercase mb-4">FROM</small><div size="84" class="sc-jSMfEi kTVfHI mx-auto mb-4" opacity="1"><svg fill="none" width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M4 11.8605C4 10.833 4.83296 10 5.86047 10H37.4884C39.5434 10 41.2093 11.6659 41.2093 13.7209V36.2791C41.2093 38.3341 39.5434 40 37.4884 40H5.86046C4.83296 40 4 39.167 4 38.1395V11.8605Z" fill="#FFB121"></path><rect x="7" y="13" width="36" height="24" fill="#5FC484"></rect><rect x="7" y="16" width="34" height="18" fill="#6DD194"></rect><path d="M4 11.8605C4 10.833 4.83296 10 5.86047 10H35.0884C37.1434 10 38.8093 11.6659 38.8093 13.7209V36.2791C38.8093 38.3341 37.1434 40 35.0884 40H5.86047C4.83296 40 4 39.167 4 38.1395V11.8605Z" fill="#FFC642"></path><path d="M29.1162 23.1105C29.1162 22.083 29.9492 21.25 30.9767 21.25H43.9999V30.625H30.9767C29.9492 30.625 29.1162 29.792 29.1162 28.7645V23.1105Z" fill="#FFB121"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M34.6979 27.8125C35.7254 27.8125 36.5583 26.973 36.5583 25.9375C36.5583 24.902 35.7254 24.0625 34.6979 24.0625C33.6704 24.0625 32.8374 24.902 32.8374 25.9375C32.8374 26.973 33.6704 27.8125 34.6979 27.8125Z" fill="#E79A1D"></path></svg></div><small class="text-uppercase bluey-grey-text mb-2">CASH-OUT WALLET</small><p class="fw-bolder font-monospace">0.00 GHS</p></div><svg width="24" fill="var(--navy)" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="mx-auto"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg><div width="136" class="sc-gXmSlM hcLCzv text-center"><small class="d-block clear-blue-text text-uppercase mb-4">TO</small><div size="84" class="sc-jSMfEi kTVfHI mx-auto mb-4" opacity="1"><svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h48v48H0z"></path><g transform="translate(4 10)"><path fill="#FFB121" d="M1.86 0h31.628a3.72 3.72 0 0 1 3.721 3.72v22.56A3.72 3.72 0 0 1 33.49 30H1.86A1.86 1.86 0 0 1 0 28.14V1.86A1.86 1.86 0 0 1 1.86 0z"></path><path fill="#5FC484" d="M3 3h36v24H3z"></path><path fill="#6DD194" d="M3 6h34v18H3z"></path><path fill="#FFC642" d="M1.86 0h29.228a3.72 3.72 0 0 1 3.721 3.72v22.56A3.72 3.72 0 0 1 31.09 30H1.86A1.86 1.86 0 0 1 0 28.14V1.86A1.86 1.86 0 0 1 1.86 0z"></path><path fill="#FFB121" d="M26.977 11.25H40v9.375H26.977a1.86 1.86 0 0 1-1.86-1.86V13.11a1.86 1.86 0 0 1 1.86-1.86z"></path><ellipse cx="30.698" cy="15.938" fill="#E79A1D" rx="1.86" ry="1.875"></ellipse></g><g fill="#E79A1D" stroke="#E79A1D" stroke-linecap="round" stroke-width="1.571"><path stroke-linejoin="round" d="M23.51 23.537l-4.37-4.371 4.37 4.371zm-8.815.073l4.444-4.444-4.444 4.444z"></path><path d="M19.029 31.246V20.318"></path></g></g></svg></div><small class="text-uppercase bluey-grey-text mb-2">PREPAID WALLET</small><p class="fw-bolder font-monospace">0.00 GHS</p></div></div> -->
			<form >
                <div class="form-group">
                    <label for="" class="col-form-label">Enter Amount :</label>
                    <input type="text" class="form-control h-60 fw-bolder " style="font-size:large;color:#061f3c;" id="iptdeposit-amount" placeholder="Enter your amount">
                </div>
            </form>
		  </div>
		  <div class="mt-10  mb-10 d-flex justify-content-center" style="">
			
			<button type="button" class="btn btn-primary float-midle">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>

    <!-- modals -->



  <!-- Modals -->
  <!-- /.content-wrapper -->
 
  <?= (new footerController())->footer();?>
	

</body>

</html>
