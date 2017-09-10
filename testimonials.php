<?php session_start();?>
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
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/testinomial.css">
<script src="js/modernizr.js"></script>
<body>
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
                            <div class="login">

                          <?php if(@$_SESSION['user_id']==true) { ?>

                          <i class="fa fa-user" aria-hidden="true"></i> <a href="logout.php"><samp>Log Out</samp></a>

                          <?php } else { ?>

                          <a href="#" id="login"> <i class="fa fa-user" aria-hidden="true"></i> <b>Login</b> <span class="caret"></span></a>

                          <?php } ?>

                        </div>
                                <ul id="login-dp" class="dropdown-menu"><li>



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

                </div>



          </div>  



  </div>



  <div class="container_fluid sub_top">



  <div class="container">



  <div class="row">



  <div class="col-sm-4">



   <div class="logo"><p style="color:#242424;font-size: 30px;"><a style="color:#242424;" href="mdobi-content.php">mdobi.com</a></p>
   </div></div>

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
  <div class="container">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <div><center><span style="font-size:19px !important;line-height: 1.5;">"testimonials, references, reviews, ratings, recommendations, commemorations, evidence"<br/>
    Made successful relationships encouraged by mdobi? We would love to know about it!</span></center></div>
  </div>
  </div> 
  </div>
  </div>
  </div>

  <div class="container">
    <div class="row">
       <div class="col-lg-12">
        <div>
        <div id="testi_message"></div>
        <form id="testinomials" method="post" enctype="multipart/form-data">
        <textarea placeholder="Type here" col="20" row="200" style="width:100%;height: 250px;" name="testino" id="testino" required="required"></textarea>
        <button type="submit" class="sent_testinomial">Send </button>
        </form>
        </div>
       </div>
       <div class="col-lg-12">
        <div id="showbox">
             <div class="cd-testimonials-wrapper cd-container">
             <ul class="cd-testimonials">
          <?php
          include 'config.php';
          $fetch= mysql_query("SELECT * FROM testinomial order by id desc");
          while($row=mysql_fetch_array($fetch))
          {
                //echo "<div class='showbox'>".$row['testinomial']."</div>";
          ?>

            <li>
              <p><?php echo$row['testinomial'];?></p>
            </li>

   
   
          <?php
          }
          ?>

  </ul> <!-- cd-testimonials -->

  <!-- <a href="#0" class="cd-see-all">See all</a> -->
</div> <!-- cd-testimonials-wrapper -->

        </div>
       </div>
    </div>
  </div>
</section>


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



<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
  $("#testinomials").on('submit',(function(event) {
    event.preventDefault();
    var testino = $("#testino").val();
    var dataString = {'testino':testino};
    $("#testi_message").html('');
    $.ajax({
    url: 'gettestinomial.php',
    type: "POST",
    data:  dataString,
    success: function(data){ 
                $("#testi_message").html(data);
                 $("#testino").val('');
                 setTimeout(function () { $("#testi_message").html('');

             }, 2000);
                  setTimeout(function(){

                       window.location.reload(1);

                    }, 2000);
    }



    });







  }));



</script>