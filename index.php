 <?php



 session_start();



  if(@$_SESSION['user_id']==true){



     echo "<script language='javascript'>window.location.href ='profile.php'</script>";



  } 



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



                               <a href="#" id="login"> <i class="fa fa-user" aria-hidden="true"></i> <b>Login</b> <span class="caret"></span></a>



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



   <!-- <div class="col-sm-8">



      <div class="top_nav">







      <ul>



        <li><a href="#">Info</a></li>



        <li><a href="#">Introductions</a></li>



        <li><a href="#">Mail</a></li>



        <li><a href="#">FAQ</a></li>







      </ul>







        </div> -->



     







 <!--  <nav class="navbar navbar-inverse" style="display:none;">



    <div class="navbar-header">



      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">



        <span class="icon-bar"></span>



        <span class="icon-bar"></span>



        <span class="icon-bar"></span>



      </button>



    </div>



    <div class="navbar-collapse collapse">



      <ul class="nav navbar-nav">



        <li class="active"><a href="#">Info</a></li>



          <li><a href="#about">Introductions</a></li>



        <li><a href="#contact">Mail</a></li>



         <li><a href="#contact">FAQ</a></li>



      </ul>



    </div>



  </nav>
 -->














  </div>







  </div>



  </div>



  </div>















  <div class="container-fluid main_header">



  <div class="container">



  <div class="row">

  <div class="introduction_dob">

       <p class="mydate">My Date of Birth Introductions</p>

       <p class="meetpeople">" meet people based on your date of birth "</p>

        <p class="createprofile">" create a complete profile in seconds "</p>


   </div>



    <div class="col-lg-8">

      

   

   <div>
    <img class="img-responsive copyright_text" src="images/copyright.png" style="width: 100%;"/>
  </div>

  <div class="row">
     <div class="col-xs-12 col-sm-4 col-lg-4">
       <div class="free-100">
          <h1>" 100% Free "</h1>
       </div>
   </div>
    <div class="col-xs-12 col-sm-8 col-lg-8">
    <div class="relationship">

       <span>Relationships</span>

       <ul>

         <li><i class="fa fa-check fa-lg red" aria-hidden="true"></i><a href="#">Friends</a></li>

         <li><i class="fa fa-check fa-lg red" aria-hidden="true"></i><a href="#">Lovers</a></li>

         <li><i class="fa fa-check fa-lg red" aria-hidden="true"></i><a href="#">Marriages</a></li>

         <li><i class="fa fa-check fa-lg red" aria-hidden="true"></i><a href="#">Families</a></li>

          <li><i class="fa fa-check fa-lg red" aria-hidden="true"></i><a href="#">Jobs</a></li>

       </ul>

      </div>
    </div>
  </div>
   <div class="row">
       <div class="col-xs-12 col-sm-12 col-lg-12">
      <div class="front_quote">

       <p class="encouraging">" encouraging better relationships "</p>

       <p class="easyto">" easy to use, fun to try "</p>

       <p class="exciting">" exciting way to be introduced "</p>


   </div>
 </div>
 

 </div>
  <div class="row">
    <div class="col-lg-12">
   <div style="width:100%;">
      <div class="front_pixbox">
         <img src="images/profile_pic8.jpg" class="img-responsive front_img">
      </div>
      <div class="front_pixbox">
         <img src="images/profile_pic9.jpg" class="img-responsive front_img">
      </div>
      <div class="front_pixbox">
         <img src="images/profile_pic10.png" class="img-responsive front_img">
      </div>
      <div class="front_pixbox">
         <img src="images/profile_pic11.jpg" class="img-responsive front_img">
      </div>
    
   </div>
  </div>

 </div>

