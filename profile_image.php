<?php 
require_once("config.php");
session_start();
if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['pass'];
	echo $email;
	
	$sql="SELECT * from user WHERE user_email='user_photo'";
	mysql_select_db($db);
	$result=mysql_query($sql); 
	$count=mysql_num_rows($result);
	
     if($count==1)
     {
     	$fetch=mysql_fetch_assoc($result);
     	
     	unset($fetch['password']);
     	$_SESSION['usersession']=$fetch;
     	print_r($_SESSION['usersession']);
     	die();
     	$_SESSION['msg']="<div class='bg-success msg'>You have been Logged In successfully</div>";
			header("Location:login.php");
     }
     else{
     	echo "<div class='bg-danger msg'>Your Email and Password Combination is Wrong!</div>";
     }
	
}

 ?>