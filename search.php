<?php session_start();include "fun.php"; ?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
<title>Search</title>
<link  rel="stylesheet" type="text/css" href="css/style-2.css" />
<link  rel="stylesheet" type="text/css" href="css/style-4.css" />
<script src="js/jquery-3.2.1.min.js"></script>
</head>

<body style="background-image:url(img/2.jpg);">
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
	<form class="form-wrapper" method="post">
           <input list="symptoms" id="search" placeholder="		   ...  Search for a Symptom ..." required style="height:45px;width:100%"></br>
					  <?php displayList(); ?>
						<a class="myButtoncss" onclick="add()";>Add</a>
 					 <a class="myButtoncss" onclick="cleara();">Clear</a>


    </form>
		<div id="sol">
		</div>
<form method="post">
	<input type="hidden" id="hidden" name="hidden">
	<input type="submit" name="submit" value="Check up">
</form>
			<?php
				if(isset($_POST['submit'])){
					symptoms($_POST['hidden']);
				}
			?>
</div>



<script>
	var i =0;
	var symptom=new Array(10);

	function cleara(){
	  symptom=new Array(10);
		document.getElementById("sol").innerHTML = "";
		document.getElementById("hidden").value = "";
		var element = document.getElementById("prog");
    element.parentNode.removeChild(element);
		swal("Cleared" ," ", "success");
	};

	function add(){

		var activities2="";
		var val=$("#search").val();
		var obj=$("#symptoms").find("option[value='"+val+"']")
		if(obj !=null && obj.length>0 && val!=""){
			//alert("valid");  // allow form submission
			symptom[i]=document.getElementById("search").value;
			//document.getElementById("sol").innerHTML = symptom[0]+symptom[1]+symptom[2];
			i++;
			document.getElementById("search").value = "";
		}else{
			swal("Invalid Symtpom", " " , "error");
			document.getElementById("search").value = "";
		}

		//hiden
		for(var x=0;x<symptom.length;x++){
			if(typeof symptom[x]=="undefined"){

			}else {
				activities2+= symptom[x]+"*";
			}
		}
		//show
		var activities="<ul class=\"list-group\" style=\"margin:60px auto auto auto;max-width:450px;\">";
		for(var x=0;x<symptom.length;x++){
			if(typeof symptom[x]=="undefined"){

			}else {
				if(x%2==0){
					activities+="<li class=\"list-group-item list-group-item-danger\">"+symptom[x]+"</li>"+"<br/>";
				}
				if(x%2==1){
					activities+="<li class=\"list-group-item list-group-item-warning\">"+symptom[x]+"</li>"+"<br/>";
				}
			}
		}
		activities+="</ul>";

		document.getElementById("sol").innerHTML = activities;
		document.getElementById("hidden").value = activities2;
		//document.write(symptom);
	};
</script>
</body>
</html>
