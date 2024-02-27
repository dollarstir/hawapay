<div class="container">
  <!-- Step Wizard Indicator -->
  <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="step1-tab" data-toggle="pill" href="#step1" role="tab" aria-controls="step1" aria-selected="true">Step 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="step2-tab" data-toggle="pill" href="#step2" role="tab" aria-controls="step2" aria-selected="false">Step 2</a>
    </li>
  </ul>

  <!-- Step Wizard Content -->
  <div class="tab-content" id="pills-tabContent">
    <!-- Step 1: Form -->
    <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="iptdeposit-amount" class="col-form-label">Enter Amount:</label>
            <input type="text" class="form-control h-60 fw-bolder" style="font-size:large;color:#061f3c;" id="iptdeposit-amount" placeholder="Enter your amount">
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="location3"><strong>Select Network</strong></label>
                <select class="custom-select form-control" id="location3" name="idtype">
                  <option value="1">Ghana Card</option>
                  <option value="2">Passport</option>
                  <option value="3">Voters Id</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="mt-10 mb-10 d-flex justify-content-center">
        <button type="button" class="btn btn-primary" onclick="showStep2()">Next</button>
      </div>
    </div>

    <!-- Step 2: Payment Instructions -->
    <!-- Step 2: Payment Instructions -->
<div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
  <div class="modal-body">
    <h4 class="mb-3">Mobile Money Payment Instructions</h4>

    <p class="mb-2">You are paying <strong>200 GHS</strong> to our Mobile money number.</p>

	<!-- Payplux Mobile Money Details Card -->
    <div class="card mt-4 mb-3">
      <div class="card-header">
        Payplux Mobile Money Details
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Name:</strong> ChosenCherries By Claudia</li>
        <li class="list-group-item"><strong>Network:</strong> MTN Money</li>
        <li class="list-group-item"><strong>Merchant ID:</strong> 483854</li>
        <li class="list-group-item"><strong>Merchant Number:</strong> 055 472 1102</li>
        <li class="list-group-item">
          <strong>Pay with any of your added numbers to avoid confirmation delays:</strong><br>
          +233556676471<br>
          +233248363672
        </li>
      </ul>
    </div>
    
    <ol class="mb-3">
      <li>Dial <strong>*170#</strong> on your MTN money phone.</li>
      <li>Enter <strong>1</strong> to select <em>Transfer Money</em> and proceed with the rest of the instructions.</li>
      <li>After completing the transfer, return to this page and add the payment details using the form below.</li>
    </ol>
    
    <div class="alert alert-warning" role="alert">
      <strong>Important:</strong> To avoid any delays in your order, always enter your phone number as the reference when sending any mobile money payments to us.
    </div>

    <!-- Payment Details Form (Example) -->
    <form>
      <div class="form-group">
        <label for="payment-phone-number">Your Phone Number:</label>
        <input type="tel" class="form-control" id="payment-phone-number" placeholder="Enter your phone number">
      </div>
      <div class="form-group">
        <label for="transaction-id">Transaction ID:</label>
        <input type="text" class="form-control" id="transaction-id" placeholder="Enter the transaction ID">
      </div>
      <button type="submit" class="btn btn-primary">Submit Payment Details</button>
    </form>

	

  </div>
  <div class="mt-4 mb-10 d-flex justify-content-between">
    <button type="button" class="btn btn-secondary" onclick="showStep1()">Back</button>
    <button type="button" class="btn btn-success" onclick="completeOrder()">Complete Order</button>
  </div>
</div>

  </div>
</div>
