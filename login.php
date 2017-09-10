<?php 

session_start();

require_once("config.php");



if (isset($_POST['login'])) {

	$email=$_POST['email'];

	$password=$_POST['pass'];

	

	$sql="SELECT * from user WHERE user_email='$email' and user_pass='$password' and status='1'";

	mysql_select_db($db);

	$result=mysql_query($sql); 

	$count=mysql_num_rows($result);

	

     if($count==1)

     {

     	$fetch=mysql_fetch_array($result);

     	$_SESSION['user_id'] = $fetch['user_id'];

      $_SESSION['email'] = $fetch['user_email'];

     	$_SESSION['zodiac_signs'] = $fetch['zodiac_signs'];

      $_SESSION['user_name'] = $fetch['user_name'] .' '. $fetch['user_lname'];

      if(empty($fetch['user_photo'])){

         $_SESSION['default_photo'] = 'demo.png';

      }

      else

      {

      $array = explode(',',$fetch['user_photo']);

      $_SESSION['default_photo'] = $array[0];

      }

		header("Location:profile.php");

     }

     else{

     	$msg =  "<div class='alert alert-danger'>Your Email and Password Combination is Wrong!</div>";

     }

	

}



 ?>

<!DOCTYPE html>

<html>

  <head>

  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/font-awesome.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/flags.css">

  <link rel="stylesheet" href="css/responsive.css">

   <link rel="stylesheet" href="css/message.css">

  <script type="text/jscript" src="js/jquery-1.12.0.min.js"></script>

  <script type="text/jscript" src="js/bootstrap.min.js"></script>

  <script type="text/jscript" src="js/dating.js"></script>

  <script type="text/jscript" src="js/message.js"></script>

  <script type="text/javascript" src="js/combodate.js"></script>

 

  <script src="http://malsup.github.com/jquery.form.js"></script>

  <script src="http://hayageek.github.io/jQuery-Upload-File/4.0.10/jquery.uploadfile.min.js"></script>

  <script src="js/moment.min.js"></script> 





  </head>

  <body>

      <div class="container">    

        <div id="loginbox" style="margin-top:15%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

            <div class="panel panel-info" >

                    <div class="panel-heading">

                        <div class="panel-title">Sign In</div>

                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>

                    </div>     



                    <div style="padding-top:30px" class="panel-body" >



                        <div class="col-sm-12"><?php echo @$msg;?></div>

                            

                        <form id="loginform" class="form-horizontal" role="form" action="" method="POST">

                                    

                            <div style="margin-bottom: 25px" class="input-group">

                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                        <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" required>                                        

                                    </div>

                                

                            <div style="margin-bottom: 25px" class="input-group">

                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                        <input id="login-password" type="password" class="form-control" name="pass" placeholder="password" required>

                                    </div>

                                    







                                <div style="margin-top:10px" class="form-group">

                                    <!-- Button -->



                                    <div class="col-sm-12 controls">

                                    	<input type="submit" name="login" value="Login" class="btn btn-success"/>

                                      <!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a> -->

                                     



                                    </div>

                                </div>





                                <div class="form-group">

                                    <div class="col-md-12 control">

                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >

                                            Don't have an account! 

                                        <a href="index.php">

                                            Sign Up Here

                                        </a>

                                        </div>

                                    </div>

                                </div>    

                            </form>     







                        </div>                     

                    </div>  

        </div>

        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                    <div class="panel panel-info">

                        <div class="panel-heading">

                            <div class="panel-title">Sign Up</div>

                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>

                        </div>  

                        <div class="panel-body" >

                            <form id="signupform" class="form-horizontal" role="form">

                                

                                <div id="signupalert" style="display:none" class="alert alert-danger">

                                    <p>Error:</p>

                                    <span></span>

                                </div>

                                    

                                

                                  

                                <div class="form-group">

                                    <label for="email" class="col-md-3 control-label">Email</label>

                                    <div class="col-md-9">

                                        <input type="text" class="form-control" name="email" placeholder="Email Address">

                                    </div>

                                </div>

                                    

                                <div class="form-group">

                                    <label for="firstname" class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-9">

                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>

                                    <div class="col-md-9">

                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="password" class="col-md-3 control-label">Password</label>

                                    <div class="col-md-9">

                                        <input type="password" class="form-control" name="passwd" placeholder="Password">

                                    </div>

                                </div>

                                    

                                <div class="form-group">

                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>

                                    <div class="col-md-9">

                                        <input type="text" class="form-control" name="icode" placeholder="">

                                    </div>

                                </div>



                                <div class="form-group">

                                    <!-- Button -->                                        

                                    <div class="col-md-offset-3 col-md-9">

                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>

                                        <span style="margin-left:8px;">or</span>  

                                    </div>

                                </div>

                                

                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                                    

                                    <div class="col-md-offset-3 col-md-9">

                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>

                                    </div>                                           

                                        

                                </div>

                                

                                

                                

                            </form>

                         </div>

                    </div>



               

               

                

         </div> 

    </div>

    

    <script src="js/bootstrap.min.js"></script>

    <script src="js/custom.js"></script>

  </body>

</html>

