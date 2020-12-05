<?php
include("../../source/adminlogin.php");
$p=new User();
if(empty($_SESSION["username"])||empty($_SESSION["password"]) || empty($_SESSION['permission'])){
	echo "<script>
	window.location = '../../login-register.php';
</script>";
}
else{
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	$permission = $_SESSION['permission'];
	$p->confirm($username,$password, $permission);
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
			<h2 class="nav-brand"><a href="index.php"><img src="../images/logo-icon.png" class="max-w-50" alt="Admin Voice"></a></h2>
			
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
				<!-- <li><a href="#"><i class="ti-layout-grid2 mx-5"></i>APPS</a>			
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
				</li>				 -->
				<li><a href="#"><i class="ti-shopping-cart mx-5"></i>ECOMMERCE</a>
				  <ul>
					<li><a href="pages/ecommerce_products.php">Products</a></li>
					<li><a href="pages/ecommerce_products_edit.php">Products Edit</a></li>
					<li><a href="pages/ecommerce_products_insert.php">Products Insert</a></li>
					<li><a href="pages/ecommerce_details.php">Product Details</a></li>
					<li><a href="pages/ecommerce_orders.php">Product Orders</a></li>
					<li><a href="pages/ecommerce_checkout.php">Products Checkout</a></li>
				  </ul>
				</li>
			
			</ul>
		</nav>
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top icon-topbar hmobile">	

		  
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
					<form id="labnol" method="get" action="#">
						<div class="form-group mb-0 mr-5">
							<div class="input-group">
								<input type="text" name="srch_name"  class="form-control border-white" id="transcript" placeholder="Search">
								<div class="input-group-append">
									<button type="button" onclick="startDictation()" class="tst4 btn btn-rounded btn-white"><img src="../images/Google_mic.png" class="img-fluid w-15" alt=""></button>
									<input type="submit" value="Search"  name="srch_btn" class="button-search btn btn-success" style="width: 80px;border: none; ">
								</div>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
		

		<!-- Main content -->
		<section class="content">
			<div class="row">
			<?php
                                        
										if(isset($_REQUEST['srch_btn']))
										{		
											$name=$_REQUEST['srch_name'];
											if($name!='')
											{
											
											$p->adminsearch($name);
											
											}
											else 
											{
											echo 'Không có sản phẩm bạn cần tìm';

											}		
										}
										
										?>
				
				<div class="col-lg-8 col-12 mt-50">
				
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
				<div class="col-lg-4 col-12 mt-50">
					<div class="box">				  
					  

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="82" data-bar-color="#ee1044" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-trophy text-danger mt-30"></i></span>
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
  
<!--Modal xóa-->
<div id="xoaSanPham" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">						
				<div class="modal-header">						
					<h4 class="modal-title">XÓA SẢN PHẨM</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_d" name="id" class="form-control">					
					<p>XÓA SẢN PHẨM NÀY?</p>
					<p class="text-warning"><small>Sản phẩm bị xóa không thể hoàn tác.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="HỦY">
					<button type="submit" class="btn btn-danger" name="delete_btn" id="delete">XÓA</button>						
				</div>
				<?php
				if(isset($_POST['delete_btn']))
				{
					$id=$_REQUEST['id'];
					$sql="delete from products where id=$id";
					$user->crud($sql);
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
	  &copy; 2020 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>


  
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
