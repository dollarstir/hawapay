
<?php
 $user = (new userModel())->getUserData($_SESSION['account_user']['uid']);

 if(empty($user['id_verified'])){

	$verification = '<svg width="14" fill="#808080" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.19 1.36l-7 3.11C3.47 4.79 3 5.51 3 6.3V11c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6.3c0-.79-.47-1.51-1.19-1.83l-7-3.11c-.51-.23-1.11-.23-1.62 0zm-1.9 14.93L6.7 13.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l5.88-5.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-6.59 6.59c-.38.39-1.02.39-1.41 0z"></path></svg><small class="mt-15 text-dark fw-bolder">Unverified</small><br><br>';
 }
 else{
	$verification = '<svg width="14" fill="#005aab" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.19 1.36l-7 3.11C3.47 4.79 3 5.51 3 6.3V11c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6.3c0-.79-.47-1.51-1.19-1.83l-7-3.11c-.51-.23-1.11-.23-1.62 0zm-1.9 14.93L6.7 13.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l5.88-5.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-6.59 6.59c-.38.39-1.02.39-1.41 0z"></path></svg><small class="mt-15 text-primary fw-bolder">verified</small><br><br>';

 }


//  if($us)
?>
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index-2.html">
				  <!-- logo for regular state and mobile devices -->
				  <h3><b>Crypto</b>Admin</h3>
				</a>
			</div>
			<div class="profile-pic" style="margin-left:-30px;">
				<!-- <img src="app/view/allfiles/images/user5-128x128.jpg" alt="user">	 -->
				     <div style="background-color:#5A8DEE;border-color: #5A8DEE;border-radius:50%;color:#fff;width:50px;height:50px;padding:12px;margin-left:100px;font-weight:bolder;font-size:20px;"><?=$user['first_name'][0].''.$user['last_name'][0];?></div>
					<div class="profile-info"><h5 class="mt-15"><?=$user['first_name'].' '.$user['last_name'];?></h5>

					       <?= $verification;?>
							<div class="text-center d-inline-block">
								<a href="settings" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
								<a href="#" class="link px-15" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
								<a href="#" class="link logoutopt"  data-izimodal-open="#deletemodal" data-izimodal-transitionin="fadeInDown" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
							</div>
					</div>
			</div>
        </div>
      <div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree" style="margin-left:20px;">

				<!-- <li class="header nav-small-cap">PERSONAL</li> -->

				<li class="active">
				  <a href="dashboard">
					<i class="ti-dashboard"></i>
					<span>Dashboard</span>
					
				  </a>
				  
				</li>
				<li class="">
				  <a href="buy-sell">
					<i class="ti-shopping-cart"></i>
					<span>Buy & Sell</span>
					
				  </a>
				  
				</li> 


                <li class="">
				  <a href="my-orders">
					<i class="ti-pie-chart"></i>
					<span>My Orders</span>
					
				  </a>
				  
				</li> 

                <li class="">
				  <a href="wallet">
					<i class="ti-wallet"></i>
					<span>Wallet</span>
					
				  </a>
				  
				</li> 

                <li class="">
				  <a href="#">
					<i class="ti-comment"></i>
					<span>Support</span>
					
				  </a>
				  
				</li> 
                <li class="">
				  <a href="settings">
					<i class="glyphicon glyphicon-cog"></i>
					<span>Settings</span>
					
				  </a>
				  
				</li> 


            
				
				
				

				
			  </ul>
		  </div>
		</div>
    </section>
  </aside>