<?php
session_start();
$amount ="";
$package ="";

if(isset($_SESSION['email'])){
    $package = $_SESSION['package'] ;
    $amount = $_SESSION['amount'] ;
}


 

?>
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirisethemes.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <title>VOCAL RESULTS</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/shopping-cart/minicart-theme.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  
  
  
</head>
<body>

<!-- -->
<section class="menu cid-qv1frvgcz3" once="menu" id="menu1-7u" data-rv-view="580">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-sticky-top navbar-toggleable-sm">
        
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption" href="index.php">
                   <img src="assets/images/logo2.png" alt="logo" style="width: 130px; height: 130px; float: left;"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        </div>
    </nav>
</section>

<section class="order-form2" id="order2" style="background-color: #FFFFFF; padding-top:130px;">
    <h2 class="pt-3 pb-5 mb-4 mbr-fonts-style text-center display-2">Checkout</h2>
    
    <div class="container">
        <div class="media-container-row">
            <div class="col-lg-8 md-8 sm-12 pl-3">
            <h4 class="text-center pb-5">YOUR ORDER</h4>
                <form action="payment.php" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
                    
                    <table class="table table-striped border-0">
                        <thead>
                            <tr>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" id="pakage" class="text-primary pakage"><?php echo $package; ?></th>
                                <td id="price" class="text-primary price">$<?php echo ($amount)/100; ?></td>
                            
                            </tr>
                            <tr>
                                <th scope="row">Subtotal</th>
                                <td id="price" class="text-primary price">$<?php echo ($amount)/100; ?></td>
                            
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td id="price" class="text-primary price font-weight-bold">$<?php echo ($amount)/100; ?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td>
                                <input class="form-check-input" type="checkbox" value="check" id="agree">
                                <label class="form-check-label" for="agree"> I've read and agree with the <a href="terms.php" class="text-primary">terms of service and policy</a> of cancelations and refunds</label><br>
                            </td>
                        </tfoot>
                    </table>
                    <div class="row">
                        <div class="col-6">
                            <h5 class="text-primary justify-content-start">Credit Card (Stripe)</h5>
                        </div>
                        <div class="col">
                            <img src="assets/images/payment/visa.svg" alt=""> 
                        </div>
                        <div class="col">
                            <img src="assets/images/payment/master-card.svg" alt=""> 
                        </div>
                        <div class="col">
                            <img src="assets/images/payment/american-express.svg" alt="">
                        </div>
                        <div class="col">
                            <img src="assets/images/payment/paypal.svg" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Continue Payment</button>
                </form>
            </div>
        </div>
    </div>
</section>




<section once="" class="cid-qvbYWoTxnu" id="footer6-90" data-rv-view="686">
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


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/shopping-cart/minicart.js"></script>
  <script src="assets/shopping-cart/jquery.easing.min.js"></script>
  <script src="assets/shopping-cart/minicart-customizer.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>