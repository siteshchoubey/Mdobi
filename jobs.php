<?php require_once('header.php'); ?>
<?php require_once('config.php'); ?>
<?php 
require_once("dbcontroller.php");

$db_handle = new DBController();
?>
 <section>
<div class="container">
    <div class="advertisement"> <span>My Business</span></div>
    </div>
<div id="msg"></div>
<?php 
  $sql1=mysql_query("select * from user_job WHERE user_id='".$_GET['user_id']."'");
  while($row=mysql_fetch_assoc($sql1)){
?>
<section>
<div class="container">
  <div class="row"  id="row">
    <div class="col-lg-8" id="col-lg-10">
       <div id="success" style="color:#34495e;"></div>
      <div class="location2_bg" >
        <form role="form" class="contact-form form-horizontal" id="contact-form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="user_email" id="user_email" value="<?php echo $row['email'];?>"/>
         <input type="hidden" name="job_id" id="job_id" value="<?php echo $row['job_id'];?>"/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employer</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="emp" id="emp" placeholder="Type here" value="<?php echo $row['employer']?>" readonly> 
    
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Title</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo $row['job_title']?>" placeholder="Type here" readonly>           
       
      </div>
    </div>
 

       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Location</label>
      <div class="col-sm-2"><?php echo $row['country'];?>
         
         
      </div>

         <div class="col-sm-2">
         <?php echo $row['state'];?>
      </div>

       <div class="col-sm-2">
       <?php echo $row['city'];?>
      </div>


       <div class="col-sm-2">
      <?php echo $row['zip'];?>
         
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Description</label>
      <div class="col-sm-10">          
          <textarea class="form-control" rows="5" id="comment" name="des" placeholder="Type here, along with your job description please include days, hours,pay,rate,etc"
           value="test" readonly><?php echo $row['job_desc'];?></textarea>
           
      </div>
    </div>
  
      </div>
    </div>
    <div class="col-lg-4"> 
        <div class="row" style="margin: 30px 0px;">
          <div class="col-lg-6">
              <div class="upload_pic">
                <img class="img-responsive job_image"  src="uploads/<?php echo $row['image'];?>">

             </div>
          </div>
          <div class="col-lg-6">
          <div class="upload">
              <div class="filejob btn btn-primary">
              <span>Upload Resume</span>
              <input type="file" class="upload" name="resume" id="my-file-selector" required />
          </div>
               <a href="">
              <input type="submit" class="btn btn-danger submit update" value="Apply"  id="<?php echo $row['job_id'];?>" style="margin-top:50%;"></a>
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
<?php }?>
<!-- footer section -->
<?php require_once('footer.php'); ?>
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
 