</div>
  <div class="col-lg-4">



  <div class="formbg">



  <form class="form-horizontal" enctype="multipart/form-data" method="POST" id="myForm">



      <div class="form-group">



     <div class="col-sm-12">



      <label id="dis"><?php echo @$msg;?></label><br>



      </div>



        <label class="control-label col-sm-4" for="f_name">First Name:</label>



        <div class="col-sm-8">



          <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name">



        </div>



      </div>



      <div class="form-group">



        <label class="control-label col-sm-4" for="last name">Last Name:</label>



        <div class="col-sm-8">          



          <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">



        </div>



      </div>



      <div class="form-group">



        <label class="control-label col-sm-4" for="Dob">Date of Birth</label>



        <div class="col-sm-8">          



         <input type="text" id="datetime24" name="dob" data-format="DD-MM-YYYY" data-template="DD / MM / YYYY" name="datetime" value="21-12-2018"> 



        </div>



      </div>



      <div class="form-group">



        <label class="control-label col-sm-4" for="Email">E-mail</label>



        <div class="col-sm-8">          



          <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail">



           <input type="text" class="form-control" id="c_email" placeholder="confirm E-Mail">



        </div>



      </div>







      <div class="form-group">



        <label class="control-label col-sm-4" for="pass">Password:</label>



        <div class="col-sm-8">          



          <input type="password" class="form-control" id="pwd" name="pass"placeholder="Enter password">



           <input type="password" class="form-control" id="c_pwd" placeholder="Confirm password">



        </div>



      </div>



      <div class="form-group">



        <label class="control-label col-sm-4" for="Country">Country</label>



        <div class="col-sm-8">          



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



      </div>



      <div class="form-group">



        <label class="control-label col-sm-4" for="State">State/Prov</label>



        <div class="col-sm-8">       



          <select name="state" id="state-list" class="form-control">



            <option value="">Select State</option>



          </select>



        </div>



      </div>



      <div class="form-group">



        <label class="control-label col-sm-4" for="city">City/Town</label>



        <div class="col-sm-8">          



          <select name="cities" id="city-list" class="form-control">



            <option value="">Select City</option>



          </select>



        </div>



      </div>







         <div class="form-group">



        <label class="control-label col-sm-4" for="zip">ZIP/PC</label>



        <div class="col-sm-8">          



          <input type="text" class="form-control" id="zip" name="zip" placeholder="ZIP">



        </div>



      </div>







     











       



  <label for="pwd">ADD PHOTOS</label><br>
  <span style="color:#520101;font-size: 16px;">(Image size must be more than 20 kb)</span><br/>






      <div class="form-group">



        <label class="control-label col-sm-5" for="pwd">Clear face photo</label>



        <div class="col-sm-7">          



          <div style="position:relative;">



            <a class='btn btn-primary' href='javascript:;'>



             Choose File...



             <input type="file" id="file" name="file[]" style='height: 100%;position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info1").html($(this).val());'>



            </a>



            &nbsp;



            <span class='label label-info' id="upload-file-info1"></span>



           </div>



          </div>



      </div>











       <div class="form-group">



        <label class="control-label col-sm-5" for="pwd">Full length body photo</label>



        <div class="col-sm-7">



        <div style="position:relative;">



            <a class='btn btn-primary' href='javascript:;'>



             Choose File...



             <input type="file" id="file" name="file[]" style='height: 100%;position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info2").html($(this).val());'>



            </a>



            &nbsp;



            <span class='label label-info' id="upload-file-info2"></span>



           </div>          



          <!-- <div style="position:relative;">



            <a class='btn btn-primary' href='javascript:;'>



             Choose File...



             <input type="file" id="f_file" name="photp_1" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>



            </a>



            &nbsp;



            <span class='label label-info' id="upload-file-info"></span>



           </div> -->



        </div>



      </div>







      <div class="form-group">



        <label class="control-label col-sm-12" for="checkbox">



        <input type="checkbox" name="verify" id="chkSelect"> I have read and agree to the <a href="privacy-policy.php" target="_blank">Privacy Policy</a> and to the <a href="terms-services.php" target="_blank">Terms of Services</a></label>



       



      </div>



      <div class="form-group">



        <div class="col-sm-12"> 



           <input type="submit" name="submit" class="btn ragister" id="submit" value="Register">         



         <!--   <button type="button" class="btn ragister" id="submit">Register</button> -->



        </div>



      </div>



    </form>



  </div>

  

   



  </div>



  </div>



  </div>



  </div>

<div class="container-fluid footerbg">

  <div class="container">

  <div class="row">

  <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
    <nav class="nav footer-nav">
        <ul id="menu-footer-menu" class="menu">
           <li><a href="#">&copy; 2016 Mdobi.com</a></li>
           <li><a href="terms-services.php">Terms of Service</a></li>
           <li><a href="privacy-policy.php">Privacy Policy</a></li>
        </ul> 

<!-- <p><span style="margin:0px 66px 0px 0px; color:#fff;text-align:center;" class="copyright-footer">© 2016 Mdobi.com</span></p> -->

  </nav> 


   </div>
   <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">

                  <div class="social_icon" style="float:right;">

                    <ul>

                      <li><a href="javascript:void(0)" class="facebook customer share" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=http://www.mdobi.com')" title="Facebook Share"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)" class="twitter customer share" onclick="javascript:genericSocialShare('http://twitter.com/share?url=http://www.mdobi.com')" title="Twitter Share"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)" class="linkedin customer share" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.mdobi.com')" title="LinkedIn Share"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                    </ul>

                  </div>

  </div>

  </div>

  </div>

  </div>



  </body>

  </html>






  <script>



  $(document).ready(function(){



      $(".login").click(function(){



          



          // $(".dropdown-menu").fadeToggle("slow");



          //  $(".arrow").fadeToggle(900);



          $(".login_box").slideToggle(1000);







      });







    /*  $('#date1 input').autotab_magic().autotab_filter('numeric');



  $('#date1 input').datepicker()*/



  });











  </script>



  <script type="text/javascript">



  $(function(){



   $('#datetime24').combodate(); 



});



  </script>















  <style type="text/css">



  .login_box{display: none;}



  @media only screen and (min-width:320px) and (max-width:800px){



  .navbar-header {



    float: none;



  }



  .navbar.navbar-inverse{



    display: block !important;



  }



  .navbar-toggle {



    display: block;



  }



  .navbar-collapse.collapse {



    display: none!important;



  }



  .navbar-nav {



    float: none!important;



  }



  .navbar-nav>li {



    float: none;



  }



  .navbar-collapse.collapse.in{



    display:block !important;



  }



  .top_nav{



    display: none;



  }



  .formbg{



    width: 100%;



  }



  .navbar-inverse { background-color: inherit; border-color:#fff; }



  .icon-bar { background-color: #CF2424  !important; }



  .navbar-toggle:hover { background-color: #fff !important; }



  .icon-bar:hover {  background-color: #fff !important; }



  .navbar-inverse .navbar-nav > .active > a { background-color: #b40b63; }



  .navbar-inverse .navbar-nav > .active > a:hover { background-color: #ce3384; }



  .navbar-inverse .navbar-toggle:focus { background-color: #F08FBB;    border-color: #b40b63; }



  .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus { background-color: #b40b63;  }











  }







  </style>



  <script>



$(document).ready(function() {



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















});



</script>

<script type="text/javascript" async >

  function genericSocialShare(url){

      var w = 648;

      var h = 395

      var left = (screen.width/2)-(w/2);

      var top = (screen.height/2)-(h/2);

      return window.open(url, 'sharer', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);

  }

  </script>
  <style type="text/css">
  </style>
  <script type="text/javascript">
  $('#login').click(function(){
  $('#login-dp').fadeToggle('slow');
});
  </script> 
