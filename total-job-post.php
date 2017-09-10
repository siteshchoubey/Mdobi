 <!-- header section -->
 
<?php require_once('header.php'); ?>

<?php require_once('config.php'); ?>
<?php 
require_once("dbcontroller.php");

$db_handle = new DBController();

$query ="SELECT * FROM countries";

$results = $db_handle->runQuery($query);

?>
 <section style="min-height: 451px;">
  <div class="container-fluid matter">
      <div class="container">
        <div class="row">
           <div class="col-lg-12">
              <div class="advertisement"> <span>My All Business</span></div>
                 <div id="msg"></div>
              </div>
            </div>
          </div>
  </div>

<?php 
  $sql1=mysql_query("select * from user_job WHERE user_id='".$_SESSION['user_id']."'");

  if(mysql_num_rows($sql1) == 0)
  {
        echo  '<div class="alert alert-success"><strong>Sorry </strong> No job post Found</div>';
  }
  else
  {
  while($row=mysql_fetch_assoc($sql1)){
?>

  

  
<!-- This section is job advertisement -->

  <section>
<div class="container">
     <!--<div class="advertisement"> <span>My Job Advertisement </span><samp>(Will not show my profile information)</samp></div>-->
 


  <div class="row"  id="row">
    <div class="col-lg-8 col-xs-12 col-sm-9" id="col-lg-10">
       <div id="success" style="color:#34495e;"></div>
      <div class="location2_bg" >
     
    
       <!--  <form class="form-horizontal" role="form"  name="frm_details" id="frm_details" method="post" enctype="multipart/form-data"> -->

        <form role="form" class="contact-form form-horizontal" id="contact-form" method="post" enctype="multipart/form-data">
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
      <div class="col-sm-5">
           <input type="text" class="form-control" name="country" id="country-list" 
        value="<?php echo $row['country'];?>" readonly>
      </div>

         <div class="col-sm-5">
          <input type="text" class="form-control" name="state" id="state-list" 
        value="<?php echo $row['state'];?>" readonly>
         
      </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="email"></label>
       <div class="col-sm-5">
         <input type="text" class="form-control" name="cities" id="cities" 
        value="<?php echo $row['city'];?>" readonly>
      
      </div>


       <div class="col-sm-5">
        <input type="text" class="form-control" name="zip" id="zip" 
        value="<?php echo $row['zip'];?>" placeholder="Type zip" readonly>
         
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Description</label>
      <div class="col-sm-10">          
          <textarea class="form-control" rows="5" id="comment" name="des" readonly><?php echo $row['job_desc'];?></textarea>
           
      </div>
    </div>
  
      </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-sm-3"> 
        <div class="row" style="margin: 30px 0px;">
          <div class="col-lg-6 col-xs-12 col-sm-12">
              <?php if($row['image']=="") { ?>
              <div class="upload_pic3">
                <img class="img-responsive job_image"  src="uploads/demo.png">

             </div>
             <?php } else { ?>
              <div class="upload_pic3">
                <img class="img-responsive job_image"  src="uploads/<?php echo $row['image'];?>">

             </div>
             <?php } ?>
          </div>
          <div class="col-lg-6 col-xs-12">
               <div class="upload">
                <button type="button" class="btn btn-danger job" id="<?php echo $row['job_id'];?>">Delete Job</button>
              
          </div>
          <div class="upload">
               <a href="edit_job_post.php?id=<?php echo $row['job_id'];?>" class="btn btn-danger submit update">Edit Job</a>
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
<!-- footer section -->
<?php require_once('footer.php'); ?>

</script>
<script type="text/javascript">
  $('.job').click(function(){
  var id_post = $(this).attr('id');
  if (confirm("Are you sure you wish to delete this Record?")) {
       $.ajax({
              url: "delete_job.php",
              type: "POST",
              data: {
                  'post_id': id_post
              },
              success:function(result){
                  $('#msg').html(result);
                  setTimeout(function() {
                    $("#msg").html('');
                  },5000);
                   setTimeout(function(){
                                   window.location.reload(1);
                  }, 5000);
              }
        });
    }
    return false;
 
});
</script>
<!-- for update job -->
<script type="text/javascript">
    $("form#contact-form").submit(function(event){

     
  
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'job-update.php',
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
 

