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
  <div class="container">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <span>My Story</span>
  </div>
  </div> 
  </div>
  </div>
  </div>
  </div>
  <form name="frmSearch" method="post" action="horoscope.php">

  <input type="hidden" name="user_id" value="<?php echo @$_GET['id']; ?>">
  <div id="loading" ></div>
  <div class="container">
    <?php if(@$_SESSION['user_id']===@$_GET['id']) { ?>
  <div class="row">
  <div class="col-lg-12">
  <div>
    <a href="add-new-story.php">Add New Story</a>
  </div>
  <?php } ?>
 <?php
                include 'config.php';
                $query = mysql_query("SELECT * FROM user_story WHERE user_id='".$_GET['id']."'");
                $num_row = mysql_num_rows($query);
                if($num_row > 0)
                {
    ?>
    <div class="row">
            <div class="col-lg-12">
              <div class="sub_heading">
                <span>Pick a Chapter</span>
              </div>
            </div> 
    </div>


    <div class="row">
        <div class="col-lg-3">
                <div id="button">
                <ul>
               <?php 
                while($row = mysql_fetch_array($query))
                {
                ?>
                 <li><a href="#" id="<?php echo $row['id'];?>" class="show_horo"><?php echo $row['chapter_title'];?></a></li>
                <?php } ?>
                </ul>
                </div>
                <?php if($num_row > 0) { ?>
                <a href="#" id="more">more</a>
                <a href="#" id="less">less</a>
                <?php } ?>
        </div>
        <div id="toys-grid"></div>

        <div id="lightbox"></div>
           
      </div>
          
          
      </div>
      <?php } else { echo '<div class="alert alert-success"><strong>Sorry </strong> No Story Available</div>'; } ?>
</form>


</section>

<?php include 'footer.php';?>



<script>
  function getresult(url) {   
    var user_id = '<?php echo $_GET['id'];?>';
    var chapter_id= $('#button ul li a:first').attr('id');
    $('ul.menu li a:first-child').addClass('activehoro'); 
    var horo= $("#horo").val();
    var rowcount = $("#rowcount").val();
    var dataString = {'rowcount' :rowcount,'horo':horo,'user_id':user_id,'chapter_id':chapter_id};
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
  getresult("getuserstory.php");
  
  </script>

  

<script type="text/javascript">
$(document).ready(function(){
  $("#button ul li a:first").addClass("activehoro");
  $("a.show_horo").click(function(){
     
    var chapter_id= $(this).attr('id');
     var user_id = '<?php echo $_GET['id'];?>';
    $('ul li a.activehoro').removeClass('activehoro');
    $(this).closest('a').addClass('activehoro');

    var dataString = {'chapter_id':chapter_id,'user_id':user_id} ;

    $.ajax({

    url: 'getuserstory.php',

    type: "POST",

    data:  dataString,
     beforeSend: function() {
               $("#toys-grid").fadeOut('slow');
            },
    success: function(data)

    { 
       
       setTimeout(function() {
        $("#toys-grid").html(data); 
        $("#toys-grid").fadeIn(500);
        $('html, body').animate({scrollTop: $("#loading").offset().top}, 1000);
       },1000);
      
      
    }

     });

   

  })





});</script>


  <script>



  $(document).ready(function(){



      $(".login").click(function(){


          $(".login_box").slideToggle(1000);


      });




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

  <script type="text/javascript">
  jQuery(function($) {
        var visible = 20, 
        $lis = $('#button ul li'), 
        max = $lis.length;        
        function showUpToIndex(index) {
            $lis.hide();
            $lis.slice(0, index).show();
        }
    
        showUpToIndex(visible);
        
        $('#more').click(function(e) {
            e.preventDefault();
            visible = visible + 5;
            if (visible > max) visible = max;
     
            showUpToIndex(visible);
        });
        
        $('#less').click(function(e) {
            e.preventDefault();
            visible = visible - 5;
            if (visible < 0) visible = 0;
     
            showUpToIndex(visible);
        });
    });</script>





