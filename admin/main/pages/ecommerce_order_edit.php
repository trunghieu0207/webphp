<?php
require '../../sourceadmin/Order.php';
$id = $_REQUEST['id'] ?? '';
$order = new Order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Popup CSS -->
    <link href="../../assets/vendor_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!-- theme style -->
    <link rel="stylesheet" href="../css/horizontal-menu.css">

    <!-- theme style -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- VoiceX Admin skins -->
    <link rel="stylesheet" href="../css/skin_color.css">
    <style>
        .pro-pagination-style ul li {
            display: inline-block;
            margin: 0 4px; }
        .pro-pagination-style ul li a {
            display: inline-block;
            width: 43px;
            height: 43px;
            text-align: center;
            line-height: 43px;
            font-size: 16px;
            border-radius: 100%;
            color: #a749ff;
            -webkit-box-shadow: 0 0px 12px 0.8px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0px 12px 0.8px rgba(0, 0, 0, 0.1); }
        .pro-pagination-style ul li a:hover {
            background-color: #a749ff;
            color: #fff; }
        .pro-pagination-style ul li a.active {
            background-color: #a749ff;
            color: #fff;
            -webkit-box-shadow: none;
            box-shadow: none; }
        .pro-pagination-style ul li a.active:hover {
            background-color: #333; }
        .pro-pagination-style ul li a.prev,
        .pro-pagination-style ul li a.next {
            background-color: #f6f6f6;
            color: #a749ff;
            font-size: 17px;
            -webkit-box-shadow: none;
            box-shadow: none; }
        .pro-pagination-style ul li a.prev:hover,
        .pro-pagination-style ul li a.next:hover {
            background-color: #a749ff;
            color: #fff; }
    </style>
</head>
<body class="layout-top-nav light-skin theme-purple">
<!-- Site wrapper -->
<div class="wrapper">

    <div class="art-bg">
        <img src="../../images/art1.svg" alt="" class="art-img light-img">
        <img src="../../images/art2.svg" alt="" class="art-img dark-img">
        <img src="../../images/art-bg.svg" alt="" class="wave-img light-img">
        <img src="../../images/art-bg2.svg" alt="" class="wave-img dark-img">
    </div>


    <header class="main-header">
        <div class="inside-header clearfix">
            <nav class="main-nav" role="navigation">
                <h2 class="nav-brand"><a href="../index.html"><img src="../../images/logo-icon.png" class="max-w-50" alt="Admin Voice"></a></h2>

                <!-- Mobile menu toggle button (hamburger/x icon) -->
                <button class="topbar-toggler" id="mobile_topbar_toggler"><i class="mdi mdi-dots-horizontal"></i></button>
                <input id="main-menu-state" type="checkbox" />
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                </label>

                <!-- Sample menu definition -->
                <ul id="main-menu" class="sm sm-blue">
                    <li><a href="#" class="current"><i class="ti-dashboard mx-5"></i>DASHBOARD</a>
                    </li>
                    <li><a href="#"><i class="ti-layout-grid2 mx-5"></i>APPS</a>
                        <ul>
                            <li><a href="mailbox.php">Mailbox</a></li>
                            <li><a href="#">Contact</a>
                                <ul>
                                    <li><a href="contact_app_chat.php">Chat app</a></li>
                                    <li><a href="contact_app.php">Contact / Employee</a></li>
                                    <li><a href="contact_userlist.php">Userlist</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="ti-shopping-cart mx-5"></i>ECOMMERCE</a>
                        <ul>
                            <li><a href="ecommerce_products.php">Products</a></li>
                            <li><a href="ecommerce_products_edit.php">Products Edit</a></li>
                            <li><a href="ecommerce_details.php">Product Details</a></li>
                            <li><a href="ecommerce_orders.php">Product Orders</a></li>
                            <li><a href="ecommerce_checkout.php">Products Checkout</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top icon-topbar hmobile">

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="search-bar">
                            <div class="lookup lookup-circle lookup-right">
                                <input type="text" name="s">
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Messages">
                                <i class="mdi mdi-email"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20 bg-light">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Messages</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Lorem Ipsum
                                                        <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                    </h4>
                                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Nullam tempor
                                                        <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                    </h4>
                                                    <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Proin venenatis
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Praesent suscipit
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Donec tempor
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                                </div>

                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#" class="bg-light">See all e-Mails</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Notifications">
                                <i class="mdi mdi-bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="bg-light p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#" class="bg-light">View all</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
                                <img src="../../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <!-- User image -->
                                <li class="user-header bg-img" style="background-image: url(../../images/user-info.jpg)" data-overlay="3">
                                    <div class="flexbox align-self-center">
                                        <img src="../../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
                                        <h4 class="user-name align-self-center">
                                            <span>Samuel Brus</span>
                                            <small>samuel@gmail.com</small>
                                        </h4>
                                    </div>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="only-icon">
                            <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
                                <i class="mdi mdi-crop-free"></i>
                            </a>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting"><i class="fa fa-cog fa-spin"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Products</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-rounded btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

            </section>
            <!-- /.content -->
        </div>
        <div class="pro-pagination-style text-center mt-30">
            <div class="box-body">
                <form action="" method="post">
                    <?php
                    $orderDetail = $order->getDetailOrder($id);
                    ?>
                    <div class="form-group row">
                        <label class="col-form-label col-md-1">Ngày tạo</label>
                        <div class="col-md-4">
                            <input type="text" value="<?=$orderDetail['date_order']?>" disabled class="form-control">
                        </div>
                        <label class="col-form-label col-md-1">Địa chỉ</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="address" value="<?=$orderDetail['address']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-1">Trạng thái</label>
                        <div class="col-md-4">
                            <select name="status" id="status" class="form-control">
                                <option value="onhold" <?php if ($orderDetail['status'] == 'onhold') { echo 'selected'; } ?>>Tạm giữ</option>
                                <option value="inprocess" <?php if ($orderDetail['status'] == 'inprocess') { echo 'selected'; } ?>>Đang chờ xử lý</option>
                                <option value="success" <?php if ($orderDetail['status'] == 'success') { echo 'selected'; } ?>>Thành công</option>
                            </select>
                        </div>
                        <label class="col-form-label col-md-1">Số điện thoại</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="phone" value="<?=$orderDetail['phone']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-1">Khách hàng</label>
                        <div class="col-md-4">
                            <input type="text" value="<?=$orderDetail['full-name']?>" disabled class="form-control">
                        </div>
                        <label class="col-form-label col-md-1">Ghi chú</label>
                        <div class="col-md-4">
                            <textarea name="note" id="" cols="30" rows="10" class="form-control"><?=$orderDetail['note']?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-1">Cập nhât</label>
                            <button type="submit" class="btn btn-primary mb-5" name="btn-update">Cập nhât</button>
                    </div>

                    <?php
                    if (isset($_REQUEST['btn-update'])) {
                        $data = [];
                        $data['address'] = $_REQUEST['address'];
                        $data['status'] = $_REQUEST['status'];
                        $data['phone'] = $_REQUEST['phone'];
                        $data['note'] = $_REQUEST['note'];
                        if ($order->updateOrder($data, $id)) {
                            echo '<div class="alert alert-success">
                                    Cập nhật thành công
                                </div>
                                <script language="javascript">
                                window.location="ecommerce_order_edit.php?id='.$id.'";
                            </script>';
                        } else {
                            echo '<div class="alert alert-success">
                                    Thất bại
                                </div>';
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar">

        <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" title="Notifications"><i class="ti-comment-alt"></i></a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab" title="Comments"><i class="ti-tag"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <div class="lookup lookup-sm lookup-right d-none d-lg-block mb-20">
                    <input type="text" name="s" placeholder="Search" class="w-p100">
                </div>
                <div class="media-list media-list-hover">
                    <a class="media media-single" href="#">
                        <h4 class="w-50 text-gray font-weight-500">10:10</h4>
                        <div class="media-body pl-15 bl-5 rounded border-primary">
                            <p>Morbi quis ex eu arcu auctor sagittis.</p>
                            <span class="text-fade">by Johne</span>
                        </div>
                    </a>

                    <a class="media media-single" href="#">
                        <h4 class="w-50 text-gray font-weight-500">08:40</h4>
                        <div class="media-body pl-15 bl-5 rounded border-success">
                            <p>Proin iaculis eros non odio ornare efficitur.</p>
                            <span class="text-fade">by Amla</span>
                        </div>
                    </a>

                    <a class="media media-single" href="#">
                        <h4 class="w-50 text-gray font-weight-500">07:10</h4>
                        <div class="media-body pl-15 bl-5 rounded border-info">
                            <p>In mattis mi ut posuere consectetur.</p>
                            <span class="text-fade">by Josef</span>
                        </div>
                    </a>

                    <a class="media media-single" href="#">
                        <h4 class="w-50 text-gray font-weight-500">01:15</h4>
                        <div class="media-body pl-15 bl-5 rounded border-danger">
                            <p>Morbi quis ex eu arcu auctor sagittis.</p>
                            <span class="text-fade">by Rima</span>
                        </div>
                    </a>

                    <a class="media media-single" href="#">
                        <h4 class="w-50 text-gray font-weight-500">23:12</h4>
                        <div class="media-body pl-15 bl-5 rounded border-warning">
                            <p>Morbi quis ex eu arcu auctor sagittis.</p>
                            <span class="text-fade">by Alaxa</span>
                        </div>
                    </a>

                </div>
            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <div class="media-list media-list-hover media-list-divided">
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
                            <p>Cras tempor diam nec metus...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
                            <p>Praesent tristique diam...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
                            <p>Cras tempor diam nec...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
                            <p>Praesent tristique diam...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
                            <p>Cras tempor diam nec metus...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
                            <p>Praesent tristique diam...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/1.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
                            <p>Cras tempor diam nec...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img class="avatar avatar-lg" src="../../images/avatar/2.jpg" alt="...">

                        <div class="media-body">
                            <p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
                            <p>Praesent tristique diam...</p>
                            <div class="media-block-actions">
                                <nav class="nav nav-dot-separated no-gutters">
                                    <div class="nav-item">
                                        <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
                                    </div>
                                </nav>

                                <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
                                    <a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
                                    <a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- fullscreen -->
<script src="../../assets/vendor_components/screenfull/screenfull.js"></script>

<!-- popper -->
<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Magnific popup JavaScript -->
<script src="../../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="../../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>

<!-- VoiceX Admin App -->
<script src="../js/jquery.smartmenus.js"></script>
<script src="../js/menus.js"></script>
<script src="../js/template.js"></script>

<!-- VoiceX Admin for demo purposes -->
<script src="../js/demo.js"></script>


</body>
</html>
