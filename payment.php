<?php
    session_start();
    $email ="";
    $amount="";
    $package="";
    $id="";
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $package = $_SESSION['package'];
        $amount = $_SESSION['amount'];
        $name = $_SESSION['name'];

    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <title>VOCAL RESULTS</title>
</head>
<body>
  <section class="menu cid-qv1frvgcz3" once="menu" id="menu1-7u" data-rv-view="580">
      <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-sticky-top navbar-toggleable-sm">
          <div class="menu-logo">
              <div class="navbar-brand">
                  
                  <span class="navbar-caption-wrap"><a class="navbar-caption" href="index.php">
                    <img src="assets/images/logo2.png" alt="logo" style="width: 130px; height: 130px; float: left;"></a></span>
              </div>
          </div>
      </nav>
  </section>
  <section class="bg-white pb-5 mb-5" style="padding-top:120px;">
    <div class="container">
      <h2 class="my-4 py-4 text-center text-primary"><b>Payment</b></h2>
      <form action="charge.php" method="post" id="payment-form">
        <div class="form-row">
        <input type="text" name="name" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $name; ?>">
        <input type="hidden" name="package" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $package; ?>">
        <input type="hidden" name="amount" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $amount; ?>">
        <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $email; ?>">
          <div id="card-element" class="form-control">
            <!-- a Stripe Element will be inserted here. -->
          </div>

          <!-- Used to display form errors -->
          <div id="card-errors" role="alert"></div>
        </div>

        <button type="submit" style="background-image: linear-gradient(to right, #2a0537, #340652, #390c70, #341791, #1624b5);">Submit Payment</button>
      </form>
    </div>
  </section>
  <section once="" class="cid-qvbYWoTxnu pt-5" id="footer6-90" data-rv-view="686">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright <script>document.write(new Date().getFullYear());</script> VrAd Music LLC &reg; All Rights Reserved
                </p>
            </div>
        </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/charge.js"></script>
  <script src="assets/theme/js/script.js"></script>
</body>
</html>