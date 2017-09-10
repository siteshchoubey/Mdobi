<?php include ('header.php'); ?>
<?php 
$sql=mysql_query("select * from user WHERE user_id='".$_SESSION['user_id']."'");
$row = mysql_fetch_array($sql) ;
$vicesexp = explode(',',$row['vices']);
$seekingexp = explode(',',$row['seeking']);

?>
<section class="middle">
  <div class="container-fluid matter">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <span>My Profile</span>
  </div>
  </div> 
   <div class="col-lg-12">
  <div class="sub_heading" style="background : #fff; padding : 12px;">
    <span style="color:#252424;"><?php echo $row['zodiac_signs'];?></span>
  </div>
  </div> 
  </div>
  </div>
  </div>
  <form id="uploadimage" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
       <div class="col-lg-12">
               <div id="response_brought"></div>

              <div class="pixbg" id="profile_pic">
                <?php
                if($row['user_photo']==""){
                   $picbox = "style='display:none;'";
                }
                $array = explode(',',$row['user_photo']);

                print_r($array);
                
                for($i=0;$i<count($array);$i++)
                {
                ?> 
                
                <div class="profile_pixbox" <?php echo @$picbox;?>>
                   <button type="button" class="pic_close" id="detele_image" value="<?php echo $array[$i];?>"><i class="fa fa-times" aria-hidden="true"></i></button>
                <img class="img-responsive full_img" src="uploads/<?php echo $array[$i];?>">
              </div>
              <?php } ?>
              <?php if(count($array) < 4) {  ?>
             <div class="dummy_pixbox" style="overflow:hidden;">
                  <span class="custom-span">+</span>

                   <!-- <p class="custom-para">Add Image</p> -->
                 <div style="position:relative;">
                          <a class='btn btn-primary' href='javascript:;'>



             choose image



             <input type="file" id="file" name="file" style='height: 100%;position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info2").html($(this).val());'>



            </a>



            &nbsp;



            <span class='label label-info' id="upload-file-info2"></span>



           </div>          
             <br/>
                  <small style="color:#520101;font-size: 11px;">(Image size must be more than 20 kb)</small>
              </div>
              <?php } ?>
                   <div class="buton_bg">
                <button type="button" class="btn  save" id="show-panel" value="<?php echo $row['user_id']?>">Delete Account</button>
                <?php if($row['hide_profile']==0) { ?>
                <button type="button" class="btn  save" id="update_profile_status" value="1">Hide Profile</button>
                <?php } else { ?>
                 <button type="button" class="btn  save" id="update_profile_status" value="0">Show Profile</button>
                 <?php } ?>
                <button type="submit" class="btn  save" id="update_profile_image">Save Image</button>
              </div>
             
                </div> 


       </div>
    </div>
  </div>
</form>
<form method="post" action="" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
           <div class="sub_heading" style="background : #fff; padding : 12px;">
            <span style="color:#252424;">Make your selections to complete profile</span>
          </div>
          <div id="tab-container">
          <ul class="tabs">
            <li class="tab-link" data-tab="tab-1">Ethnicity</li>
            <?php include 'include/ethnicity.php';?>
            <li class="tab-link" data-tab="tab-2">Religion</li>
            <?php include 'include/religion.php';?>
            <li class="tab-link" data-tab="tab-3">Marital Status</li>
            <?php include 'include/marital-status.php';?>
            <li class="tab-link" data-tab="tab-4">Children</li>
            <?php include 'include/children.php';?>
            <li class="tab-link" data-tab="tab-5">Employment</li>
            <?php include 'include/employment.php';?>
          </ul>
          <ul class="tabs">
            <li class="tab-link" data-tab="tab-6">Sexuality</li>
            <?php include 'include/sexuality.php';?>
            <li class="tab-link" data-tab="tab-7">Age</li>
            <?php include 'include/age.php';?>
            <li class="tab-link" data-tab="tab-8">Height</li>
            <?php include 'include/height.php';?>
            <li class="tab-link" data-tab="tab-9">Weight</li>
            <?php include 'include/weight.php';?>
            <li class="tab-link" data-tab="tab-10">Vices</li>
            <?php include 'include/vices.php';?>
         <ul class="tabs">
          <li class="tab-link" data-tab="tab-11">Country</li>
          <?php include 'include/country.php';?>
          <li class="tab-link" data-tab="tab-12">State/Province</li>
          <?php include 'include/state-province.php';?>
          <li class="tab-link" data-tab="tab-13">City/Town</li>
          <?php include 'include/city-town.php';?>
          <li class="tab-link" data-tab="tab-14">Zip/Postal Code</li>
          <?php include 'include/zippostalcode.php';?>
          <li class="tab-link" data-tab="tab-15">Seeking</a></li>
           <?php include 'include/seeking.php';?>
        </ul>
          <div class="col-lg-12">
          <button type="button" class="btn btn-danger save_profile" id="save_my_profile" onclick="edit_profile();">Save My Info</button>
          </div>
      </div>
        </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</form>

