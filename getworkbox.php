<?php 
session_start();
include 'config.php';
if($_POST['filter'] == "filter")
{
  $query = mysql_query("SELECT * FROM user_job WHERE job_id='".$_POST['job_id']."'");
}
else
{
    $query = mysql_query("SELECT * FROM user_job WHERE user_id='".$_POST['user_id']."' order by job_id desc");
}
$result = mysql_fetch_array($query);
?>
<div id="login-box" class="login-popup" style="margin-top: 10%;">

  
   
   <div class="location_bg">
<a href="#" class="close" id="close-panel">&times;</a>
 <div id="message"></div>
 
      <div class="uplaod_bg">
    <div class="upload"></div>
      <div class="upload_pic2"> 
        <?php if($result['image']=="") { ?>
        <img class="img-responsive popbox_image2" src="uploads/demo.png"/>
        <?php } else { ?>
        <img class="img-responsive popbox_image2" src="uploads/<?php echo $result['image'];?>"/>
        <?php } ?>
        </div>
    </div>
<form method="post" class="signin" id="uploadresume">

<fieldset>
          <div class="form-group">
      <label class="control-label col-sm-4 col-xs-12" for="email">Employer</label>
      <div class="col-sm-8 col-xs-12" style="margin-bottom: 15px !important;">
      <?php echo $result['employer'];?>
      
      </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-4 col-xs-12" for="pwd">Job Title</label>
      <div class="col-sm-8 col-xs-12" style="margin-bottom: 15px !important;">          
        <?php echo $result['job_title'];?>
      </div>
    </div>
 

       <div class="form-group">
      <label class="control-label col-sm-4" for="email">Location</label>
      <div class="col-sm-8" style="margin-bottom: 15px !important;">
         <?php echo $result['city'];?>,<?php echo $result['state'];?> , <?php echo $result['country'];?> 
      </div>
      
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4 col-xs-12" for="pwd">Job Description</label>
      <div class="col-sm-8 col-xs-12" style="margin-bottom: 15px !important;">          
          <textarea class="form-control" rows="5" id="comment" readonly><?php echo $result['job_desc'];?></textarea>
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-4 col-xs-12" for="pwd">Apply </label>
      <div class="col-sm-4 col-xs-12">          
           <div class="filejob btn btn-primary" style="margin:0!important;">
              <span>upload resume</span>
              <input type="file" class="upload" name="resume" id="my-file-selector" required />
          </div>
      </div>
      <div class="col-sm-4">  
        <div class="">
          <button type="submit" name="submit" id="submit" class="btn btn-danger uploadresume">Send Resume</button>
        </div> 
      </div>

    </div>
  <?php if($_POST['filter'] != "filter") {  ?>
  <div class="form-group">
      <div class="col-sm-12">          
           <div>
                <a href="jobs.php?user_id=<?php echo $_POST['user_id'];?>">view more jobs</a>
          </div>
      </div>
    </div>
  <?php } ?>
    </fieldset>
    <input type="hidden" name="user_email" id="user_email" value="<?php echo $result['email'];?>"/>
   </form>
    </div>
    </div>
  </div>
<script type="text/javascript">
    $("a#close-panel").click(function(){
    $("#lightbox, #lightbox-panel").fadeOut(300);
      $("#lightbox").html("result reloaded successfully");
      $("body").removeAttr("style");
  });
</script>

<script type="text/javascript">
  $("#uploadresume").on('submit',(function(event) {
    event.preventDefault();
      $.ajax({
              url: "send_resume.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              contentType: false,       // The content type used when sending data to the server.
              cache: false,             // To unable request pages to be cached
              processData:false,        // To send DOMDocument or non processed data file it is set to false
              success: function(data)   // A function to be called if request succeeds
              {
                    $("#message").html(data); 
                    
              }
        });
  }));

</script>

