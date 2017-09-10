<?php

session_start();
require_once("dbcontroller.php");

require_once("pagination.class.php");

$db_handle = new DBController();

if(@$_REQUEST['chapter_id'])
{
	$sql = "SELECT * FROM user_story WHERE id ='".@$_REQUEST['chapter_id']."'";
}
else
{ 
    $sql = "SELECT * FROM user_story WHERE id ='".@$_REQUEST['chapter_id']."'";
}

$query =  $sql; 

//echo $query;

$result = $db_handle->runQuery($query);


?>

<form name="frmSearch" method="post" action="horoscope.php">
<div class="col-lg-9">
		<div class="horobg">
          <?php echo $result[0]['chapter_desc'];?>
		</div>
		<?php if(@$_SESSION['user_id']===@$_POST['user_id']) { ?>
        <div style="float:right;padding:20px;"><a href="add-new-story.php?id=<?php echo $result[0]['id'];?>&user=<?php echo $_SESSION['user_id'];?>&edit=story" target="_blank">Edit</a> </div>
        <?php } ?>

		
</form>	

