<?php

session_start();

require_once("dbcontroller.php");

require_once("pagination.class.php");

$db_handle = new DBController();





include('getlove.php');

$zodiac_signs = implode(' AND ',$zodiac);





$ethnicity = @$_REQUEST['ethnicity_checklist'];

$religion =  @$_REQUEST['religion_checklist'];

$marital_status = @$_REQUEST['marital_status_checklist'];

$children = @$_REQUEST['children_checklist'];

$employment = @$_REQUEST['employment_checklist'];

$sexuality = @$_REQUEST['sexuality_checklist'];

$age = @$_REQUEST['age_checklist'];

$height = @$_REQUEST['height_checklist'];

$weight = @$_REQUEST['weight_checklist'];

$vices = @$_REQUEST['vices_checklist'];

$country = @$_REQUEST['country'];

$state = @$_REQUEST['state'];

$city = @$_REQUEST['city'];

$seeking = @$_REQUEST['seeking_checklist'];



$queryCondition = "";





if(!empty($ethnicity)) {		

		foreach($ethnicity as $c) {

			$ethencityarray[] = "ethnicity = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$ethencityarray).')';

}



if(!empty($religion)) {		

		foreach($religion as $c) {

			$religionarray[] = "religion = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$religionarray).')';

}



if(!empty($marital_status)) {		

		foreach($marital_status as $c) {

			$marital_statusarray[] = "marital_status = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$marital_statusarray).')';

}



if(!empty($children)) {		

		foreach($children as $c) {

			$childrenarray[] = "children = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$childrenarray).')';

}



if(!empty($employment)) {		

		foreach($employment as $c) {

			$employmentarray[] = "employment = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$employmentarray).')';

}



if(!empty($sexuality)) {		

		foreach($sexuality as $c) {

			$sexualityarray[] = "sexuality = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$sexualityarray).')';

}



if(!empty($age)) {		

		foreach($age as $c) {

			$agearray[] = "age = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$agearray).')';

}



if(!empty($height)) {		

		foreach($height as $c) {

			$heightarray[] = "height = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$heightarray).')';

}



if(!empty($weight)) {		

		foreach($weight as $c) {

			$weightarray[] = "weight = '".$c."'";

		}

		$WHERE[] = '('.implode(' OR ',$weightarray).')';

}



if(!empty($vices)) {		

		foreach($vices as $c) {

			$vicesarray[] = "FIND_IN_SET('".$c."',vices)";

		}

		$WHERE[] = '('.implode(' OR ',$vicesarray).')';

}



if(!empty($seeking)) {		

		foreach($seeking as $c) {

			$seekingarray[] = "FIND_IN_SET('".$c."',seeking)";

		}

		$WHERE[] = '('.implode(' OR ',$seekingarray).')';

}





if(!empty($country)) {		

		$WHERE[] = "user_country = '".$country."'";

}



if(!empty($state)) {		

		$WHERE[] = "user_state = '".$state."'";

}



if(!empty($city)) {		

		$WHERE[] = "user_city = '".$city."'";

}











   if(!empty($WHERE)) {

    $w = implode(' AND ',$WHERE);

   	$w = ' AND '.$w;

   	//@$group = " GROUP BY user_id";

  }





$perPage = new PerPage();



$orderby = " ORDER BY user_id asc";





$sql = "SELECT * FROM user WHERE $zodiac_signs "  . @$w . " and user_id !='".$_SESSION['user_id']."' and hide_profile='0'";

$paginationlink = "getresult_love.php?page=";

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

<form name="frmSearch" method="post" action="love.php">

<input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" />

<div class="container-fluid">

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

			  <div class="sub_heading">

			    <samp>"Love, dating, casual, fling, flirt, one night stand, sex, arrangement, friends with benefits"</samp>

			  </div>

				<div class="pixbg">

				<?php

				if(!empty($result)) {

				foreach($result as $k=>$v) {

					$user_pic=explode(',', $v['user_photo']);

				?>

                <?php if(empty($v['user_photo'])) { ?>

                <div class="pixbox">



			      <a  href="#" id="<?php echo $v['user_id'];?>" class="show-panel">

				<img class="img-responsive full_img" src="uploads/demo.png"/>

			</a>

				<!-- <div class="textbg">

				  <span>Neelam</span><br><samp>23 . Delhi . IND</samp>

				</div> -->

				</div>

                <?php } else {  ?>

                 <div class="pixbox">



			      <a  href="#" id="<?php echo $v['user_id'];?>" class="show-panel">

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

		</div>

    </div>

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

