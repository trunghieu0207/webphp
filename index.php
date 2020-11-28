<?php
 include("source/class.php");
 $database= new Database();
 include("source/adminlogin.php");
 $user=new User();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <!-- google font -->
    <link rel="stylesheet" href="assets/css/fonts.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body  style="background-color: #F6F2F1">
<header class="header-area clearfix"  >
    <div class="header-top-area header-padding-2">
        <div class="container-fluid">
            <div class="header-top-wap">
                <div class="language-currency-wrap">
                    <div class="same-language-currency language-style">
                        <a href="#">VietNamese</a>
                        
                    </div>
                    <div class="same-language-currency use-style">
                        <a href="#"> VNĐ </a>
                        
                    </div>
                    <div class="same-language-currency">
                        <p>Call Us 0362538289</p>
                    </div>
                </div>
                <div class="header-offer">
                    <p>Free delivery on order over <span>200000 VNĐ</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar header-res-padding header-padding-2" style="background-color: #E5BDB1" >
        <div class="container-fluid"  >
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.php">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a>
                                    
                                </li>
                                <li><a href="shop.php"> Shop</a>
                                </li>
                                <li><a href="shop.php">Collection</a></li>
                                <li><a href="blog.php">Blog</a>
                                </li>
                                <li><a href="about.php"> About us</a></li>
                                <li><a href="contact.php"> Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                       <div class="header-right-wrap">
                        <div class="same-style header-search">
                            <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                            <div class="search-content">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div> 
                        </div>
                        <div class="same-style account-satting">
                            <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                            <div class="account-dropdown">
                                <ul>
                                    <li><a href="login-register.php">Login</a></li>
                                    <li><a href="login-register.php">Register</a></li>
                                    <li><a href="wishlist.php">Wishlist  </a></li>
                                    <li><a href="my-account.php">my account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="same-style header-wishlist">
                            <a href="wishlist.php"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="same-style cart-wrap">
                            <button class="icon-cart">
                                <i class="pe-7s-shopbag"></i>
                                <span class="count-style"><?= count($_SESSION['cart'] ?? [])?></span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    <?php
                                    $total = 0;
                                    if(isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $cart) {
                                            $total += $cart['qty'] * $cart['gia'];
                                    ?>
                                        <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="assets/img/product_images/<?=$cart['img']?>" style="width: 50px"></a>
                                        </div>
                                        <div class="shopping-cart-title" style="width: 150px">
                                            <h4><a href="#" style="word-break: normal"><?=$cart['name']?></a></h4>
                                            <h6>Số lượng: <?=$cart['qty']?></h6>
                                            <span>Giá: <?=$cart['gia']?></span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>Shipping : <span>0 VNĐ</span></h4>
                                    <h4>Total : <span class="shop-total"><?= $total ?></span></h4>
                                </div>
                                <div class="shopping-cart-btn btn-hover text-center">
                                    <a class="default-btn" href="cart-page.php">view cart</a>
                                    <a class="default-btn" href="checkout.php">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.php">HOME</a>
                            </li>
                            <li><a href="shop.php">Shop</a>
                                    </li>
                            </li>
                            <li><a href="shop.php">Collection</a></li>
                            <li><a href="blog.php">Blog</a>
                            </li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider-area">
    <div class="slider-active owl-carousel nav-style-1">
        <div class="single-slider-2 slider-height-2 d-flex align-items-center bg-img" style="background-image:url(assets/img/slider/a2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-12 ml-auto">
                        <div class="slider-content-3 slider-animated-1 text-center">
                            <h3 class="animated">Flone.</h3>
                            <h1 class="animated">New Cosmetics</h1>
                            <p class="animated">50% off Summer Vacation</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.php">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider-2 slider-height-2 d-flex align-items-center bg-img" style="background-image:url(assets/img/slider/a1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-12 ml-auto">
                        <div class="slider-content-3 slider-animated-1 text-center">
                            <h3 class="animated">Flone.</h3>
                            <h1 class="animated">Make you beautyful</h1>
                            <p class="animated">Be Your love!</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.php">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="suppoer-area pt-100 pb-60" style="background-color: #E5BDB1;">
    <div class="container" >
        <div class="row" >
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="support-wrap-2 mb-30 support-shape text-center">
                    <div class="support-content-2">
                        <img class="animated" src="assets/img/icon-img/support-1.png" alt="">
                        <h5>Free Shipping every district of HCM city</h5>
                        <p>and support the fee shipping for another one outside HCM city</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="support-wrap-2 mb-30 support-shape text-center">
                    <div class="support-content-2">
                        <img class="animated" src="assets/img/icon-img/support-2.png" alt="">
                        <h5>Support 24/7</h5>
                        <p>call me if you have any question about our product or service!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="support-wrap-2 mb-30 text-center">
                    <div class="support-content-2">
                        <img class="animated" src="assets/img/icon-img/support-3.png" alt="">
                        <h5>Money Return</h5>
                        <p>if you find out any product have a mistake</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-60 section-padding-1">
    <div class="container-fluid">
        <div class="section-title-2 text-center mb-80 mt-50">
            <h2>New Arrival</h2>
            <p>we bring you some cosmetic for you.</p>
        </div>
        <div class="custom-row">
        <?php
         $database->get_product();
        ?>
           
        </div>
    </div>
</div>
<div class="blog-area pb-55">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h2>OUR BLOG</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.php"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.php">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.php"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        <span class="pink">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.php">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.php"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.php">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area bg-gray pt-100 pb-70" style="background-color: #E5BDB1">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="copyright mb-30">
                    <div class="footer-logo">
                        <a href="index.p">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                    <p>© 2020 <a href="#">ThanhQuy</a>.<br> All Rights Reserved</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-30">
                    <div class="footer-title">
                        <h3>ABOUT US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="about.php">Store location</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Orders tracking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-50">
                    <div class="footer-title">
                        <h3>USEFUL LINKS</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Size guide</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-75">
                    <div class="footer-title">
                        <h3>FOLLOW US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="https://www.facebook.com/">Facebook</a></li>
                            <li><a href="https://www.instagram.com/">Instagram</a></li>
                            <li><a href="https://www.youtube.com/channel/UCP2Enr5iuHD9wOC9x46u98Q?view_as=subscriber">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-70">
                    <div class="footer-title">
                        <h3>SUBSCRIBE</h3>
                    </div>
                    <div class="subscribe-style">
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form" >
                                    <input class="email" type="email" required=""  placeholder="Enter your email here.." name="EMAIL" value=""  style="background-color: #f6f2f1">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product/quickview-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/img/product/quickview-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Products Name Here</h2>
                            <div class="product-details-price">
                                <span>$18.00 </span>
                                <span class="old">$20.00 </span>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-list">
                                <ul>
                                    <li>- 0.5 mm Dail</li>
                                    <li>- Inspired vector icons</li>
                                    <li>- Very modern style  </li>
                                </ul>
                            </div>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="white"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size</span>
                                    <div class="pro-details-size-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-meta">
                                <span>Categories :</span>
                                <ul>
                                    <li><a href="#">Minimal,</a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-meta">
                                <span>Tag :</span>
                                <ul>
                                    <li><a href="#">Fashion, </a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->









<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>