 <!-- header section -->
 
<?php require_once('header.php'); ?>

<?php require_once('config.php'); ?>
<?php 
require_once("dbcontroller.php");

$db_handle = new DBController();

$query ="SELECT * FROM countries";

$results = $db_handle->runQuery($query);

?>
 <section>
<div class="container">
    <div class="advertisement"> <span>My All Business</span></div>
    <div id="msg"></div>
    </div>

<?php 
  $sql1=mysql_query("select * from user_job WHERE job_id='".$_GET['id']."'");
  $row=mysql_fetch_assoc($sql1);
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
        <input type="text" class="form-control" name="emp" id="emp" placeholder="Type here" value="<?php echo $row['employer']?>" required> 
    
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Title</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo $row['job_title']?>" placeholder="Type here" required>           
       
      </div>
    </div>
 

       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Location</label>
      <div class="col-sm-3">
          <select name="country" id="country-list" class="form-control">

          <option value="">Select Country</option>

                <?php

                 foreach($results as $country) {
                  echo '<option value="'.$country["name"].'"  id="'.$country["id"].'"'; 

          if($country["name"]===$row['country'])
            {
                echo ' selected';
            }
            echo '>'. $country["name"] . '</option>'."\n";
            }

                ?>

          </select>
         
      </div>

         <div class="col-sm-3">
          <select name="state" id="state-list" class="form-control">

            <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>

          </select>
          
             
      </div>

       <div class="col-sm-2">
       <select name="cities" id="city-list" class="form-control">
             <option value="<?php echo $row['city'];?>"><?php echo $row['city'];?></option>
         </select>
          
      </div>


       <div class="col-sm-2">
        <input type="text" class="form-control" name="zip" id="zip" 
        value="<?php echo $row['zip'];?>" placeholder="Type zip">
         
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Description</label>
      <div class="col-sm-10">          
          <textarea class="form-control" rows="5" id="comment" name="des" placeholder="Type here, along with your job description please include days, hours,pay,rate,etc"
           value="test" required><?php echo $row['job_desc'];?></textarea>
           
      </div>
    </div>
  
      </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-sm-3"> 
        <div class="row" style="margin: 30px 0px;">
          <div class="col-lg-6">
              <div class="upload_pic3"  style="margin-bottom:15px;">
                <?php 
                if($row['image']=="") { ?>
                <img class="img-responsive job_image"  src="uploads/demo.png">
                <?php } else { ?>
                <img class="img-responsive job_image"  src="uploads/<?php echo $row['image'];?>">
                <?php } ?>
             </div>
             <div class="col-lg-12 col-xs-12">
             <div style="position:relative;">



            <a class='btn btn-primary' href='javascript:;'>



             choose image



             <input type="file" id="upload" name="upload" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info2").html($(this).val());'>



            </a>



            &nbsp;



            <span class='label label-info' id="upload-file-info2"></span>



           </div>     
           </div>    
          </div>
          <div class="col-lg-6 col-xs-12">
          <div class="upload">
               <a href="">
              <input type="submit" class="btn btn-danger submit update2" value="Update job"  id="<?php echo $row['job_id'];?>"></a>
          </div>
           
          </div>
        </div>
      
    </form>

      
  </div>
</div>
<!-- end -->
</div>
</section>
<!-- footer section -->
<?php require_once('footer.php'); ?>
<script>
$("#country-list").on('change', function () {

  var id =  $(this).find('option:selected').attr('id');

    $.ajax({

  type: "POST",

  url: "get_state.php",

  data:'country_id='+id,

  success: function(data){

    $("#state-list").html(data);

  }

  });

    

});





$("#state-list").on('change', function () {

  var id =  $(this).find('option:selected').attr('id');

    $.ajax({

  type: "POST",

  url: "get_city.php",

  data:'state_id='+id,

  success: function(data){

    $("#city-list").html(data);

  }

  });

    

});


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
                  window.location.href = "total-job-post.php";
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
      $('#msg').html(returndata);
                  setTimeout(function() {
                    $("#msg").html('');
                  },5000);
                   setTimeout(function(){
                                   window.location.reload(1);
                  }, 5000);


    }
  });
 
  return false;
});

  </script>
 

