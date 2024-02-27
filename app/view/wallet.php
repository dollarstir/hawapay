<?= (new headerController())->header(); ?>

<!-- Left side column. contains the logo and sidebar -->

<!-- side menu hererrr   ****************************** -->

<?php echo (new sidebarController())->sidebar(['page' => 1]); ?>
<!-- Side MENU HERE *********************** -->

<?php

$user = (new userModel())->getUserData($_SESSION['account_user']['uid']);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h3>
                Wallet
            </h3>

        </div>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box-body box">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs customtab2" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-selected="false"><span class="hidden-sm-up">Account<img src="app/view/allfiles/images/card/ghana.svg" style="width:16px;height:16px;"> (GHS)</span> <span class="hidden-xs-down">Account<img src="app/view/allfiles/images/card/ghana.svg" style="width:16px;height:16px;"> (GHS)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#profile7" role="tab" aria-selected="true"><span class="hidden-sm-up">Account<img src="app/view/allfiles/images/card/nigeria.svg" style="width:16px;height:16px;"> (NGN)</span> <span class="hidden-xs-down">Account<img src="app/view/allfiles/images/card/nigeria.svg" style="width:16px;height:16px;"> (NGN)</span></a> </li>
                            <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages7" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Withdrawal Balance (Naira)</span></a> </li> -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- prepaid Wallet Balance -->
                            <div class="tab-pane active" id="home7" role="tabpanel">
                                <div class="p-15">
                                    <div style="padding: 2rem 1.5rem;border-radius: 0.375rem;text-align: center;background-color: #fafbfc;border: solid 0.0625rem #edf0f2;">
                                        <div class="info mb-5 mb-md-12">
                                            <div class="d-flex justify-content-center">

                                                <div style="border-radius: 50%;margin-left:15px; border: 1px solid #f2f3f5;height: 5rem;width:5rem; display: flex;overflow: hidden;-webkit-box-align: center;align-items: center;	-webkit-box-pack: center;justify-content: center;background-color: #f2f3f5;">
                                                    <img src="app/view/allfiles/images/card/wallet.png" style="">

                                                </div>
                                            </div>
                                            <div class="clearfix mb-20"></div>
                                            <h5 class="mb-5">Account Wallet (GHS)</h5>
                                            <div>
                                                <h1 class="mb-2 font-monospace fw-bolder" style="color:#061f3c;"><?= $user['wallet1']; ?> GHS</h1>
                                                <p class="bluey-grey-text"><small class="text-uppercase">Wallet balance</small></p>
                                            </div>

                                            <div class="clearfix"></div>
                                            <button type="button"  class="btn btn-primary mb-5 mr-10 btndepo">Deposit</button><button type="button" class="btn btn-secondary mb-5">Withdraw</button><button type="button" data-toggle="modal" data-target="#modal-universal" class="btn btn-primary mb-5 ml-10">Tranfer to Naira</button>
                                        </div>
                                    </div>


                                    <div class="card p-10 mt-15" style="position: relative; display: flex; flex-direction: column;min-width: 0;word-wrap: break-word;border-radius: 0.5rem;background-color: #fff;background-clip: border-box;">

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
                                                        <tr>
                                                            <td>82.3</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 0.15</td>
                                                            <td>$ 134.7</td>
                                                        </tr>
                                                        <tr>
                                                            <td>82.4</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 2.66</td>
                                                            <td>$ 238.3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>82.5</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 0.32</td>
                                                            <td>$ 288.6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>84.0</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td>
                                                            <td>$ 878.4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>95.0</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 0.10</td>
                                                            <td>$ 958.6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>95.9</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 0.30</td>
                                                            <td>$ 270.4</td>
                                                        </tr>
                                                        <tr>
                                                            <td>97.0</td>
                                                            <td><i class="cc BTC font-size-14 mr-5"></i> 0.00</td>
                                                            <td>$ 30.2</td>
                                                        </tr>
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
                                    <div style="padding: 2rem 1.5rem;border-radius: 0.375rem;text-align: center;background-color: #fafbfc;border: solid 0.0625rem #edf0f2;">
                                        <div class="info mb-5 mb-md-12">
                                            <div class="d-flex justify-content-center">

                                                <div style="border-radius: 50%;margin-left:15px; border: 1px solid #f2f3f5;height: 5rem;width:5rem; display: flex;overflow: hidden;-webkit-box-align: center;align-items: center;	-webkit-box-pack: center;justify-content: center;background-color: #f2f3f5;">
                                                    <img src="app/view/allfiles/images/card/wallet.png" style="">

                                                </div>
                                            </div>
                                            <div class="clearfix mb-20"></div>
                                            <h5 class="mb-5">Account Wallet (NGN)</h5>
                                            <div>
                                                <h1 class="mb-2 font-monospace fw-bolder" style="color:#061f3c;"><?= $user['wallet2']; ?> NGN</h1>
                                                <p class="bluey-grey-text"><small class="text-uppercase">Wallet balance</small></p>
                                            </div>

                                            <div class="clearfix"></div>
                                            <button type="button" data-toggle="modal" data-target="#modal-universal" class="btn btn-primary mb-5 mr-10">Deposit</button><button type="button" class="btn btn-secondary mb-5">Withdraw</button><button type="button" data-toggle="modal" data-target="#modal-universal" class="btn btn-primary mb-5 ml-10">Tranfer to Cedis</button>
                                        </div>
                                    </div>



                                    <div class="card p-10 mt-15" style="position: relative; display: flex; flex-direction: column;min-width: 0;word-wrap: break-word;border-radius: 0.5rem;background-color: #fff;background-clip: border-box;">

                                        <div class="box-header">
                                            <h4 class="box-title"> Transactions</h4>
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
                                                        <tr>
                                                            <td col-span="100%">No transaction yet</td>
                                                        </tr>

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
<!-- /.content-wrapper -->

<?= (new footerController())->footer(); ?>


</body>

</html>