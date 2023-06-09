<html><head>
    <meta charset="utf-8">
    <meta name="description" content="bKash PGW Tokenized Payment with Valid Agreement">
    <meta name="author" content="Tahniat Ashraf Priyam">
    <title>Payment with Agreement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/tokenized.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/favicon.ico/favicon-32x32.png">
</head>
    <body class="bg-light">
        <div id="tokenized-0001">
          <div class="container">
            <div class="row">
              <div class="col-md-12 order-md-1">
                <div id="header">
                  <div id="banner" class="row">
                    <div class="col-12">
                      <div class="logoHolder">
                        <img src="assets/images/bkash_payment_logo.png" alt="bKash_logo" class="bannerLogo">
                      </div>
                    </div>
                  </div>
                  <div id="type" class="row">
                    <div class="col-12">
                                &nbsp;
                            </div>
                          </div>
                          <div id="payment" class="row">
                            <div class="row">
                              <div class="col-md-3">

                              </div>
                              <div id="merchant_logo_holder" class="col-md-6">
                                <div id="merchant_logo">
                                  <img src="assets/images/chayachobi.jpg" id="merchantImageID" class="img-responsive">
                                </div>
                              </div>
                              <div class="col-md-3">

                              </div>
                            </div>
                            <div id="merchant_data">
                              <div class="row">
                                <div id="merchant_name" class="col-md-12">
                                  <b>Merchant Name</b>:
                                  <span>Chayachobi</span>
                                </div>
                              </div>
                              <div class="row">
                                <div id="invoice_number" class="col-md-12">
                                  <b>Invoice Number</b>: <span>202000000</span>
                                </div></div>
                                <!-- <div class="row">
                                  <div id="amount" class="col-md-12">



                                    <b>Amount</b>: BDT <span>219.00</span>



                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="form">

                          <form action="success.php" method="post" id="tokenized_form">
                              <div class="row form-item">
                                <div class="col-md-12">
                                  <label for="wallet">Your bKash Account Number</label>
                                  <input type="number" name="number" id="wallet" maxlength="11" placeholder="e.g 01XXXXXXXXX"  class="form-control">
                                </div>
                              </div>
                              <div class="row form-item">
                                <div class="col-md-12">
                                  <label for="password">Enter PIN</label>
                                  <input type="password" id="password" placeholder="bKash PIN" maxlength="5" autocomplete="off" class="form-control"></div>
                                </div>
                                <div id="toc" class="row form-item">
                                  <div class="col-12">
                                    By clicking 'Proceed', you agree to the <a href="https://www.bkash.com/tokenized_checkout" target="_blank"> terms and conditions</a>
                                  </div>
                                </div>
                                <div id="button_panel" class="row">
                                  <form class="" action="#" method="post">
                                    <span class="col-6">
                                      <button type="button" id="close"  class="col-6 negative-button">Close</button>
                                    </span>
                                  </form>

                                    <span class="col-6">
                                      <button type="submit" id="confirm" class="col-6 positive-button">Finish</button>
                                    </span>

                                </div>
                                <div id="message_container" class="row">
                                  <span class="col-12"></span></div> <div id="footer" class="row">
                                    <span class="col-12"><b>Helpline</b>: 16247. <b>Version</b>: 1.2.0-beta
                                    </span>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        <script src="assets/js/axios.0.19.2.min.js"></script>
        <script src="assets/js/vue.2.5.22.js"></script>
        <script src="assets/js/master.1.0.js"></script>
        <script src="assets/js/v1.2.0-beta/0001.js"></script>

</body></html>
