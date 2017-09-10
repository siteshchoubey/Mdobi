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
    <span><?php echo $row['zodiac_signs'];?></span>
  </div>
  </div> 
  </div>
  </div>
  </div>
  <form id="profile-setting" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
       <div class="col-lg-6 col-xs-12 col-md-12">
               <div id="response_brought"></div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $row['user_email']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" value="<?php echo $row['user_pass']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Confirm Password:</label>
                    <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Enter Confirm password" value="<?php echo $row['user_pass']; ?>">
                  </div>
                  <input type="submit" class="btn btn-default" id="submit" name="submit" value="Submit">
                </form>


                     </div>
                  </div>
                </div>
</section>

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