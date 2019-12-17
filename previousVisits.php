<?php session_start();include "fun.php"; ?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
<title>Previous visits</title>
<link  rel="stylesheet" type="text/css" href="css/style-2.css" />
<link  rel="stylesheet" type="text/css" href="css/style-4.css" />
<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
</head>

<body style="background-image:url(img/33.jpeg);">
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
<div class="frm" style="margin:50px auto auto auto">
	<?php displayPreviousVisits(); ?>
</div>


</body>
</html>
