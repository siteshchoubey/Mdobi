<?php 
include 'function.php';

require_once("dbcontroller.php");

/*echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";*/
//die();

$db_handle = new DBController();

$query ="SELECT user_email FROM user WHERE user_email = '".$_POST['email']."'";

$results = $db_handle->numRows($query);

$dob=$_POST['dob'];

$exp = explode('-', $dob);

$month = $exp[1];

$day = $exp[0];

$year = $exp[2];

$zodiac_signs =  star_sign($month, $day, $year) ;

$calage = "".$year.'-'.$month.'-'.$day."";

$age= GetAge($calage);



$name=$_POST['f_name'];

$lname=$_POST['l_name'];

$email=$_POST['email'];

$password=$_POST['pass'];

$country=$_POST['country'];

$state=$_POST['state'];

$city=$_POST['cities'];

$zip=$_POST['zip'];

$photo=$_FILES['file']['name'];


$token = activatetoken(10);
$to = $email;
$subject = "activation link";
$link ="http://mdobi.com/activate.php?email=".$email."&token=".$token."";
$message = "
<html>
<body>
<h1>Welcome to mdobi.com !</h1>
<p> Activate your account and start meeting your best personality matches based on your date of birth for all types of relationships<br/>
If the button doesn't work, copy & paste this link into your browser.<br/>
<a href=".$link." target='_blank'>".$link."</a></p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <mdobi.com>' . "\r\n";




      if($age < 18)

      {

           echo "<br clear='all'><div class='alert alert-danger'><strong>Age Should be above 18 for Registration</strong> </div>";

      }

      else if ($results > 0) 

      {

             echo "<br clear='all'><div class='alert alert-danger'><strong>The email already exists.</strong> </div>";

      }

      else 
      {
print_r($_FILES);

            if(is_array($_FILES)) 
            {
                  $j = -1;

                  foreach ($_FILES['file']['name'] as $name => $value)
                  {
                    $j = $j + 1;
                    if(is_uploaded_file($_FILES['file']['tmp_name'][$name])) 
                    {
                        $validextensions = array("jpeg", "jpg", "png","jpg");
                        $ext = explode('.',  $_FILES['file']['name'][$name]);
                        $file_extension = end($ext); // Store extensions in the variable.
                        
                        if (!in_array($file_extension, $validextensions)) {
                              echo "<div class='alert alert-danger'><strong>Image format is not valid ". $_FILES['file']['name'][$j]."</strong> </div>"; 
                              exit();
                        }
                        /*else if($_FILES['file']['size'][$name]  > 1000000)

                        {

                              echo "<div class='alert alert-danger'><strong>Image size must be more than 20kb and less than 1mb ".  $_FILES['file']['name'][$j]."</strong> </div>"; 

                              exit();

                        }*/

                        else if($_FILES['file']['size'][$name] < 20000)

                        {



                              echo "<div class='alert alert-danger'><strong>Image size must be more than 20kb ".  $_FILES['file']['name'][$j]."</strong> </div>"; 

                               exit();

                        }
                        else
                        {
                               $newfilename = md5(uniqid()) . "." . $_FILES['file']['name'][$name];
                               $sourcePath = $_FILES['file']['tmp_name'][$name];
                               $targetPath = "uploads/".$newfilename;
                               move_uploaded_file($sourcePath,$targetPath);
                               $data[]=$newfilename;
                               @$image=implode(',',$data);

                        }
                        


                      
                    }
                  }
                   $mail = mail($to,$subject,$message,$headers);

                   

                   if(!$mail)

                   {
                        //echo "files";
                        $sql=mysql_query("INSERT INTO `user`(`user_id`,`user_name`, `user_lname`, `user_dob`, `user_email`, `user_pass`, `user_country`, `user_state`, `user_city`, `user_zip`, `user_photo`,`zodiac_signs`,`activationtoken`) VALUES (NULL,'".$_POST['f_name']."','$lname','$dob','$email','$password','$country','$state','$city','$zip','$image','$zodiac_signs','$token')");
                        
                        echo  '<div class="alert alert-success"><strong>Registered successfully<br/>
                        activation mail sent </strong></div>';
                        
                      
                   }


                   else

                   {

                        echo  '<div class="alert alert-danger"><strong>Something Wrong while Registration</strong></div>';

                  }
            }

            else

            {

                   $mail = mail($to,$subject,$message,$headers);

                   

                   if(!$mail)

                   {
                        //echo "No files Uploaded";
                        $sql=mysql_query("INSERT INTO `user`(`user_id`,`user_name`, `user_lname`, `user_dob`, `user_email`, `user_pass`, `user_country`, `user_state`, `user_city`, `user_zip`, `user_photo`,`zodiac_signs`,`activationtoken`) VALUES (NULL,'".$_POST['f_name']."','$lname','$dob','$email','$password','$country','$state','$city','$zip','','$zodiac_signs','$token')");
                        
                        echo  '<div class="alert alert-success"><strong>Registered successfully<br/>
                        activation mail send </strong></div>';
                      
                   }

                   else

                   {

                        echo  '<div class="alert alert-danger"><strong>Something Wrong while Registration</strong></div>';

                   }
 
            }
      }
?>



