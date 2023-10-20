<?php

class kycController{


    // get kyc form
    public function kycforms(){
        $form = '
				<form action="#" class="tab-wizard wizard-circle">
					<!-- Step 1 -->
					<h6>ID Verification Step 1</h6>
					<section>


						<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="location3"><strong>Select Id Type</strong></label>
										<select class="custom-select form-control" id="location3" name="idtype">
											<option value="1">Ghana Card</option>
											<option value="2">Passport</option>
											<option value="3">Voters Id</option>
											
										</select>
									</div>
								</div>
								
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<strong>Step 1: Write Tuantem with todays date and sign on a white sheet and take a picture with it with your id card as shown below </strong>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<img src= "app/view/allfiles/images/step1.jpg" alt="step 1" />
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="step1file">Browse Image File</label>
									<input type="file" class="form-control" id="step1file" name="idfile1"> </div>
							</div>
							
						</div>





						<br>
						<div class="row">
							<div class="col-md-12">
								<strong>Step 2: Make your ID card front a back into one file and upload Below</strong>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<img src= "app/view/allfiles/images/step2.jpg" alt="step 1" />
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="step1file">Browse Image File</label>
									<input type="file" class="form-control" id="step1file" name="idfile1"> </div>
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group" style="display:flex;justify-content:center;">
									
									<button type="submit" class=" btn btn-primary" >Save</button>
								</div>
							</div>
							
						</div>
						
					</section>

				</form>
					';



            return ['type'=>'loaddata','message'=>$form,'action'=>'loaddata','loadclass'=>'verifyidcontent'];
        
    }
}