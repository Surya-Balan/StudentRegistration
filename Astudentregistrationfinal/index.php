<?php
  include "header.php";
  include_once "controllers/controller.php";
  include('config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['submit'])){
    //$uname=$_POST['user_name'];
    $conn=new controller();
   // $conn->reg($uname);
    $conn->reg();
  }
  if(isset($_POST['login'])){
   // $Name=$_POST['Name'];
    $conn=new controller();
   // $conn->login($Name);
    $conn->login();
  }
?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<div class="row">
   <div class="login">
   <body style="background-image:url('img/1.jpg');background-repeat:no-repeat;
		background-size:cover;">
   <form action="" method="post">
    <h1>   Home </h1>
	<!--<input type="text" name="user_name" class="fld" placeholder="User Name"><br>-->
	<input  type="submit" name="submit" class="btn" value="Register">
	<input type="submit" name="login" class="btn" value="Login"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>