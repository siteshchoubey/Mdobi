 <?php
 session_start();

if(@$_SESSION['user_id']==''){

  echo "<script language='javascript'>window.location.href = 'index.php'</script>";

} 

require_once("dbcontroller.php");

$db_handle = new DBController();

?>
 <!DOCTYPE html>

  <html>
     <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
     <meta content="utf-8" http-equiv="encoding">
  </head>

  <title>Mdobi.com</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/font-awesome.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/flags.css">

  <link rel="stylesheet" href="css/responsive.css">

   <link rel="stylesheet" href="css/message.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!--<script type="text/jscript" src="js/jquery-1.12.0.min.js"></script>-->

  <script type="text/jscript" src="js/bootstrap.min.js"></script>

  <script type="text/jscript" src="js/dating.js"></script>

  <script type="text/jscript" src="js/message.js"></script>

  <script type="text/javascript" src="js/combodate.js"></script>

  <script src="js/moment.min.js"></script> 

  <script>

 $(document).ready(function() {

   $("#notify").load("notification.php");

  var refreshId = setInterval(function() {

     $("#notify").load('notification.php');

   }, 2000);

});
</script>

<script>

 $(document).ready(function() {

   $("#receivemail").load("receivemail.php");

   var refreshId = setInterval(function() {

      $("#receivemail").load('receivemail.php');

   }, 10000);

});

</script>

<script>

$(document).ready(function() {

   $("#sendmail").load("sendmail.php");

   var refreshId = setInterval(function() {

      $("#sendmail").load('sendmail.php');

   }, 10000);
});
</script>



  </head>

  <body>



  <div class="container-fluid top_header">

          <div class="container">

            <div class="row">

              <div class="col-lg-6 col-xs-4 col-sm-6 col-md-9">

                  <div class="social_icon">

                    <ul>

                      <li><a href="javascript:void(0)"  class="facebook customer share" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=http://www.mdobi.com')" title="Facebook Share"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)"  class="twitter customer share" onclick="javascript:genericSocialShare('http://twitter.com/share?url=http://www.mdobi.com')" title="Twitter Share"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)"  class="linkedin customer share" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.mdobi.com')" title="LinkedIn Share"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                    </ul>

                  </div>

                </div>

                <div class="col-lg-6 col-xs-8 col-sm-6 col-md-3">

                    <div id="notify"></div>

                    <div class="login_bg">

                     

                       

                        <div class="languagebg"> 

                          <i class="flag flag-us"></i><span>English</span>

                        </div>

                          

                          <div class="login">

                          <?php if(@$_SESSION['user_id']==true) { ?>

                          <!-- <i class="fa fa-user" aria-hidden="true"></i> <a href="#"><samp>Account</samp></a>
                          <ul class="dropdown-menu">
                               <li><a href="logout.php"><samp>Log Out</samp></a></li>
                               <li><a href="logout.php"><samp>Log Out</samp></a></li>
                            </ul> -->

                          <div class="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i>  <a href="#" data-toggle="dropdown" class="dropdown-toggle">User <b class="caret"></b></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="profile-setting.php">Profile Setting</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>

                          <?php } else { ?>

                          <i class="fa fa-user" aria-hidden="true"></i> <samp>Login</samp><span class="caret"></span>

                          <?php } ?>

                        </div>

                       </div>

                    </div>

                <!--    <div class="dropdown-toggle"></div>

                      <div class="login_box">

                          <div class="top_input">

                            <input value="E-mail or Phone" id="txtLogin" name="txtLogin" type="text">

                          </div>

                            <input value="password" id="txtPassword" name="frmPassword" type="password">

                            <a>Forgot password?</a>

                            <input value="Login" class="loginbtn" type="submit">

                      </div> -->

                </div>

          </div>	

  </div>

  <div class="container_fluid sub_top">

  <div class="container">

  <div class="row">

  <div class="col-xs-12 col-sm-3 col-lg-3 col-md-3">

   <div class="logo"><p style="color:#242424;font-size: 30px;"><a style="color:#242424;" href="mdobi-content.php">mdobi.com</a></div></div>

   <div class="col-xs-12 col-sm-9  col-lg-9 col-md-9">

      <div class="top_nav">

      <?php

        $current_page_name = basename($_SERVER["PHP_SELF"]);

      ?>

      <ul>

        <li><a class="<?php echo ($current_page_name=='profile.php')?'active':'';?>" href="profile.php">Home</a></li>

        <li><a class="<?php echo ($current_page_name=='mail.php')?'active':'';?>" href="mail.php">Mail</a></li>

        <li><a class="<?php echo ($current_page_name=='friends.php')?'active':'';?>" href="friends.php">Friends</a></li>

        <li><a class="<?php echo ($current_page_name=='love.php')?'active':'';?>" href="love.php">Love</a></li>

        <li><a class="<?php echo ($current_page_name=='marriage.php')?'active':'';?>"href="marriage.php">Marriage</a></li>

        <li><a class="<?php echo ($current_page_name=='family.php')?'active':'';?>"href="family.php">Family</a></li>

        <li><a class="<?php echo ($current_page_name=='work.php')?'active':'';?>" href="work.php">Work</a></li>

        <li><a class="<?php echo ($current_page_name=='mdobi.php')?'active':'';?>" href="mdobi-content.php">mdobi</a></li>



      </ul>



        </div>

     



  <nav class="navbar navbar-inverse" style="display:none;">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

    </div>

    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav">

         <li><a class="<?php echo ($current_page_name=='profile.php')?'active':'';?>" href="profile.php">Home</a></li>

        <li><a class="<?php echo ($current_page_name=='mail.php')?'active':'';?>" href="mail.php">Mail</a></li>

        <li><a class="<?php echo ($current_page_name=='friends.php')?'active':'';?>" href="friends.php">Friends</a></li>

        <li><a class="<?php echo ($current_page_name=='love.php')?'active':'';?>" href="love.php">Love</a></li>

        <li><a class="<?php echo ($current_page_name=='marriage.php')?'active':'';?>"href="marriage.php">Marriage</a></li>

        <li><a class="<?php echo ($current_page_name=='family.php')?'active':'';?>"href="family.php">Family</a></li>

        <li><a class="<?php echo ($current_page_name=='work.php')?'active':'';?>" href="work.php">Work</a></li>

        <li><a class="<?php echo ($current_page_name=='mdobi.php')?'active':'';?>" href="mdobi.php">mdobi</a></li>

      </ul>

    </div>

  </nav>







  </div>



  </div>

  </div>

  </div>