<?php 

session_start();

require_once("dbcontroller.php");

require_once("pagination.class.php");

$db_handle = new DBController();

//print_r($_POST);

if($_POST['type']=='receive') 

{

   $updatequery = mysql_query("UPDATE message SET unread = '1'  WHERE message_to = '".$_SESSION['user_id']."' and message.message_from ='".$_POST['user_id']."'");

   $query = "SELECT * FROM user INNER JOIN message ON user.user_id=message.message_from WHERE message.message_to ='".$_SESSION['user_id']."' and message.message_from ='".$_POST['user_id']."'";

}

if($_POST['type']=='send')

{

    $updatequery = mysql_query("UPDATE message SET senderunread = '1'  WHERE message_from = '".$_SESSION['user_id']."' and message.message_to ='".$_POST['user_id']."'");

    $query = "SELECT * FROM user INNER JOIN message ON user.user_id=message.message_to WHERE message.message_from ='".$_SESSION['user_id']."' and message.message_to ='".$_POST['user_id']."'";

}



//echo $query;



$result = $db_handle->runQuery($query);



?>

<div id="login-box" class="login-popup">



  

   

   <div class="location_bg">

    <?php 

    $sql = mysql_query("SELECT * FROM `block_user` where block_user_from = '".$_SESSION['user_id']."' and blocked_user_to='".$_POST['user_id']."'");

    $numrows = mysql_num_rows($sql);



    $sql = mysql_query("SELECT * FROM `block_user` where blocked_user_to= '".$_SESSION['user_id']."' and block_user_from='".$_POST['user_id']."'");

    $checknumrows = mysql_num_rows($sql);    

    if($numrows) {

    ?>

    <span><a href="#" id="unblock" value="unblock">Unblock</a></span>

     <span><a href="#" id="block" value="block" style="display:none;">Block</a></span>

    <?php } 

    else if($checknumrows)

    {

             echo '<span class="alert-danger">You Are Blocked</span>';

    }

    else { ?>

     <span><a href="#" id="block" value="block">Block</a></span>

     <span><a href="#" id="unblock" value="unblock" style="display:none;">Unblock</a></span>

    <?php } ?>

    

    <a href="#" class="close" id="close-panel">&times;</a>

    <?php if($result[0]['hide_profile']==0) { ?>

   <div>



   <div class="Capricorn"><span><?php echo $result[0]['zodiac_signs'];?></span>

      <samp><?php if(!empty($result[0]['user_city'])) echo $result[0]['user_city'].',';?> <?php  if(!empty($result[0]['user_state'])) echo $result[0]['user_state'].',';?> <?php if(!empty($result[0]['user_country'])) echo $result[0]['user_country'].',';?></samp>

    </div>

     <div class="pixbg">

    <?php
     $array = explode(',',$result[0]['user_photo']);

     if($array[0]=="")

     {
      ?>

          

                <div class="pixbox1">

                <img class="img-responsive popbox_image" src="uploads/demo.png">



              </div>

     <?php 

      }
      else
      {


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

</div>

<?php } else { ?>

<div style="height:300px;">Sorry No content Available by user</div>

<?php } ?>

 <h4 class="type_message">Type Message<!--  OR Record Message --></h4>

<div>

 <div class="col-sm-12" style="margin-bottom:2%;">

   <div id="message_box"></div>

   <?php if($_POST['type']=='send') { ?>

    <div id="message_area" class="scroll" style="overflow:auto">

        <?php 

   foreach($result as $k=>$v) { 
   $date = date('j M   g:i a', strtotime($v['send_date']));
   if($v['hide_send_message']==0)
   {
   ?>
    
     <div class='showbox'>
      <span class="message_box_text"><?php echo $v['message'];?></span>
      <span class="send_date"><?php echo $date;?><a href='#' id='deletemessage' value='<?php echo $v['id'];?>'>
      <i class='fa fa-trash-o' aria-hidden='true'></i></a></span>
    </div>

   <?php } } ?>

</div>

<?php } else { ?>

<div id="message_area" class="scroll" style="overflow:auto">

        <?php 

   foreach($result as $k=>$v) { 
      if($v['hide_message']==0) {
        $date = date('j M   g:i a', strtotime($v['send_date']))
   ?>

     <div class='showbox'>
      <span class="message_box_text"><?php echo $v['message'];?></span>
      <span class="send_date"><?php echo $date;?><a href='#' id='deletemessage' value='<?php echo $v['id'];?>'>
      <i class='fa fa-trash-o' aria-hidden='true'></i></a></span>
    </div>

   <?php } } ?>

</div>

<?php } ?>



</div>

<form id="send_message" action="" method="post" enctype="multipart/form-data">

<div class="col-sm-8">

<input class="form-control" type="text" placeholder="Type Message ......." id="content" required></div>

<div class="col-sm-3" style="margin-bottom:2%;">

<input type="hidden" id="to_user" name="to_user" value="<?php echo @$_POST['user_id']?>" > 

<button type="submit" class="sent_btn">Reply </button>

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



<script type="text/javascript">

    $("a#close-panel").click(function(){

    $("#lightbox, #lightbox-panel").fadeOut(300);

      $("#lightbox").html("result reloaded successfully");

      $("body").removeAttr("style");

      $("#global").html();

  });

</script>



<script type="text/javascript">

$(document).ready(function(){

    $("#message_area").animate({ scrollTop: $(document).height() }, "slow");

  })

</script>



<script type="text/javascript">

$('a#deletemessage').on('click', function(){

    $(this).parent().parent().remove();

});

</script>

<script type="text/javascript">

$(document).ready(function(){

  $("a#deletemessage").click(function(){

    var message_id= $(this).attr('value');

    var dataString = {'message_id':message_id} ;

    $("#showbox").html();

    $.ajax({



    url: 'hidemessage.php',



    type: "POST",



    data:  dataString,



    success: function(data){ 

           $('#message_area').html();



               

    



    }

    

  });

   

  })

 

});

</script>



<script type="text/javascript">

  $("#block").on('click',(function() {

    $('#block').hide();

    $('#unblock').show();

    

    var to_user=$("input[name=to_user]").val();

    $("input[type=hidden][name=to_user]").val(to_user);

    var block= $(this).attr('value');

    var dataString = {'block':block,'to_user':to_user};

    



    $.ajax({



        url: 'blockuser.php',



        type: "POST",



        data:  dataString,



        success: function(data){ 



                  

        }







  });

}));



</script>

<script type="text/javascript">

  $("#unblock").on('click',(function() {

    $('#block').show();

    $('#unblock').hide();

    

    var to_user=$("input[name=to_user]").val();

    $("input[type=hidden][name=to_user]").val(to_user);

    var block= $(this).attr('value');

    var dataString = {'block':block,'to_user':to_user};

    

    $.ajax({



    url: 'blockuser.php',



    type: "POST",



    data:  dataString,



    success: function(data){ 

                 

    }









  });

}));



</script>



