<?php
require"header.php";
require"connect.php";
?>
<!DOCTYPE >
<html lang="en">
<head>
	<!--<title>LibChurch - Event Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="LibChurch Event Template">
	<meta name="keywords" content="event, libChurch, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<!-- Favicon -->   
	<!--<link href="img/favicon.ico" rel="shortcut icon"/>-->

	<!-- Google Fonts -->
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">-->

	<!-- Stylesheets -->
	<!--<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/style.css"/>-->


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!--<div id="preloder">
		<div class="loader"></div>
	</div>-->
	
	<!-- header top section -->
	<!--<div class="top-nav-section hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="social">
						<a href="#"><i class="ti-facebook"></i></a>
						<a href="#"><i class="ti-twitter-alt"></i></a>
						<a href="#"><i class="ti-google"></i></a>
						<a href="#"><i class="ti-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 col-lg-6">
					<div class="counter-top">
						<h5>Upcoming Event:</h5>
						<div class="counter">
							<div class="counter-item"><h4>10</h4>Days</div>
							<div class="counter-item"><h4>08</h4>hours</div>
							<div class="counter-item"><h4>40</h4>Mins</div>
							<div class="counter-item"><h4>56</h4>secs</div>
						</div>
						<a href="#" class="top-readmore hidden-sm">readmore</a>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-3">
					<div class="user-input">
						<a href="#">My account <i class="fa fa-angle-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- header top section end-->


	<!-- Header section  -->
	<!--<header class="header-section">
		<div class="container">-->	
			<!-- logo -->
			<!--<a href="index.html" class="site-logo"><img src="img/logo.png" alt=""></a>
			<a href="" class="site-btn hidden-xs">send donation</a>-->
			<!-- nav menu -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<nav class="main-menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="login.php">Login</a></li>
					<li class="active"><a href="blog.php">blog</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info section -->
	<<section class="page-info-section set-bg" data-setbg="img/bg.jpg">
	<div class="page-info-content">
			<div class="pi-inner">
				<div class="container">
					<h2>Blog</h2>
					<div class="site-breadcrumb">
						<a href="#">Home</a> <i class="fa fa-angle-right"></i>
						<span>Blog</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section end -->
	

	<!-- Blog section -->
	<section class="blog-section blog-page spad">
		<div class="container">
			<div class="section-title">
				<span>Kerala Government</span>
				<h2>LATEST NEWS</h2>
			</div>
			<div class="row">
				<?php 
				$sql="select * from blog";
				$res=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($res))
				{
					
				?>
				<div class="col-sm-4">
					<div class="blog-item">
						<img class="bi-thumb set-bg" src="admin/images/<?php echo $row['pictures'];?>">
						<div class="bi-content">
							<div class="date"><?php echo $row['news_date'];?></div>
							<h4><a href="single-blog.html"><?php echo $row['title'];?></a></h4>
							<div class="bi-author">by <a href="#"><?php echo $row['description'];?></a></div>
							
						</div>
					</div>
				</div>
				<?php
			}
			?>
			
			</div>
			<div class="pagination-area">
				<ul class="pageination-list">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
				</ul>
				<p>Page 1 of 08 results</p>
			</div>
		</div>
	</section>
	<!-- Blog section end-->


	
<?php
require"footer.php";
?>