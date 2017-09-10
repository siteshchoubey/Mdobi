<?php 

include 'config.php';

session_start();

$query =  mysql_query("SELECT * FROM message where  id = '".$_POST['message_id']."'");

$row = mysql_fetch_array($query);

if($_SESSION['user_id']==$row['message_from'])

{

    $query = mysql_query("UPDATE message SET hide_send_message = '1'  where id = '".$_POST['message_id']."'");
    echo "delete";

}

else

{

$query = mysql_query("UPDATE message SET hide_message = '1'  WHERE id = '".$_POST['message_id']."'");
echo "update";

}

?>

