<?php
include 'config.php';
session_start();
$sql=mysql_query("select * from message WHERE message_to ='".$_SESSION['user_id']."' and unread = '0'");
$num_rows = mysql_num_rows($sql);
               
?>
<div class="global" id="global">
  <a href="mail.php"><i class="fa fa-globe fa-lg notification " aria-hidden="true"><?php if($num_rows != '0') { ?><span><?php  echo @$num_rows; ?></span><?php } ?></i></a>
</div>