
<?php
include 'header.php';
session_start();

include('config.php'); 
?>
<section class="middle">
<?php
$sql=mysql_query("SELECT * from user WHERE user_email='".$_SESSION['email']."' and user_pass='".$_POST['password']."'");

$count=mysql_num_rows($sql);

    if($count==1) { 

    	$fetch=mysql_fetch_array($sql);

    	$sql=mysql_query("DELETE from user WHERE user_id='".$fetch['user_id']."'"); 

    	session_destroy();

    	?>

     <div id="lightbox-panel2">

	     <div id="delete_notify">

	        <center><h1>Thanks for giving us a try <br/> Sorry to see you go</h1></center> 

	     </div>

	</div>

	<meta http-equiv="refresh" content="1;url=http://checkyourwebsite.org/arewhoweare/index.php">

     <?php  } else { ?>

      <div id="lightbox-panel2">

	     <div id="delete_notify">

             <center><h1>You Enter a wrong Password </h1></center>
              <center><p><a href="profile.php">Try Again</a></p></center>

    

         </div>

       </div> 

       

	<?php } ?>
<?php include 'footer.php';






