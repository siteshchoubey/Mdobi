<?php

session_start();

include('config.php');

print_r($_POST);

$fetch= mysql_query("SELECT * FROM user INNER JOIN message ON user.user_id=message.message_from WHERE message.message_to ='".$_SESSION['user_id']."' and message.message_from ='".$_GET['user_id']."'");

while($row=mysql_fetch_array($fetch))

{

	echo "<div class='showbox'>".$row['message']."</div>";





}

?>





