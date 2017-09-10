<?php
session_start();
include 'config.php';
require_once("dbcontroller.php");
require_once("send_pagination.php");
$db_handle = new DBController();



$perPage = new PerPage();

$orderby = " ORDER BY id desc";


//echo "SELECT p1.* FROM message p1 INNER JOIN (SELECT max(send_date) MaxPostDate, message_to FROM message GROUP BY message_to) p2 ON p1.message_to = p2.message_to AND p1.send_date = p2.MaxPostDate WHERE p1.message_from='".$_SESSION['user_id']."'  order by p1.send_date desc";
//$sql = "SELECT p1.* FROM message p1 INNER JOIN (SELECT max(send_date) MaxPostDate, message_to FROM message GROUP BY message_to) p2 ON p1.message_to = p2.message_to AND p1.send_date = p2.MaxPostDate WHERE p1.message_from='".$_SESSION['user_id']."'  order by p1.send_date desc";
$sql ="SELECT max(id) as id, message , message_from ,message_to ,send_date  ,unread ,user_pic ,hide_message,senderunread FROM message where message_from='".$_SESSION['user_id']."' GROUP by message_to ORDER by id DESC";
$paginationlink = "sendmail.php?page=";
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;
$query =  $sql  . " limit " . $start . "," . $perPage->perpage; 
//echo $query;
$result = $db_handle->runQuery($query);
if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

$perpageresult = $perPage->perpage($_GET["rowcount"], $paginationlink);
?>
<form name="frmSearch" method="post" action="mail.php">
<input type="hidden" id="rowcount" name="rowcount" value="<?php echo $_GET["rowcount"]; ?>" />
        <div class="mail_bg">
          <?php
              if(!empty($result)) {
              foreach($result as $k=>$v) {
                  $check_profile = mysql_query("select * from user where user_id ='".$v['message_to']."'");
                  $row = mysql_fetch_array($check_profile);
                  $profile = mysql_query("select * from message where message_to ='".$v['message_to']."' order by id desc");

                  $rows = mysql_fetch_array($profile);

                  $user_pic=explode(',', $row['user_photo']);

                  
              ?>

             
              <?php if($row['hide_profile']==1 or $user_pic[0]=="") { ?>
              <div class="mail_pic  <?php if($rows['senderunread']==1) { ?> seen <?php } ?>">
                 <a  href="#" id="<?php echo $v['message_to'];?>" class="show-panel" value="send">
              <img class="img-responsive mail_page" src="uploads/demo.png" class="respons"/></a>
              </div>
              <?php } else { ?>
              <div class="mail_pic  <?php if($rows['senderunread']==1) { ?> seen <?php } ?>">
                 <a  href="#" id="<?php echo $v['message_to'];?>" class="show-panel" value="send">
              <img class="img-responsive mail_page" src="uploads/<?php echo $user_pic[0];?>" class="respons"/></a>
              </div>
              <?php } ?>
            
              <!-- <div class="textbg">
                <span>Neelam</span><br><samp>23 . Delhi . IND</samp>
              </div> -->
              
              <?php
              }} 
              else{
                echo  '<div class="alert alert-success"><strong>Sorry </strong> No Mail Found</div>';
              }
              ?>
          
        </div>
        <?php if(isset($perpageresult)) { ?>
        <div style="text-align:center;margin-bottom: 5%;">
          <?php echo $perpageresult; ?>
        </div>
        <?php } ?>
            
</form> 
 <script>
    $(".perpage-link").click(function(){
      $('html, body').animate({
        scrollTop: $("#loading").offset().top}, 1000);
     

    });
</script>
<script type="text/javascript">
$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
     $('ul.tabs li').removeClass('isactive');
    $('.tab-content').removeClass('current');
    

    $(this).addClass('current');
    $(this).addClass('isactive');
    $("#"+tab_id).addClass('current');
   
  })

   $(document).on('click', function(event) {
      if (!$(event.target).closest('#tab-container').length) {
        $('.tab-content').removeClass('current');
      }
    });

})
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("a.show-panel").click(function(){
    var user_id= $(this).attr('id');
    var type = $(this).attr('value');
    var dataString = {'user_id':user_id,'type':type} ;
    $.ajax({

    url: 'getsendmailbox.php',

    type: "POST",

    data:  dataString,

    success: function(data){ 
               $("#lightbox, #lightbox-panel").html(data).fadeIn(300);
               $("body").css("overflow", "hidden");
    

    }
    
  });
   
  })


});
</script>



