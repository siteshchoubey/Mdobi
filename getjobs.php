<?php
session_start();
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();
$orderby = " ORDER BY user_id asc";


$sql = "select * from user_job WHERE user_id='".$_REQUEST['user_id']."'";
$paginationlink = "getjobs.php?page=";
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;
$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
echo $query;
$result = $db_handle->runQuery($query);
if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

$perpageresult = $perPage->perpage($_GET["rowcount"], $paginationlink);
?>
<form name="frmSearch" method="post" action="jobs.php">
<input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" />
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sub_heading">
          <samp>My Business</samp>
        </div>
          <?php
        if(!empty($result)) {
        foreach($result as $k=>$v) {
          ?>
        <section>
<div class="container">
  <div class="row"  id="row">
    <div class="col-lg-8" id="col-lg-10">
       <div id="success" style="color:#34495e;"></div>
      <div class="location2_bg" >
        <form role="form" class="contact-form form-horizontal" id="contact-form" method="post" enctype="multipart/form-data">
         <input type="hidden" name="job_id" id="job_id" value="<?php echo $row['job_id'];?>"/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employer</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="emp" id="emp" placeholder="Type here" value="<?php echo $v['employer']?>" readonly> 
    
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Title</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo $v['job_title']?>" placeholder="Type here" readonly>           
       
      </div>
    </div>
 

       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Location</label>
      <div class="col-sm-2"><?php echo $v['country'];?>
         
         
      </div>

         <div class="col-sm-2">
         <?php echo $v['state'];?>
      </div>

       <div class="col-sm-2">
       <?php echo $v['city'];?>
      </div>


       <div class="col-sm-2">
      <?php echo $v['zip'];?>
         
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Description</label>
      <div class="col-sm-10">          
          <textarea class="form-control" rows="5" id="comment" name="des" placeholder="Type here, along with your job description please include days, hours,pay,rate,etc"
           value="test" readonly><?php echo $v['job_desc'];?></textarea>
           
      </div>
    </div>
  
      </div>
    </div>
    <div class="col-lg-4"> 
        <div class="row" style="margin: 30px 0px;">
          <div class="col-lg-6">
              <div class="upload_pic">
                <img class="img-responsive job_image"  src="uploads/<?php echo $v['image'];?>">

             </div>
          </div>
          <div class="col-lg-6">
          <div class="upload">
              <div class="filejob btn btn-primary">
              <span>Upload Resume</span>
              <input type="file" class="upload" name="resume" id="my-file-selector" required />
          </div>
               <a href="">
              <input type="submit" class="btn btn-danger submit update" value="Apply"  id="<?php echo $v['job_id'];?>" style="margin-top:50%;"></a>
          </div>
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            
          </div>
        </div>
        <div class="uplaod_bg">
               
          
          <div class="upload">

          </div> 
         

             
               

              </div>
      </div>
    </form>

      
  </div>
</div>
<!-- end -->
</div>
</section>
<?php } } ?>
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
    $("form#contact-form").submit(function(event){
  event.preventDefault();
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'send_resume.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      $('#success').html(returndata);
      setTimeout(function() {
        $("#success").html('');
      },5000);
       setTimeout(function(){
                       window.location.reload(1);
      }, 5000);


    }
  });
 
  return false;
});

  </script>


