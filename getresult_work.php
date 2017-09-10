<?php
session_start();
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();


include('getwork.php');
$zodiac_signs = implode(' AND ',$zodiac);
///print_r($_REQUEST);

$country = @$_REQUEST['country'];
$state = @$_REQUEST['state'];
$city = @$_REQUEST['city'];
$zip = @$_REQUEST['zip'];
$job_title = @$_REQUEST['job_title'];

if(!empty($country)) {		

		$WHERE[] = "user_job.country = '".$country."'";
}

if(!empty($state)) {		
		$WHERE[] = "user_job.state = '".$state."'";
}

if(!empty($city)) {		
		$WHERE[] = "user_job.city = '".$city."'";
}
if(!empty($job_title)) {		
		$WHERE[] = "user_job.job_title LIKE '".$job_title."%'";
}

 if(!empty($WHERE)) {
    $w = implode(' AND ',$WHERE);
   	$w = ' AND '.$w;
   	//@$group = " GROUP BY user_id";
  }

$queryCondition = "";



$perPage = new PerPage();

$orderby = " ORDER BY user_id asc";

if($_REQUEST['job_title'] !="" or $_REQUEST['country'] !="" or $_REQUEST['state'] !="" or $_REQUEST['city'] !="" or $_REQUEST['zip'] !="")
{
		$sql = "SELECT * FROM user INNER JOIN user_job ON user.user_id=user_job.user_id WHERE $zodiac_signs "  . @$w . " and user.user_id !='".$_SESSION['user_id']."'  ORDER BY user_job.job_id desc";
		$paginationlink = "getresult_work.php?page=";
		$page = 1;
		if(!empty($_GET["page"])) {
		$page = $_GET["page"];
		}

		$start = ($page-1)*$perPage->perpage;
		if($start < 0) $start = 0;
		$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
		//echo $query;
		$result_filter = $db_handle->runQuery($query);
}
else
{
	$sql = "SELECT * FROM user INNER JOIN user_job ON user.user_id=user_job.user_id WHERE $zodiac_signs "  . @$w . "  user.user_id !='".$_SESSION['user_id']."' group by user_job.user_id ORDER BY user_job.job_id desc";
	$paginationlink = "getresult_work.php?page=";
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;
	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	//echo $query;
	$result = $db_handle->runQuery($query);
}



if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

$perpageresult = $perPage->perpage($_GET["rowcount"], $paginationlink);
?>
<form name="frmSearch" method="post" action="work.php">
<input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" />
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			  <div class="sub_heading">
			    <samp>"Work, business, job, employment, profession, contract, trade, labour, service"</samp>
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
				
				</div>
                <?php } else {  ?>
                 <div class="pixbox">

			      <a  href="#" id="<?php echo $v['user_id'];?>" class="show-panel">
				<img class="img-responsive  full_img" src="uploads/<?php echo $user_pic[0]; ?>"/>
			</a>
			
				</div>
                <?php } ?>
				<?php
				}} 
				else if(!empty($result_filter )) {
				foreach($result_filter  as $k=>$v) {
					$user_pic=explode(',', $v['user_photo']);
				?>
				<?php if(empty($v['user_photo'])) { ?>
                <div class="pixbox">

			      <a  href="#" id="<?php echo $v['job_id'];?>" class="show-panel">
				<img class="img-responsive full_img" src="uploads/demo.png"/>
			</a>
				
				</div>
                <?php } else {  ?>
                 <div class="pixbox">

			      <a  href="#" id="<?php echo $v['job_id'];?>" class="show-panel2">
				<img class="img-responsive full_img" src="uploads/<?php echo $user_pic[0]; ?>"/>
			</a>
			
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
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
     $('ul.tabs li').removeClass('isactive');
    $('.tab-content').removeClass('current');
    

    $(this).addClass('current');
    $(this).addClass('isactive');
    $("#"+tab_id).addClass('current');
   
  })

   $(document).on('click', function(event) {
      if (!$(event.target).closest('#tab-container').length) {
        $('.tab-content').removeClass('current');
      }
    });

})
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("a.show-panel").click(function(){
  	var user_id= $(this).attr('id')
  	var dataString = {'user_id':user_id} ;
  	$.ajax({

    url: 'getworkbox.php',

    type: "POST",

    data:  dataString,

    success: function(data){ 
    	         $("#lightbox, #lightbox-panel").html(data).fadeIn(300);
    	         $("body").css("overflow", "hidden");
                 //$("#lightbox, #lightbox-panel").fadeIn(300);

    }
    
  });
   
  })
  $("a.show-panel2").click(function(){
  	var filter = "filter";
  	var job_id= $(this).attr('id')
  	var dataString = {'job_id':job_id,'filter':filter} ;
  	$.ajax({

    url: 'getworkbox.php',

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




