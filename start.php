<!DOCTYPE html>
<?php
include "sessioncheck.php";
include "connect.php";
$query="SELECT * FROM `patient` WHERE `Email` = '{$_SESSION['username']}'";
$sql=mysqli_query($GLOBALS['con'],$query);
$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
		<title>VDoctor</title>
	  <link rel="icon" href="img/logo.png">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style_3.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 header-logo">
					<br>
					<a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo" ></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">

					   <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="margin-left: -1000px; margin-right: -400px; ">

					      <ul class="nav navbar-nav navbar-right">
									<li><a class="menu" href="search.php">Check up</a></li>
									<li><a class="menu" href="feedback.php">Feedback </a></li>
									<li><a class="menu" href="previousVisits.php">Previous visits</a></li>
									<li><a class="menu" href="index.php">Registration</a></li>
									<li><a class="menu" href="AboutUs.php">About us</a></li>
									<li><a class="menu" ></a></li>
									<li><a class="menu" ></a></li>
									<li><a class="menu" ></a></li>
									<li><a class="menu" ></a></li>
									<li><a class="menu"style="color:orange;" >User : &nbsp &nbsp <?php echo $row['Name'] ?></a></li>
									<li><a class="menu" href="signout.php" style="color:red";  >Sign out</a></li>

					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1 ><a href="search.php"> Check up!</a></h1>
												<p style="color:orangered;">Lets predict possible diseases based on your symptoms</p>

			                </div>
			            </div>

			            <div class="item">
			            	<img src="img/slide-four.jpg	" alt="">
			                <div class="carousel-caption">
											<h1><a href="search.php">Feedback</a></h1>
		               		<p style="color:orangered;">Tell us about your diagnosis to improve our system accuracy</p>
		               			<!-- <button>learn more</button> -->
			                </div>
			            </div>
									<div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
												<h1><a href="search.php">Previous visits</a></h1>
		               			<p style="color:orangered;">See diagnosis from your previous check ups </h1>
		               			<!-- <button>learn more</button> -->
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
