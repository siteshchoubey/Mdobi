<?php

session_start();

require_once("dbcontroller.php");

require_once("pagination.class.php");

$db_handle = new DBController();

$zodiac_signs = @$_POST['horo'];

$queryCondition = "";

$perPage = new PerPage();



$orderby = " ORDER BY user_id asc";




if(@$_REQUEST['horo'])
{
	$sql = "SELECT * FROM user WHERE zodiac_signs ='".$zodiac_signs."'";
}
else
{ 
    $sql = "SELECT * FROM user WHERE zodiac_signs ='Capricorn I'";
}


$paginationlink = "gethoroscope.php?page=";

$page = 1;

if(!empty($_GET["page"])) {

$page = $_GET["page"];

}



$start = ($page-1)*$perPage->perpage;

if($start < 0) $start = 0;

$query =  $sql . @$group . $orderby . " limit " . $start . "," . $perPage->perpage; 

//echo $query;

$result = $db_handle->runQuery($query);

if(empty($_GET["rowcount"])) {

$_GET["rowcount"] = $db_handle->numRows($sql);

}



$perpageresult = $perPage->perpage($_GET["rowcount"], $paginationlink);

?>

<form name="frmSearch" method="post" action="horoscope.php">

<input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" />
<input type="hidden" id="horo" name="horo" value="<?php echo $_REQUEST["horo"]; ?>" />
<div class="col-lg-9">
				<div class="horobg">

				<?php

				if(!empty($result)) {

				foreach($result as $k=>$v) {

					$user_pic=explode(',', $v['user_photo']);

				?>

                <?php if(empty($v['user_photo'])) { ?>

                <div class="horobox">



			      <a  href="mystory.php?id=<?php echo $v['user_id'];?>" target="_blank" id="<?php echo $v['user_id'];?>">

				<img class="img-responsive full_img" src="uploads/demo.png"/>

			</a>

				<!-- <div class="textbg">

				  <span>Neelam</span><br><samp>23 . Delhi . IND</samp>

				</div> -->

				</div>

                <?php } else {  ?>

                 <div class="horobox">



			      <a  href="mystory.php?id=<?php echo $v['user_id'];?>" target="_blank" id="<?php echo $v['user_id'];?>">

				<img class="img-responsive full_img" src="uploads/<?php echo $user_pic[0]; ?>"/>

			</a>

				<!-- <div class="textbg">

				  <span>Neelam</span><br><samp>23 . Delhi . IND</samp>

				</div> -->

				</div>

                <?php } ?>

				<?php

				}} 

				else{

					echo  '<div class="alert alert-success"><strong>Sorry </strong> No matching Found</div>';

				}

				?>

				</div>

				<?php if(isset($perpageresult)) { ?>

				<div style="text-align:center;margin-bottom: 5%;">

					<?php echo $perpageresult; ?>

				</div>

				<?php } ?>

</div>

		
</form>	

 <script>

    $(".perpage-link").click(function(){

      $('html, body').animate({

        scrollTop: $("#loading").offset().top}, 1000);

     



    });

</script>
<script type="text/javascript">

$(document).ready(function(){

  $("a.show-panel").click(function(){

  	var user_id= $(this).attr('id')

  	var dataString = {'user_id':user_id} ;

  	$.ajax({



    url: 'getpopupbox.php',



    type: "POST",



    data:  dataString,



    success: function(data){ 

    	         $("#lightbox, #lightbox-panel").html(data).fadeIn(300);

    	         $("body").css("overflow", "hidden");

                 //$("#lightbox, #lightbox-panel").fadeIn(300);



    }

    

  });

   

  })





});

</script>