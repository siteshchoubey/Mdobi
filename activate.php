<?php
include('config.php');
$query = mysql_query("UPDATE user SET status = '1' WHERE user_email = '".$_GET['email']."' and activationtoken='".$_GET['token']."'");

	if($query){

		echo  '<div class="alert alert-success"><strong>Success!</strong>"Thank you for registering with My Date of Birth Introductions! mdobi was built dedicated to you and your<br/> happiness and to the World Wide Web, intending on encouraging and establishing better relationships all over the<br/> world. Being true to yourself is being yourself and thats what we look for here. Welcome to mdobi! Enjoy!"</div>';
		echo '<meta http-equiv="refresh" content="1;url=login.php">';

	}

	else{

		echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

	}
?>