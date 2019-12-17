<?php session_start(); ?>
<html>
  <header>
    <title>Search</title>
    <link  rel="stylesheet" type="text/css" href="css/style-2.css" />
    <script src="jquery-3.2.1.min.js"></script>
    <script>
      var i =0;
      var symptom=new Array(10);

      function add(){
        var activities="";
        var activities2="";
        var val=$("#selsct").val();
        var obj=$("#browsers").find("option[value='"+val+"']")
        if(obj !=null && obj.length>0){
          //alert("valid");  // allow form submission
          symptom[i]=document.getElementById("selsct").value;
          //document.getElementById("sol").innerHTML = symptom[0]+symptom[1]+symptom[2];
          i++;
          document.getElementById("selsct").value = "";
        }else{
          alert("invalid");
          document.getElementById("selsct").value = "";
        }

        for(var x=0;x<symptom.length;x++){
          if(typeof symptom[x]=="undefined"){

          }else {
            activities+= symptom[x]+" ";
            activities2+= symptom[x]+"*";
          }

        }

        document.getElementById("sol").innerHTML = activities;
        document.getElementById("hidden").value = activities2;
        //document.write(symptom);
      }
    </script>
  </header>
  <body>
    <?php include 'fun.php';?>
    <div class="frm">

      <form method="post" class="form-wrapper">
      <input list="symptoms" id="selsct" name="myBrowser" /></label>

        <?php displayList(); ?>

      <a onclick="add();">add</a>

      <textarea class="txtarea" id="sol" rows="20" cols="70">
        <?php
          if(isset($_POST['submit'])){
            $grd->Sympiom($_POST['hidden']);
          }
        ?>

      </textarea>
      <input type = "submit" name = "submit" id="submit"/>
      <input type="hidden" name="hidden" id="hidden"><br/>
      </form>
    </div>
  </body>
</html>
