<!DOCTYPE html>
<?php session_start();include "connect.php"; ?>

<html>
<head>
  <title>VDoctor</title>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="css/style.css">
</head>

<body >
  <div class="form">

      <ul class="tab-group">
        <li class="tab "><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">

        <div id="login" >
          <h1><br>Welcome Back!</h1>

          <form action = "" method = "post">

           <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="username"/>
           </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"  name="password" />
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button type="submit" class="button button-block" name="login" id="a">Log In</button>

          </form>

        </div>
        <div id="signup" >
          <h1><br>New user? Sign up now!</h1>

          <form action = "" method = "post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
            <datalist id="genders">
              <option value="Male">
              <option value="Female">
            </datalist>
          <div class="field-wrap">
            <label>Gender  <span class="req">*</span>
            </label>

            <input type="text" list ="genders"required autocomplete="off" name="gender"/>
            </div>
          </div>

          <div class="field-wrap">
            
            <input type="date"required autocomplete="off"  name="age" />
          </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pw" />
          </div>

          <button type="submit" class="button button-block" name="submit"/>Get Started</input>

          </form>

        </div>


      </div><!-- tab-content -->

</div> <!-- /form -->
<script src='js/jquery-3.2.1.min.js'></script>
<script src="js/index.js"></script>
<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/sweetalert.css"
</body>
</html>

<?php
if(isset($_POST['submit'])){

$Name   = $_POST['name'];
$pw     = $_POST['pw'];
$Gender = $_POST['gender'];
$Age    = $_POST['age'];
$Email    = $_POST['email'];

$sql="SELECT `Email` FROM `patient` WHERE `Email` = '$Email'";
$result=mysqli_query($GLOBALS['con'],$sql);
$count = mysqli_num_rows($result);

if($count==0){
  $sql = "INSERT INTO patient (pw,Name,Gender,BrthDay,Email) VALUES ('$pw','$Name','$Gender','$Age','$Email')";
  $result=mysqli_query($GLOBALS['con'],$sql);
  echo "
  <script type=\"text/javascript\">
  swal(\"Sign up Complete!\", \"Now lets log in\" , \"success\");

  setTimeout(myFunction2, 2500);
  function myFunction2() {
      window.location = '#login';
                    }
                    </script>
                    ";
  }
  else{
    echo "
    <script type=\"text/javascript\">
    swal(\"Account already exist\", \"Login now\" , \"info\");

    setTimeout(myFunction1, 2500);
    function myFunction1() {
        window.location = '#login';
                      }
                      </script>
                      ";
  }
}


elseif(isset($_POST['login'])){

  $email = $_POST['username'];
  $pw  = $_POST['password'];


  $sql="SELECT * FROM `patient` WHERE `Email` = '$email' AND `pw` = '$pw'";
  $result=mysqli_query($GLOBALS['con'],$sql);
  $count = mysqli_num_rows($result);
  $row =mysqli_fetch_assoc($result);

  if($count===1){
    $_SESSION['username'] = $email;
    $_SESSION['password']  = $pw;
    $_SESSION['usrId']  = $row['uid'];

    echo "
    <script type=\"text/javascript\">
    swal(\"Welcome back!!!\" ,\" \", \"success\");

    setTimeout(myFunction0, 2500);
    function myFunction0() {
        window.location = 'start.php';
                      }
                      </script>
                      ";
              }
  else{
    echo "
    <script type=\"text/javascript\">
    swal(\"User name or password is not correct\", \"Pleast try again\" , \"error\");

    setTimeout(myFunction1, 2500);
    function myFunction1() {
        window.location = '#login';
                      }
                      </script>
                      ";
      }
  }


else{

}
?>