</section>
<?php
require_once("dbcontroller.php");

$db_handle = new DBController();

$query ="SELECT * FROM countries";

$results = $db_handle->runQuery($query);
?>
<section class="roooo">
<div class="container">
    <div class="advertisement"> <span>My Business - Post Job Ad </span> <span style="float:right;margin-right: 17%;"><a href="total-job-post.php">View Job Ads</a></span></div>
  

  <div class="row" style="margin-bottom:2%;">
    <div class="col-lg-10 col-xs-12 col-sm-9 col-md-10" id="col-lg-10">
       <div id="success" style="color:#34495e;"></div>
      <div class="bussiness_form" >
     
    
       <!--  <form class="form-horizontal" role="form"  name="frm_details" id="frm_details" method="post" enctype="multipart/form-data"> -->

  <form  class="contact-form form-horizontal" id="bussiness" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employer</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="emp" id="emp" placeholder="Type here" required> 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Title</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Type here" required>           
      </div>
    </div>


       <div class="form-group">
      <label class="control-label col-sm-2">Location</label>
      <div class="col-sm-2">
              <select name="country" id="countrylist" class="form-control">

          <option value="">Select Country</option>

                <?php

                foreach($results as $country) {

                ?>

                <option value="<?php echo $country["name"]; ?>" id="<?php echo $country["id"]; ?>"><?php echo $country["name"]; ?></option>

                <?php

                }

                ?>

          </select>
      </div>

         <div class="col-sm-2">
         <select name="state" id="statelist" class="form-control">

            <option value="">Select State</option>

          </select>
             
      </div>

       <div class="col-sm-2">
            <select name="cities" id="citylist" class="form-control">

            <option value="">Select City</option>

          </select>
      </div>


       <div class="col-sm-2">
        <input type="text" class="form-control" name="zip" id="zip" placeholder="Type zip">
           <!-- <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select> -->
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Job Description</label>
      <div class="col-sm-10">          
          <textarea class="form-control" rows="5" id="comment" name="des" placeholder="Type here, along with your job description please include days, hours,pay,rate,etc" required></textarea>
      </div>
    </div>
  
      </div>
    </div>
    <div class="col-lg-2 col-xs-12 col-sm-3 col-md-2">
           <div class="row" style="margin-bottom:2%;overflow:hidden;">
                <div class="col-xs-12" style="margin-top:10%;">
                   <div class="dummy_bussiness">
                      <span>Upload</span>
                       <p>Business<br>
                       Logo<br><br>
                      </p>
                     <div style="position:relative;">
                          <a class='btn btn-primary' href='javascript:;'>



             choose image



             <input type="file" id="upload" name="upload" style='height: 100%;position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info3").html($(this).val());'>



            </a>



            &nbsp;



            <span class='label label-info' id="upload-file-info3"></span>



           </div>          
                  </div> 
                </div>
                <div class="col-xs-12" style="margin-top:15%;">
                     <button type="submit" id="submit" class="btn  job" name="bdm_count_submit">Save Job Add</button>
                </div>
            </div>
    </div>
  </div>
    </form>

      
  </div>
</div>
</div>
</section>
<div id="lightbox"></div>
<?php include ('footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
  $("button#show-panel").click(function(){
    var user_id= $(this).attr('value')
    var dataString = {'user_id':user_id} ;
    $.ajax({

    url: 'delete_account.php',

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

 <script type="text/javascript">
    /*$("form#contact-form").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'job_data.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
       $("#success").html(returndata); 
           setTimeout(function() {
        $("#success").html('');
      },5000);
     $( '#contact-form' ).each(function(){
        this.reset();
    });
            
    }
  });
 
  return false;
});
*/
  </script>
  <script>

$(document).ready(function() {

$("#countrylist").on('change', function () {

  var id =  $(this).find('option:selected').attr('id');

    $.ajax({

  type: "POST",

  url: "get_state.php",

  data:'country_id='+id,

  success: function(data){

    $("#statelist").html(data);

  }

  });

    

});





$("#statelist").on('change', function () {

  var id =  $(this).find('option:selected').attr('id');

    $.ajax({

  type: "POST",

  url: "get_city.php",

  data:'state_id='+id,

  success: function(data){

    $("#citylist").html(data);

  }

  });

    

});







});

</script>