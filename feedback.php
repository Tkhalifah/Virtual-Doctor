<!DOCTYPE html>
<html>
<head>
<title>FeedBack</title>
<link rel="stylesheet" type="text/css" href="css/style-2.css">
<link rel="stylesheet" type="text/css" href="css/style-4.css">
</head>
<body style="background-image:url(img/check.jpg);">
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
<div class="frmd">

    <table align="center" style="margin-top: 10px;">
    <tr>
    <td><input type="radio" name="issues"></td>
    <td><h2>issues</h2></td>
    <td><input type="radio" name="suggestions"></td>
    <td><h2>suggestions</h2></td>
    </tr>
    </table>
    <div>
    <h3>Please help us to give you the best by making notes about your use of our site... </h3>
    <textarea class="txtarea" rows="10" cols="70" style = "margin-top: 5px;"></textarea>
    </div>
<div>
<input type = "email" name = "Email" class = "txtarea" style = "margin-top:30px;" placeholder="Your Email">
<input type="submit" name="submit" value="Send" class = "txtar" style = "margin-top: 10px;">
</div>

</div>
</body>
</html>
