<?php
require_once('vendor/autoload.php');
require_once('config/db.php');

if(isset($_POST['submit']))
{

    SUBMISSION();
}



function SUBMISSION()
{
    $name = $_POST['name'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $discount = $_POST['discount'];
    $language = $_POST['language'];

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = 'cus_'.substr(str_shuffle($permitted_chars), 0, 14);



    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME );

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "INSERT INTO customers (cid, name, zip, phone, email, discount, language) VALUES('$id', '$name', '$zip', '$phone', '$email', '$discount', '$language')";

if(mysqli_query($conn, $sql)){

    echo"<script type=\"text/javascript\">
                document.location.href='http://www.wisio.com/vocalresults'; 
            </script>";
}else{
    echo "<script type=\"text/javascript\">
           alert('Error: Could not able to execute');
            </script>";
}
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

<?php

require_once "config/db.php";

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die("Connecting Faild" .$conn->connect_error);
}

$sql = "SELECT COUNT(*) FROM trans WHERE MONTH(created_at) = MONTH(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())
    ";

$result = mysqli_query($conn, $sql);


$result = mysqli_fetch_array($result);


?>
<script>var shopcartSettings = {"shopcart_top_offset":120,"side_offset":20,"site_width":1150,"shopcart_icon_color":"#FFFFFF","shopcart_back_color":"#2969b0","shopcart_icon_size":48,"sc_count_color":"#FFFFFF","sc_count_back_color":"#fc26ae","sc_count_size":12,"checkout_button":"Check Out with"};</script>
<section class="menu cid-qv1frvgcz3" once="menu" id="menu1-7u" data-rv-view="580">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">

        <div class="menu-logo">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption" href="index.php">
                   <img src="assets/images/logo2.png" alt="logo" style="width: 130px; height: 130px; float: left;"></a></span>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section>

<section class="order-form" id="order" data-rv-view="637" style="padding-top:155px; background-color: #FFFFFF; display : <?php echo (number_format($result[0]) > 11  ? "none" : "block"); ?>">
    <h2 class="py-5 text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 500;">CUSTOMER REQUEST</h2>

    <div class="container">
        <div class="media-container-row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="form" action="" method="POST">
                    <div class="form-row d-flex justify-content-center">
                        <div class="col-lg-12 md-12 sm-12 pr-3">
                            <div class="form-group col-12">
                                <label for="inputName">Full Name</label>
                                <input type="text" name="name" class="form-control form-rounded form-control-sm" id="inputName4" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputZip">Zip</label>
                                <input type="text" name="zip" class="form-control form-rounded form-control-sm" id="inputZip" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputPhone4">Phone Number</label>
                                <input type="text" name="phone" class="form-control form-rounded form-control-sm" id="inputPhone4" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control form-rounded form-control-sm" id="inputEmail4" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputDiscount4">Discount Code</label>
                                <input type="text" name="discount" class="form-control form-rounded form-control-sm" id="inputDiscount4">
                            </div>
                            <div class="form-group col-12">
                                <label for="inputLanguage4">Preferred Language</label>
                                <select id="inputLanguage4" name="language" class="form-control form-rounded form-control-sm" required>
                                    <option selected disabled>Select Your Language....</option>
                                    <option value="English">English</option>
                                    <option value="Spanish">Spanish</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="submit" id="sub" class="btn btn-primary btn-block" onclick="SUBMISSION()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="order-warning" style="padding-top: 155px; display : <?php echo (number_format($result[0]) < 11  ? "none" : "block"); ?>; width: 100%; height: 100%;">
    <div class="row" style="background-color: #b2acb0;">
        <div class="col-12 text-center">
            <img src="assets/images/warning.jpg" class="img-fluid" alt="">
            <h2 class="py-4 font-italic" style="color: #401e36; font-family: 'Montserrat', sans-serif;">Thank You for Request!</h2>
            <p class="text-dark">
                <b>
                    Due to high demand,<br>
                    We are unable to proccess your request in this moment.<br>
                    We appriciate your patience and we will contact you as soon as possible.<br>
                </b>
            </p>
            <br>
            <hr>
        </div>
        <div class="col-12 text-right text-black">
            <span>Vocal Results & Atrist Development team</span>
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
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v6.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="Your facebook page id"
             theme_color="#a695c7">
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
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>


</body>
</html>