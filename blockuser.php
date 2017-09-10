<?php
session_start();
include('config.php');
if($_POST['block']=='block') 
{
	
	$sql = mysql_query("SELECT * FROM `block_user` where block_user_from = '".$_SESSION['user_id']."' and blocked_user_to='".$_POST['to_user']."'");
    $numrows = mysql_num_rows($sql);
    echo $numrows;
    if($numrows == 0)
    {
$query = mysql_query("INSERT INTO `block_user` (`id`, `block_user_from`, `blocked_user_to`) VALUES (NULL, '".$_SESSION['user_id']."',  '".$_POST['to_user']."');");
   }
   
}
if($_POST['block']=='unblock')
{
    $sql = mysql_query("SELECT * FROM `block_user` where block_user_from = '".$_SESSION['user_id']."' and blocked_user_to='".$_POST['to_user']."'");
    $numrows = mysql_num_rows($sql);
    if($numrows ==1)
    {
       $query = mysql_query("DELETE from `block_user` where block_user_from = '".$_SESSION['user_id']."' and blocked_user_to='".$_POST['to_user']."'");
   }
}
?>


