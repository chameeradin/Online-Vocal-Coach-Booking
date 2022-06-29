<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.3.0, mobirisethemes.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <title>VOCAL RESULTS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>



</head>
<body>

<!-- -->
<section class="menu cid-qv1frvgcz3" once="menu" id="menu1-7u" data-rv-view="580">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption" href="index.php">
                   <img src="assets/images/logo2.png" alt="logo" style="width: 130px; height: 130px; float: left;"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link display-4" href="index.php#header2-8e" data-toggle="" aria-expanded="false">

                        Video feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link display-4" href="http://www.rodolfogug.com" data-toggle="" aria-expanded="true">

                        Find a Vocal Coach</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link display-4" href="#" data-toggle="" aria-expanded="false">Become a vocal coach</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link display-4" href="#" data-toggle="" aria-expanded="false">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link display-4" href="index.php#testimonials1-8x" data-toggle="" aria-expanded="false">Testimonials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link display-4" href="index.php#footer2-8z" data-toggle="" aria-expanded="false">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="contact-form" style="padding-top:130px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="py-5 text-center" style="font-family: 'Montserrat', sans-serif;">Become A Coach Please Send Your Resume</h2>
                <form action="mail.php" method="POST" id="emailForm" enctype="multipart/form-data">
                    <div class="contacts">
                        <?php if(!empty($_GET['success']) && $_GET['success']) { ?>
                            <div id="message" class="alert alert-danger alert-dismissible fade show">The Email has been sent.</div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="col-lg-10 col-sm-12">
                                <label class="control-label" for="fname">Name</label>
                                <input type="text" required class="form-control" id="name" name="name" placeholder="Enter Name" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-sm-12">
                                <label class="control-label" for="email">Email</label>
                                <input type="email" required class="form-control" id="email" name="email" placeholder="Enter email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-sm-12">
                                <label class="control-label" for="message">Message</label>
                                <textarea required class="form-control" rows="5" name="message" id="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-sm-12">
                                <label class="control-label" for="attachFile">Attach File</label>
                                <input type="file" accept=".doc, .docx, .pdf" required class="form-control" id="attachFile" name="attachFile">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-sm-12">
                                <button type="submit" name="sendEmail">Send Email</button>
                            </div>
                        </div>
                    </div>
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
            page_id="Enter your facebook page id"
            theme_color="#a695c7">
          </div>
    </div>
</section>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script src="assets/js/validation.js"></script>
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