<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>About_Us</title>
	<link rel="stylesheet" href="css/style_3.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link  rel="stylesheet" type="text/css" href="css/style-4.css" />
	<script src="js/modernizr.js"></script>
	<style type="text/css">
		.contact{
			//margin-top: -20px;
		}
	</style>
</head>
<body>
	<div class="dropdown" style="float:right;">
	<button class="dropbtn">Menu</button>
	<div class="dropdown-content">
				<a href="start.php">Home page</a>
				<a href="search.php">Check up</a>
				<a href="previousVisits.php">Previous visits</a>
				<a href="feedback.php">Feedback </a>
				<a href="index.php">Registration</a>
			</div>
		</div>
		<div class="dropdown" style="float:left;">
			<button class="dropbtn" onclick="javascript:location.href='start.php'">Go back</button>
		</div>


	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>Team Work</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Khaled</span></li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Raafat</span> </li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Fahmy</span></li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Omar</span></li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Ibrahim</span></li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Taha</span> </li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>

						<form class="form">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->


</body>
</html>