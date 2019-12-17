<!DOCTYPE html>
<?php
include "fun.php";
if(isset($_GET["checkid"]))
{
    $id = $_GET["checkid"];
}else {
  die("<script>location.href ='index.php'</script>");
}
?>
<html>
<head>
<title>FeedBack</title>
<link rel="stylesheet" type="text/css" href="css/style-2.css">
<link rel="stylesheet" type="text/css" href="css/style-4.css">
</head>
<body style="background-image:url(img/7.jpg);">
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
		  <button class="dropbtn" onclick="javascript:location.href='previousVisits.php'">Go back</button>
		</div>

<div class="frmd">

    <div>
      <form method="post">
        <?php displaySelect();?>
        </br>
        <input type="submit" name="btnDis" value="Add" class="txtt">
        <?php
          if(isset($_POST['btnDis'])){
            addRealDisease($id);
          }
        ?>

      </form>
    </div>



</div>
</body>
</html>
