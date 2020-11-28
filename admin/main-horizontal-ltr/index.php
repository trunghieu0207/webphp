﻿<?php
include("../../source/adminlogin.php");
$p=new User();
if(empty($_SESSION["username"])||empty($_SESSION["password"])){
	echo "<script>
	window.location = 'login-register.php';
</script>";
}
else{
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	$p->confirm($username,$password);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- daterange picker -->	
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor_components/datatable/datatables.min.css"/>
	
    <!-- c3 CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor_components/c3/c3.min.css">
   
    <!-- toast CSS -->
    <link href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/horizontal-menu.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- VoiceX Admin skins -->
	<link rel="stylesheet" href="css/skin_color.css">

     
  </head>

<body class="layout-top-nav light-skin theme-fruit fixed onlyheader">
	
<div class="wrapper">
	
  <div class="art-bg">
	  <img src="../images/art1.svg" alt="" class="art-img light-img">
	  <img src="../images/art2.svg" alt="" class="art-img dark-img">
	  <img src="../images/art-bg.svg" alt="" class="wave-img light-img">
	  <img src="../images/art-bg2.svg" alt="" class="wave-img dark-img">
  </div>

  <header class="main-header">
	  <div class="inside-header clearfix">
		<nav class="main-nav" role="navigation">
			<h2 class="nav-brand"><a href="index.html"><img src="../images/logo-icon.png" class="max-w-50" alt="Admin Voice"></a></h2>
			
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
					<li><a href="pages/mailbox.php">Mailbox</a></li>
					<li><a href="#">Contact</a>
					  <ul>
						<li><a href="pages/contact_app_chat.php">Chat app</a></li>
						<li><a href="pages/contact_app.php">Contact / Employee</a></li>
						<li><a href="pages/contact_userlist.php">Userlist</a></li>
					  </ul>			  
					</li>
				  </ul>		  
				</li>				
				<li><a href="#"><i class="ti-shopping-cart mx-5"></i>ECOMMERCE</a>
				  <ul>
					<li><a href="pages/ecommerce_products.php">Products</a></li>
					<li><a href="pages/ecommerce_products_edit.php">Products Edit</a></li>
					<li><a href="pages/ecommerce_details.php">Product Details</a></li>
					<li><a href="pages/ecommerce_orders.php">Product Orders</a></li>
					<li><a href="pages/ecommerce_checkout.php">Products Checkout</a></li>
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
							<img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
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
							<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
							<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
							<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
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
							<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
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
				  <img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
				</a>
				<ul class="dropdown-menu animated flipInX">
				  <!-- User image -->
				  <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
					  <div class="flexbox align-self-center">					  
						<img src="../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
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
			<div class="d-flex align-items-center justify-content-between">
				<div class="d-md-block d-none">
					<h3 class="page-title br-0">Dashboard</h3>
				</div>
				<div class="w-p60">
					<!-- Search Form -->
					<form id="labnol" method="get" action="https://www.google.com/search">
						<div class="form-group mb-0 mr-5">
							<div class="input-group">
								<input type="text" name="q" class="form-control border-white" id="transcript" placeholder="Voice Search">
								<div class="input-group-append">
									<button type="button" onclick="startDictation()" class="tst4 btn btn-rounded btn-white"><img src="../images/Google_mic.png" class="img-fluid w-15" alt=""></button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="right-title w-170">
					<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
						<span class="subheader_daterange-label">
							<span class="subheader_daterange-title"></span>
							<span class="subheader_daterange-date text-primary"></span>
						</span>
						<a href="#" class="btn btn-rounded btn-sm btn-primary">
							<i class="fa fa-angle-down"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">				
				<div class="col-xl-4 col-12">
					<div class="box bg-warning">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">67.4%</h3>
								<div class="list-icons ml-auto">
									<div class="list-icons-item dropdown">
										<a href="#" class="list-icons-item dropdown-toggle text-white" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Update data</a>
											<a href="#" class="dropdown-item">Detailed log</a>
											<a href="#" class="dropdown-item">Statistics</a>
											<a href="#" class="dropdown-item">Clear list</a>
										</div>
									</div>
								</div>
							</div>

							<div>
								Online Traffic
								<div class="font-size-16">15.6% avg</div>
							</div>
						</div>
						<div id="sparklines_color"></div>
					</div>			

					<div class="box bg-info">
						<div class="box-body">
							<div class="d-flex">
								<div class="mr-20 align-self-center">
									<h1 class="text-white">
										<i class="ti-wallet"></i>
									</h1>
								</div>
								<div>
									<h4 class="box-title">Store Sales</h4>
									<h6 class="text-white">Jan 2019</h6>
								</div>
							</div>
							<div class="row mt-20 align-items-center">
								<div class="col-4">
									<h3 class="text-white">$12,254</h3>
								</div>
								<div class="col-8 text-right">
									<div class="storesales"></div>
								</div>
							</div>
						</div>
					</div>
				</div> 				
				<div class="col-lg-8 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Sales Difference
							</h4>
						</div>
						<div class="box-body">
							<div class="chart">
								<div id="sales-difference"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-6 col-12">
				  <div class="box box-widget">
					<div class="box-header with-border">
					  <div class="user-block">
						<img class="avatar" src="../images/user1-128x128.jpg" alt="User Image">
						<span class="username"><a href="#">John Doe</a></span>
						<span class="description">Shared publicly - 8:30 AM Today</span>
					  </div>              
					  <ul class="box-controls pull-right">
						  <li><a class="box-btn-slide" href="#"></a></li>
						  <li><a class="box-btn-fullscreen" href="#"></a></li>
						  <li><a class="" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts"><i class="ti-comments"></i></a></li>
					  </ul>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <!-- post text -->
					  <p>Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem.</p>

					  <p>Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem.</p>

					  <!-- Attachment -->
					  <div class="attachment-block clearfix">
						<img class="attachment-img" src="../images/photo1.png" alt="Attachment Image">

						<div class="attachment-pushed">
						  <h5 class="attachment-heading"><a href="http://www.lipsum.com/">Featured Hydroflora Pots</a></h5>

						  <div class="attachment-text">
							Lorem Ipsum is simply dummy text of... <a href="#">more</a>
						  </div>
						  <!-- /.attachment-text -->
						</div>
						<!-- /.attachment-pushed -->
					  </div>
					  <!-- /.attachment-block -->

					  <!-- Social sharing buttons -->
					  <button type="button" class="btn btn-rounded btn-sm btn-primary"><i class="fa fa-share"></i> Share</button>
					  <button type="button" class="btn btn-rounded btn-sm btn-success"><i class="fa fa-thumbs-o-up"></i> Like</button>
					  <span class="pull-right text-muted">84 likes - 2 comments</span>
					</div>
					<!-- /.box-body -->
					<div class="box-footer box-comments">
					  <div class="box-comment">
						<!-- User image -->
						<img class="avatar" src="../images/user3-128x128.jpg" alt="User Image">

						<div class="comment-text">
							  <span class="username">
								Amayra Lusi
								<span class="text-muted pull-right">9:03 PM Today</span>
							  </span><!-- /.username -->
						 Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper.
						</div>
						<!-- /.comment-text -->
					  </div>
					  <!-- /.box-comment -->
					  <div class="box-comment">
						<!-- User image -->
						<img class="avatar" src="../images/user5-128x128.jpg" alt="User Image">

						<div class="comment-text">
							  <span class="username">
								Amayra Lusi
								<span class="text-muted pull-right">10:03 AM Today</span>
							  </span><!-- /.username -->
						  Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper.
						</div>
						<!-- /.comment-text -->
					  </div>
					  <!-- /.box-comment -->
					</div>
					<!-- /.box-footer -->
					<div class="box-footer">
					  <form action="#" method="post">
						<div class="input-group">
						  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
							  <div class="input-group-addon">
								<div class="align-self-end gap-items">
								  <span class="publisher-btn file-group">
									<i class="fa fa-paperclip file-browser"></i>
									<input type="file">
								  </span>
								  <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
								  <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
								</div>
							  </div>
						</div>
					  </form>
					</div>
					<!-- /.box-footer -->
				  </div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Invoice List</h4>
						</div>
					<div class="box-body p-15">
					  <div class="table-responsive">
						<table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
							<thead>
								<tr>
									<th>#Invoice</th>
									<th>Description</th>
									<th>Amount</th>
									<th>Status</th>
									<th>Issue</th>
									<th>View</th>
								</tr>
							</thead>
							<tbody>								
								<tr>
									<td>#5014</td>
									<td>Lorem Ipsum</td>
									<td>$856</td>
									<td><span class="label label-danger">Unpaid</span> </td>
									<td>15-Mar</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
								<tr>
									<td>#5015</td>
									<td>Lorem Ipsum</td>
									<td>$956</td>
									<td><span class="label label-danger">Unpaid</span> </td>
									<td>15-Aug</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
								<tr>
									<td>#5016</td>
									<td>Lorem Ipsum</td>
									<td>$745</td>
									<td><span class="label label-success">Paid</span> </td>
									<td>15-Aug</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
								<tr>
									<td>#5010</td>
									<td>Lorem Ipsum</td>
									<td>$548</td>
									<td><span class="label label-danger">Unpaid</span> </td>
									<td>15-Jan</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
								<tr>
									<td>#5011</td>
									<td>Lorem Ipsum</td>
									<td>$548</td>
									<td><span class="label label-success">Paid</span> </td>
									<td>15-Sep</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
								<tr>
									<td>#5012</td>
									<td>Lorem Ipsum</td>
									<td>$9658</td>
									<td><span class="label label-danger">Unpaid</span> </td>
									<td>15-Jun</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
								<tr>
									<td>#5013</td>
									<td>Lorem Ipsum</td>
									<td>$4587</td>
									<td><span class="label label-success">Paid</span> </td>
									<td>15-May</td>
									<td>
										<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					</div>
					<!-- /.box-body -->
				  </div>
				</div>
				
				<div class="col-xl-3 col-12">
					<div class="box box-body bg-dark pull-up">
					  <h6>
						<span class="text-uppercase">My New Clients</span>
						<span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="font-size-26">5,125</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="font-size-12"><i class="ion-arrow-graph-up-right text-warning mr-1"></i> %18 Increase from last month</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box box-body bg-danger pull-up">
					  <h6>
						<span class="text-uppercase">New Products</span>
						<span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="font-size-26">258</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="font-size-12"><i class="ion-arrow-graph-up-right text-danger mr-1"></i> %15 up</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box box-body bg-info pull-up">
					  <h6>
						<span class="text-uppercase">New Invoices</span>
						<span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="font-size-26">9,658</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="flexbox font-size-12">
						<span><i class="ion-arrow-graph-down-right text-warning mr-1"></i> %44 up</span>
					  </div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box box-body bg-warning pull-up">
					  <h6>
						<span class="text-uppercase">All Products</span>
						<span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>
					  </h6>
					  <br>
					  <p class="font-size-26">84,965</p>

					  <div class="progress progress-xxs mt-0 mb-10">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					  </div>
					  <div class="flexbox font-size-12">
						<span><i class="ion-arrow-graph-up-right text-danger mr-1"></i> %74 up</span>
						<span>+9025</span>
					  </div>
					</div>
				</div>
				
				<div class="col-12">
					<div class="box bg-img box-inverse" style="background-image: url(../images/auth-bg/bg-8.jpg);" data-overlay="5">				
						<div class="box-header with-border">
							<h4 class="box-title">Latest</h4>
							<ul class="box-controls pull-right">
							  <li><a class="box-btn-close" href="#"></a></li>
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body mt-90">
							<span class="badge" data-overlay="5">New</span>
							<h2 class="font-weight-200 mb-0">Contrary to popular belief</h2>
							<p>There are many variations of passages</p>
							<ul class="flexbox flex-justified mt-50">
								<li>
								  <p class="font-size-20 text-success mb-0 font-weight-300"> <i class="fa fa-caret-up text-success"></i> +1.952% 
									  <small class="font-size-12">41,425.81</small></p>
								  <p> QWDR REF</p>
								</li>

								<li>
								  <p class="font-size-20 text-danger mb-0 font-weight-300"> <i class="fa fa-caret-down text-danger"></i> -0.952% 
									  <small class="font-size-12">54,425.81</small></p>
								  <p> WSDF THG</p>
								</li>

								<li>
								  <p class="font-size-20 text-success mb-0 font-weight-300"> <i class="fa fa-caret-up text-success"></i> +1.12% 
									  <small class="font-size-12">85,425.81</small></p>
								  <p> AERV HGT</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-8 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Sales Overview
							</h4>
						</div>
						<div class="box-body">
							<div class="chart">
								<div id="sales-overview"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="82" data-bar-color="#ee1044" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-trophy text-danger"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">82%</h3>
							  <p class="mb-0">Target goal</p>
							  <p class="text-fade"><small>43% average</small></p>
							  <div id="linearea2" class="mt-15"></div>
						  </div>
					  </div>
					</div>
					<div class="box box-inverse box-carousel slide bg-twitter" data-ride="carousel">
					  <div class="box-header no-border">
						<span class="fa fa-twitter font-size-30"></span>
						  <div class="box-tools pull-right">
							<h5 class="box-title box-title-bold">Carousel feed</h5>
						  </div>
					  </div>
					  <div class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
							  <div class="carousel-item active">
								<blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
								  <p>Holisticly benchmark plug imperatives for multifunctional deliverables.</p>
								  <div class="flexbox">
									<time class="text-white" datetime="2017-11-22 20:00">22 April, 2019</time>
									<span><i class="fa fa-heart"></i> 62</span>
								  </div>
								</blockquote>
							  </div>
							  <div class="carousel-item">
								  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
									  <p>Holisticly benchmark plug imperatives for multifunctional deliverables.</p>
									  <div class="flexbox">
										<time class="text-white" datetime="2017-11-22 20:00">22 May, 2019</time>
										<span><i class="fa fa-heart"></i> 45</span>
									  </div>
								  </blockquote>
							  </div>
							  <div class="carousel-item">
								  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
									  <p>EHolisticly benchmark plug imperatives for multifunctional deliverables.</p>
									  <div class="flexbox">
										<time class="text-white" datetime="2017-11-22 20:00">22 June, 2019</time>
										<span><i class="fa fa-heart"></i> 65</span>
									  </div>
								  </blockquote>
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
	  &copy; 2020 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
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
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

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
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

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
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="../assets/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- date-range-picker -->
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- Slimscroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>	
	
	<!-- apexcharts -->
	<script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- Sparkline -->
	<script src="../assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- easypiechart -->
	<script src="../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>

	<!-- This is data table -->
    <script src="../assets/vendor_components/datatable/datatables.min.js"></script>
	
    <!-- C3 Plugins -->
    <script src="../assets/vendor_components/c3/d3.min.js"></script>
    <script src="../assets/vendor_components/c3/c3.min.js"></script>
	
	<!-- toast -->
	<script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
	
	<!-- VoiceX Admin App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/voice-search.js"></script>
	
	<!-- VoiceX Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard2.js"></script>
	<script src="js/pages/chart-dash2-int.js"></script>
	
	<!-- VoiceX Admin for demo purposes -->
	<script src="js/demo.js"></script>	
	
</body>
</php>
