<?php
session_start();
require 'source/CartOrder.php';
$cartOrder = new CartOrder();
?>
<!doctype html>
<html class="no-js" lang="zxx">

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
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-color: #E5BDB1">
<header class="header-area header-in-container clearfix">
    <div class="header-top-area">
        <div class="container">
            <div class="header-top-wap">
                <div class="language-currency-wrap">
                    <div class="same-language-currency language-style">
                        <a href="#">English <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="#">Arabic </a></li>
                                <li><a href="#">Bangla </a></li>
                                <li><a href="#">Hindi  </a></li>
                                <li><a href="#">Spanish </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency use-style">
                        <a href="#">USD  <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="#">Taka (BDT) </a></li>
                                <li><a href="#">Riyal (SAR) </a></li>
                                <li><a href="#">Rupee (INR)  </a></li>
                                <li><a href="#">Dirham (AED) </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency">
                        <p>Call Us 3965410</p>
                    </div>
                </div>
                <div class="header-offer">
                    <p>Free delivery on order over <span>$200</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar header-res-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="index.html">home version 1</a></li>
                                        <li><a href="index-2.html">home version 2</a></li>
                                        <li><a href="index-3.html">home version 3</a></li>
                                        <li><a href="index-4.html">home version 4</a></li>
                                        <li><a href="index-5.html">home version 5</a></li>
                                        <li><a href="index-6.html">home version 6</a></li>
                                        <li><a href="index-7.html">home version 7</a></li>
                                        <li><a href="index-8.html">home version 8</a></li>
                                        <li><a href="index-9.html">home version 9</a></li>
                                        <li><a href="index-10.html">home version 10</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html"> Shop <i class="fa fa-angle-down"></i> </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">shop layout</a></li>
                                                <li><a href="shop.html">standard style</a></li>
                                                <li><a href="shop-filter.html">Grid filter style</a></li>
                                                <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                                <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                                <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                                <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                                <li><a href="shop-list.html">list 1 column box </a></li>
                                                <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                                <li><a href="shop-list-fw-2col.html">list 2 column  full wide</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="mega-menu-title"><a href="#">product details</a></li>
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-3.html">tab style 3</a></li>
                                                <li><a href="product-details-4.html">sticky style</a></li>
                                                <li><a href="product-details-5.html">gallery style </a></li>
                                                <li><a href="product-details-slider-box.html">Slider style</a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-6.html">fixed image style </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="mega-menu-img"><a href="shop.html"><img src="assets/img/banner/banner-12.png" alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Collection</a></li>
                                <li><a href="#"> Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="cart-page.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">blog standard</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details 1</a></li>
                                        <li><a href="blog-details-2.html">blog details 2</a></li>
                                        <li><a href="blog-details-3.html">blog details 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html"> About </a></li>
                                <li><a href="contact.html"> Contact</a></li>
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
                                    <li><a href="login-register.html">Login</a></li>
                                    <li><a href="login-register.html">Register</a></li>
                                    <li><a href="wishlist.html">Wishlist  </a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="same-style header-wishlist">
                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="same-style cart-wrap">
                            <button class="icon-cart">
                                <i class="pe-7s-shopbag"></i>
                                <span class="count-style">02</span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    <?php
                                    if(isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $cart) {
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
                                    <h4>Shipping : <span>$20.00</span></h4>
                                    <h4>Total : <span class="shop-total">$260.00</span></h4>
                                </div>
                                <div class="shopping-cart-btn btn-hover text-center">
                                    <a class="default-btn" href="cart-page.html">view cart</a>
                                    <a class="default-btn" href="checkout.html">checkout</a>
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
                            <li><a href="index.html">HOME</a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                    <li><a href="index-4.html">home version 4</a></li>
                                    <li><a href="index-5.html">home version 5</a></li>
                                    <li><a href="index-6.html">home version 6</a></li>
                                    <li><a href="index-7.html">home version 7</a></li>
                                    <li><a href="index-8.html">home version 8</a></li>
                                    <li><a href="index-9.html">home version 9</a></li>
                                    <li><a href="index-10.html">home version 10</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="#">shop layout</a>
                                        <ul>
                                            <li><a href="shop.html">standard style</a></li>
                                            <li><a href="shop-filter.html">Grid filter style</a></li>
                                            <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                            <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                            <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                            <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                            <li><a href="shop-list.html">list 1 column box </a></li>
                                            <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                            <li><a href="shop-list-fw-2col.html">list 2 column  full wide</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">product details</a>
                                        <ul>
                                            <li><a href="product-details.html">tab style 1</a></li>
                                            <li><a href="product-details-2.html">tab style 2</a></li>
                                            <li><a href="product-details-3.html">tab style 3</a></li>
                                            <li><a href="product-details-4.html">sticky style</a></li>
                                            <li><a href="product-details-5.html">gallery style </a></li>
                                            <li><a href="product-details-slider-box.html">Slider style</a></li>
                                            <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                            <li><a href="product-details-6.html">fixed image style </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Collection</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="cart-page.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout </a></li>
                                    <li><a href="wishlist.html">wishlist </a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                    <li><a href="login-register.html">login / register </a></li>
                                    <li><a href="contact.html">contact us </a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">blog standard</a></li>
                                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-details.html">blog details 1</a></li>
                                    <li><a href="blog-details-2.html">blog details 2</a></li>
                                    <li><a href="blog-details-3.html">blog details 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Checkout </li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-area pt-95 pb-100">
        <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label for="full-name">Họ và tên</label>
                                    <input type="text" name="full-name" id="full-name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" name="address" id="address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label for="phone">Điện thoại</label>
                                    <input type="text" name="phone" id="phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label for="note">Ghi chú</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="note" id="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <?php
                                        $total = 0;
                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $cart) {
                                                $total += $cart['gia'] * $cart['qty'];
                                        ?>
                                        <li><span class="order-middle-left"><?=$cart['name']?></span> <span class="order-price"><?=number_format($cart['gia'] * $cart['qty'])?> </span></li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li><?=number_format($total)?> VNĐ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <input type="submit" class="btn-hover" name="btn-submit" value="Đặt hàng"/>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_REQUEST['btn-submit'])) {
                $informationOrders = [];
                $informationOrders['full-name'] = $_REQUEST['full-name'] ?? '';
                $informationOrders['address'] = $_REQUEST['address'] ?? '';
                $informationOrders['phone'] = $_REQUEST['phone'] ?? '';
                $informationOrders['email'] = $_REQUEST['email'] ?? '';
                $informationOrders['note'] = $_REQUEST['note'] ?? '';
                $informationOrders['total'] = $total;
                if ($cartOrder->orderProduct($_SESSION['cart'], $informationOrders)) {
                    echo '<script>
					    alert("Đặt hàng thành công");
				    </script>';
                    echo '<script>
					    window.location="index.php";
				    </script>';
                } else {
                    echo '<script>
					    alert("Đặt hàng thất bại");
				    </script>';
                }
            }
            ?>
        </form>
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