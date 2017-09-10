<?php include('header.php');?>
<?php 
require_once("dbcontroller.php");

$db_handle = new DBController();

$query ="SELECT * FROM countries";

$results = $db_handle->runQuery($query);
?>
<section class="middle1">
    <div class="container-fluid matter">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <span>Introduce me to Work</span>
  </div>
  </div> 
  </div>
  </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="location2_bg">

        <form class="form-horizontal" role="form">

         <div class="form-group">
            <label class="control-label col-sm-2" for="email">Job Title/Keyword Search</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="job_title" id="job_title">
            </div>
        </div>
       <div class="form-group">
        <label class="control-label col-sm-2" for="email">Location</label>
        <div class="col-sm-10">
                
       <div class="form-group">
      <div class="col-sm-3">
              <select name="country" id="country-list" class="form-control">

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

         <div class="col-sm-3">
         <select name="state" id="state-list" class="form-control">

            <option value="">Select State</option>

          </select>
             
      </div>

       <div class="col-sm-2">
            <select name="cities" id="city-list" class="form-control">

            <option value="">Select City</option>

          </select>
      </div>


       <div class="col-sm-2">
            <input type="text" class="form-control" name="zip" id="zip" placeholder="Type zip">
        </div>
        </div>
        </div>
    </div>
    <div class="form-group">
            <div class="col-sm-12">
              <button type="button" class="btn btn-danger save_profile" id="search" style="margin:0 !important">Save Search</button>
            </div>
    </div>
    

  </form>
      </div>

</div>
</div>
</div>
<div id="loading" ></div>
<div id="toys-grid"></div>
<div id="lightbox"></div>
</section>
<?php include 'footer.php';?>

<script>
  
  function getresult(url) {    
    var country = $("#country-list").val();
    var state = $("#state-list").val();
    var city = $("#city-list").val();
    var rowcount = $("#rowcount").val();
    var zip = $("#zip").val();
    var job_title = $("#job_title").val();
    var dataString = {'rowcount' :rowcount,'country':country,'state':state,'city':city,'zip':zip,'job_title':job_title};
      
   

  $.ajax({
    url: url,
    type: "POST",
    data:  dataString,
    success: function(data)
    { 
      $("#toys-grid").html(data); 
      

    }
     });
  }
  getresult("getresult_work.php");
  </script>
  
 
  <script>
  $(document).ready(function(){
      $("#search").click(function(){
          
        getresult("getresult_work.php");
        $('html, body').animate({
        scrollTop: $("#loading").offset().top}, 500);
        $('.tab-content').removeClass('current');
      });
       $("#reset").click(function(){
           location.reload();

       });

  });
</script>