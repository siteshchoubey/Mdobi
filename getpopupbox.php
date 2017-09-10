<?php 

require_once("dbcontroller.php");

require_once("pagination.class.php");

$db_handle = new DBController();

$query = "SELECT * FROM user WHERE user_id='".$_POST['user_id']."'";

$result = $db_handle->runQuery($query);

?>

<div id="login-box" class="login-popup">



  

   

   <div class="location_bg">

    <a href="#" class="close" id="close-panel">&times;</a>

    <div class="Capricorn"><span><?php echo $result[0]['zodiac_signs'];?></span>

      <samp><?php if(!empty($result[0]['user_city'])) echo $result[0]['user_city'].',';?> <?php  if(!empty($result[0]['user_state'])) echo $result[0]['user_state'].',';?> <?php if(!empty($result[0]['user_country'])) echo $result[0]['user_country'].',';?></samp>

    </div>

     <div class="pixbg">

    <?php

     $array = explode(',',$result[0]['user_photo']);


                if($result[0]['user_photo']=="")
                {
                  ?>
                   <div class="pixbox1">

                <img class="img-responsive popbox_image" src="uploads/demo.png">



              </div>
               <?php  }  
               else { 

                for($i=0;$i<count($array);$i++)

                { 

    ?>



             
                
                <div class="pixbox1">

                <img class="img-responsive popbox_image" src="uploads/<?php echo $array[$i];?>">



              </div>

                

    <?php } } ?>



</div> 



<div class="lifestyle_bg">



<div class="lifestyle"><?php echo $result[0]['ethnicity'];?> <?php echo $result[0]['sexuality'];?></div>

<div class="lifestyle"><?php echo $result[0]['religion'];?> <?php echo $result[0]['age'];?></div>

<div class="lifestyle"><?php echo $result[0]['marital_status'];?> <?php echo $result[0]['height'];?></div>

<div class="lifestyle"><?php echo $result[0]['children'];?> <?php echo $result[0]['weight'];?></div>

<div class="lifestyle"><?php echo $result[0]['employment'];?> <?php echo $result[0]['vices'];?></div>









    </div>



<?php 

//}

?>



 <h4 class="type_message">Message<!--  OR Record Message --></h4>

<div>

 <div class="col-sm-12" style="margin-bottom:2%;">

   <div id="message_box"></div>

    <!-- <div id="message_area" class="scroll" style="overflow:auto">

</div> -->

</div>

<form id="send_message" action="" method="post" enctype="multipart/form-data">

<div class="col-sm-8">

<input class="form-control" type="text" placeholder="Type Message ......." id="content" required></div>

<div class="col-sm-3" style="margin-bottom:2%;">

<input type="hidden" id="to_user" name="to_user" value="<?php echo @$_POST['user_id']?>" > 

<button type="submit" class="sent_btn">Send </button>

</div>

</div>

</div>

</form>





<script type="text/javascript">

    $("a#close-panel").click(function(){

    $("#lightbox, #lightbox-panel").fadeOut(300);

      $("#lightbox").html("result reloaded successfully");

      $("body").removeAttr("style");

  });

</script>



<script type="text/javascript">

  $("#send_message").on('submit',(function(event) {

    event.preventDefault();

    var loaded = false;

    var to_user=$("input[name=to_user]").val();

    $("input[type=hidden][name=to_user]").val(to_user);

    var textcontent = $("#content").val();

    var dataString = {'textcontent':textcontent,'to_user':to_user};

    $("#message_box").html('');







    $.ajax({



    url: 'getmessage.php',



    type: "POST",



    data:  dataString,



    success: function(data){ 



                $("#message_box").html(data);





                 $("#content").val('');

                 setTimeout(function () { $("#message_box").html('');

 }, 2000);

    }



    });







  }));



</script>



