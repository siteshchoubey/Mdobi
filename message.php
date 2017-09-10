<?php
error_reporting(0);
session_start();
include('config.php');

$query = mysql_query("INSERT INTO `dating`.`message` (`id`, `message_from`, `message_to`, `message`, `send_date`) VALUES (NULL, '".$_SESSION['user_id']."', '".$_POST['to_user']."', '".$_POST['message']."', now())");
if($query)
{
echo '<div class="alert alert-success"><strong>Message Send Successfully...</strong> </div>';
}
else
{
     echo '<div class="alert alert-danger"><strong>Sorry, Message Not Sent</strong> </div>';
}
?>