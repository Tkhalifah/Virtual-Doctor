<?php

  include "connect.php";

  function displayList(){//list of search
    $sql="SELECT * FROM symptoms ";
  	$result=mysqli_query($GLOBALS['con'],$sql);
    $count=mysqli_num_rows($result);
    echo "<datalist id=\"symptoms\">";
    while($row =mysqli_fetch_assoc($result)){
      echo "<option value=".$row['Name']."></option>";
    }
    echo "</datalist>";
  }

  function displaySelect(){//list of search
    $sql="SELECT * FROM disease ";
  	$result=mysqli_query($GLOBALS['con'],$sql);
    $count=mysqli_num_rows($result);
    echo "<select class=\"txtarea\" name=\"selectDis\">";
    while($row =mysqli_fetch_assoc($result)){
      echo "<option value=".$row['Did'].">".$row['Name']."</option>";
    }
    echo "</select>";
  }

  function getNameDisease($id){ //get id from name
    $sql="SELECT * FROM `disease` where `Did`='$id'";
    $result=mysqli_query($GLOBALS['con'],$sql);
    $count=mysqli_num_rows($result);
    $row =mysqli_fetch_assoc($result);
    if($count===1){
      return $row['Name'];
    }
  }

  function getIdsymptoms($name){ //get id from name
    $sql="SELECT * FROM `symptoms` where `Name`='$name'";
  	$result=mysqli_query($GLOBALS['con'],$sql);
    $count=mysqli_num_rows($result);
    $row =mysqli_fetch_assoc($result);
    if($count===1){
      return $row['sid'];
    }
  }

  function getNameSymptoms($name){ //get id from name
    $sql="SELECT * FROM `symptoms` where `sid`='$name'";
  	$result=mysqli_query($GLOBALS['con'],$sql);
    $count=mysqli_num_rows($result);
    $row =mysqli_fetch_assoc($result);
    if($count===1){
      return $row['Name'];
    }
  }

  function symptoms($activities){ //fun is work
    $Symp_Array = explode("*",$activities);
    //print_r($Symp_Array);echo "<br/>";
    for($i=0;$i<count($Symp_Array)-1;$i++){
      $Symp_Array[$i]=getIdsymptoms($Symp_Array[$i]);
    }
    unset($Symp_Array[count($Symp_Array)-1]);
    //print_r($Symp_Array);echo "<br/>";echo "<br/>";
    $command=exec('python Model.py ' . escapeshellarg(json_encode($Symp_Array)) .'2<&1',$output);
    //echo "<br/>";
    //print_r($output);
    if(!feedback($Symp_Array)){
      echo "
      <script type=\"text/javascript\">
      swal(\"Error!!!!\" ,\" \", \" error\");
                        </script>

      ";
    }else{
      echo "
      <div class=\"progress\" id=\"prog\">
  		    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width:".$output[1]."%\">
          ".$output[0]." ".$output[1]." %
  		    </div>
  		    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" style=\"width:".$output[3]."%\">
  		      ".$output[2]." ".$output[3]." %
  		    </div>
  		    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width:".$output[5]."%\">
  		      ".$output[4]." ".$output[5]." %
  		    </div>
  		  </div>
      ";
    }

  }

  function feedback($Symp_Array){
    //time
    date_default_timezone_set('Africa/Cairo');
    $current_date = date('Y-m-d h:i:s');
    //idUser
    $idUser=$_SESSION['usrId'];
    //id
    $idSep= array(10);
    for($i=0;$i<10;$i++){
      if(!isset($Symp_Array[$i])){
        $idSep[$i]=2147483647;
      }else {
        $idSep[$i]=$Symp_Array[$i];
      }
    }
    // print_r($Symp_Array);
    //print_r($idSep);
    $sql="INSERT INTO `check_up`(`date`, `usid`, `syid`, `symid1`, `symid2`, `symid3`, `symid4`, `symid5`, `symid6`, `symid7`, `symid8`, `symid9`)
    VALUES ('$current_date','$idUser','$idSep[0]','$idSep[1]','$idSep[2]','$idSep[3]','$idSep[4]',
      '$idSep[5]','$idSep[6]','$idSep[7]','$idSep[8]','$idSep[8]')";
    $query=mysqli_query($GLOBALS['con'],$sql);
    if($query===false){
      return 0;
    }else {
      return 1;
    }


  }

  function displayPreviousVisits(){
    $idUser=$_SESSION['usrId'];
    $sql="SELECT * FROM `check_up` where `usid`='$idUser'";
  	$result=mysqli_query($GLOBALS['con'],$sql);
    $count=mysqli_num_rows($result);
    while ($row =mysqli_fetch_assoc($result)) {
      $userSmp=[$row['syid'],$row['symid1'],$row['symid2'],$row['symid3'],$row['symid4'],$row['symid5'],$row['symid6'],$row['symid7'],$row['symid8'],$row['symid9']];
      for ($i=0; $i <10 ; $i++) {
        if($userSmp[$i]==2147483647){
          unset($userSmp[$i]);
        }else {
          getNameSymptoms($userSmp[$i]);
        }
      }
      $command=exec('python Model.py ' . escapeshellarg(json_encode($userSmp)) .'2<&1',$output);
      echo $row['date']."<br/>";
      for ($i=0; $i <count($userSmp) ; $i++) {
        echo getNameSymptoms($userSmp[$i]) ." * ";
      }
      //print_r($userSmp);
      echo "<br/>";
      echo "
      <div class=\"progress\" id=\"prog\">
  		    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width:".$output[1]."%\">
          ".$output[0]." ".$output[1]." %
  		    </div>
  		    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" style=\"width:".$output[3]."%\">
  		      ".$output[2]." ".$output[3]." %
  		    </div>
  		    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width:".$output[5]."%\">
  		      ".$output[4]." ".$output[5]." %
  		    </div>
  		  </div>
      ";
      if ($row['realDisease']==NULL) {
        echo "
          <div>
           <a href=\"feedbackDisease.php?checkid=".$row['checkid']."\">Add Real Disease</a>
           </div><br/>
        ";
      }else {
        echo "<div>Real Disease is :-". getNameDisease($row['realDisease'])."</div><br/>";
      }
    }
  }

  function addRealDisease($id){
    $rd=$_POST['selectDis'];
    $sql="UPDATE `check_up` SET `realDisease`='$rd' where `checkid`='$id'";
  	$result=mysqli_query($GLOBALS['con'],$sql);
    if($result){
      $sql2="SELECT * FROM `check_up` where `checkid`='$id'";
    	$result2=mysqli_query($GLOBALS['con'],$sql2);
      $row =mysqli_fetch_assoc($result2);
      $allSmp= array(131);
      $userSmp=[$row['syid'],$row['symid1'],$row['symid2'],$row['symid3'],$row['symid4'],$row['symid5'],$row['symid6'],$row['symid7'],$row['symid8'],$row['symid9']];
      //
      for ($i=0; $i <10 ; $i++) {
        if($userSmp[$i]==2147483647){

        }else {
          $allSmp[$userSmp[$i]]=1;
        }
      }
      //
      for ($i=0; $i <132 ; $i++) {
        if(!isset($allSmp[$i])){
          $allSmp[$i]=0;
        }else{
          if(isset($allSmp[$i])&&$allSmp[$i]==1){
            $allSmp[$i]=1;
          }else {
            $allSmp[$i]=0;
          }
        }
      }
      $allSmp[132]=getNameDisease($rd);
      if(file_exists("dataset.csv")){
        $myfile = fopen("dataset.csv", "a") or die("Unable to open file!");
        fputcsv($myfile, $allSmp);
        fclose($myfile);
        //echo "done";
      }else {
        //echo "no flie";
      }
      die("<script>location.href ='previousVisits.php'</script>");
    }else {
      //printf("Errormessage: %s\n", mysqli_error($GLOBALS['con']));
    }
  }




?>
