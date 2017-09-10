 <?php



 session_start();


?>



  <!DOCTYPE html>



  <html>



  <head>



  <title>Mdobi.com</title>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="css/bootstrap.css">



  <link rel="stylesheet" href="css/font-awesome.css">



  <link rel="stylesheet" href="css/style.css">



  <link rel="stylesheet" href="css/flags.css">



  <link rel="stylesheet" href="css/responsive.css">



  <script type="text/jscript" src="js/jquery-1.12.0.min.js"></script>



  <script type="text/jscript" src="js/bootstrap.min.js"></script>



    <script type="text/javascript" src="js/validation.js"></script>



  <script type="text/javascript" src="js/combodate.js"></script> 




  <script src="js/moment.min.js"></script> 



  </head>

<style type="text/css">
body p { font-size: 18px;}
body ol li { font-size: 18px;}
</style>

  <body>



<script type="text/javascript">



/*$(document).ready(function() { 



            // bind 'myForm' and provide a simple callback function 



            $('#myForm').ajaxForm(function() { 



                 $('#dis').slideDown().html("<span> Registered successfully</span>");



                       setTimeout(function () { $("#dis").fadeOut(); }, 5000);



                      



                      $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');



                      return false;



            }); 



        }); */







</script>



 <script type="text/javascript">



// $(document).ready(function() { 



//             // bind 'myForm' and provide a simple callback function 



//             $('#login_form').ajaxForm(function() { 



//                 alert("you have successfully login"); 



//             }); 



//         }); 







// </script>



<?php



require_once("dbcontroller.php");



$db_handle = new DBController();



$query ="SELECT * FROM countries";



$results = $db_handle->runQuery($query);



?>



  <div class="container-fluid top_header">



          <div class="container">



            <div class="row">



              <div class="col-lg-4 col-xs-4 col-sm-4">



                  <div class="social_icon">

                    <ul>

                      <li><a href="javascript:void(0)"  class="facebook customer share" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=http://www.mdobi.com')" title="Facebook Share"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)"  class="twitter customer share" onclick="javascript:genericSocialShare('http://twitter.com/share?url=http://www.mdobi.com')" title="Twitter Share"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)"  class="linkedin customer share" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.mdobi.com')" title="LinkedIn Share"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                    </ul>

                  </div>



                  </div>

















                <div class="col-lg-8 col-xs-8 col-sm-8">



                    <div class="login_bg">



                        <div class="languagebg"> 



                          <i class="flag flag-us"></i><span>English</span>



                        </div>



                        <div class="login">



                          <ul class="nav navbar-nav navbar-right">



                              <li>


                               <?php if(@$_SESSION['user_id']==true) { ?>

                                <i class="fa fa-user" aria-hidden="true"></i> <a href="logout.php"><samp>Log Out</samp></a>

                               <?php } else { ?>

                               <a href="#" id="login"> <i class="fa fa-user" aria-hidden="true"></i> <b>Login</b> <span class="caret"></span></a>

                               <?php } ?>

                            <ul id="login-dp" class="dropdown-menu">



                              <li>



                                 <div class="row">



                                    <div class="col-md-12">



                                       <form class="form" role="form" method="post" action="login.php"  accept-charset="UTF-8" id="login-nav">



                                          <div class="form-group">



                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>



                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address"  name="email" required>



                                          </div>



                                          <div class="form-group">



                                             <label class="sr-only" for="exampleInputPassword2">Password</label>



                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pass"  required>



                                                                   <div class="help-block text-right"><a href="forgot-password.php" target="_blank">Forget the password ?</a></div>



                                          </div>



                                          <div class="form-group">



                                             <button type="submit" class="btn btn-primary  loginbtn" name="login">Sign in</button>



                                          </div>



                                       </form>



                                    </div>



                                 </div>



                              </li>



                            </ul>



                        </div> 



                       </div>



                    </div>



                    <div class="dropdown-toggle"></div>



                      <!-- <div class="login_box">



                        <form action="login.php" method="POST" id="login_form">



                          <div class="top_input">



                            



                          <input value="" id="txtLogin" name="email" type="email" >



                          </div>



                            <input value="" id="txtPassword" name="pass" type="password">



                            <a>Forgot password?</a>



                            <input value="Login" class="loginbtn" type="submit" name="login">



                            </form>



                      </div> -->



                </div>



          </div>  



  </div>



  <div class="container_fluid sub_top">



  <div class="container">



  <div class="row">



  <div class="col-sm-4">



   <div class="logo"><p style="color:#242424;font-size: 30px;"><a style="color:#242424;" href="mdobi-content.php">mdobi.com</a></p></div></div>

<div class="col-xs-12 col-sm-8  col-lg-8 col-md-8">

      <div class="top_nav">

      <ul>

         <li><a href="index.php">Home</a></li>


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

         <li><a href="index.php">Home</a></li>


      </ul>

    </div>

  </nav>







  </div>









  </div>







  </div>



  </div>



  </div>










<section class="middle">
  <div class="container-fluid matter">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <center><span>Welcome to My Date of Birth Introductions!</span></center>
  </div>
  </div> 
  </div>
  </div>
  </div>

  <div class="container">
    <div class="row">
       <div class="col-lg-12">
       <p style="text-decoration: underline;">Privacy<p>
       <p>Your name, birth date and email are not visible</p>

       <p style="text-decoration: underline;">Home</p> 
       <p>"My Profile"</p>
       <p>The information and photos you select and save completes your profile. Your profile is available for viewing by your best personality matches based on your date of birth for all searches for friends, love, marriage and family. Not looking for a new love but would like to meet new friends? No problem, select "Friends" from the "Seeking" option and your profile will be seen by your best personality matches for friends only, etc... <br/>
       You can "Hide Profile" anytime for invisibility from your matches when you wish to hold off meeting new people and you can still search and message others while this option is selected. Click the same button saying "Show profile" when you wish to start communicating with new people again.</p>

       <p>"My Business"</p>
       <p>Fill in the required information to post a job description. Your job ad is available for viewing by your best personality work matches based on your date of birth. Upload a business logo/photo. Job seekers can type in key words and select a location to search job ads from the "Work" page. No profiles are shared with anyone applying for a job or posting a job.</p>

       <p style="text-decoration: underline;">Mail</p>
       <p>Click a photo to view "Mail Received" once you reply you can review message history with that person in your "Mail Sent"</p>

       <p style="text-decoration: underline;">Friends/Love/Marriage/Family</p>
       <p>Search specific relationships with the option of filtering your searches.</p>
       <p>Click a photo to view profiles of your best personality matches and decide whether to type a message or close the profile to continue your search</p>

       <p style="text-decoration: underline;">Work</p>
       <p>Employers may advertise jobs from the "Home" page and their best personality work matches can view the job<br/> advertisements from the "Work" page. See a job you like? Apply by uploading your resume and send </p>

       <p style="text-decoration: underline;">mdobi</p>
       <p>A page dedicated to helpful information, reputable businesses, cool links, preferred products, and so much more!</p>

       <p style="text-decoration: underline;">Delete Account</p>
       <p>To delete your account go to the "Home" page and select "Delete Account"</p>

              
       </div>
    </div>
  </div>
</section>
<?php include ('footer.php'); ?>