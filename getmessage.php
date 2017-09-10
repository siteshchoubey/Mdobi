<?php
session_start();
include('config.php');
if(isset($_POST['textcontent']))
{
$sql = mysql_query("SELECT * FROM `block_user` where (block_user_from = '".$_SESSION['user_id']."' and blocked_user_to='".$_POST['to_user']."') or ( blocked_user_to= '".$_SESSION['user_id']."' and block_user_from='".$_POST['to_user']."')");
$numrows = mysql_num_rows($sql);
		if($numrows) {
			 echo '<div class="alert alert-danger"><strong>Sorry, Message Not Sent</strong> </div>';
		}
		else
		{

				$content=mysql_real_escape_string($_POST['textcontent']);
				$query = mysql_query("INSERT INTO `message` (`id`, `message_from`, `message_to`, `message`, `send_date`,`unread`,`user_pic`,`hide_message`,`senderunread`) VALUES (NULL, '".$_SESSION['user_id']."', '".$_POST['to_user']."', '".$content."', now(),'0','".$_SESSION['default_photo']."','0','0')");
					if($query)
					{
					    echo '<div class="alert alert-success"><strong>Message Send Successfully...</strong> </div>';
					}
					else
					{
					     echo '<div class="alert alert-danger"><strong>Sorry, Message Not Sent</strong> </div>';
					}
		}
}

//$fetch= mysql_query("SELECT * FROM message where message_from = '".$_SESSION['user_id']."' and  message_to = '".$_POST['to_user']."' order by id asc");
//while($row=mysql_fetch_array($fetch))
//{
	//echo "<div class='showbox'>".$row['message']."</div>";


//}
?>


