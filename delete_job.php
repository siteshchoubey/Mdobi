<?php
include('config.php');
$query= mysql_query("DELETE from user_job where job_id ='".$_POST['post_id']."'");
if($query)
{
	 echo "<div class='alert alert-success'>Job post Deleted Successfully</div>";
}
else
{
	 echo "<div class='alert alert-danger'>Job post was not Deleted</div>";
}
?>
