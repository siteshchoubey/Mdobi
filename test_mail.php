<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$emailto = 'braj.kishore@fiduciainfotech.com';
$emailsubject = "You got a quiry";
$emailmessage = "Test";
$emailfrom = "xxxxxx@gmail.com";
 
 
 
$headers = "MIME-Version: 1.0\\r\
"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\\r\
"; 
$headers .= "From: website@mywebsite.com\\r\
"; 
$headers .= "X-Mailer: PHP \\r\
";
 
if(mail($emailto, $emailsubject, $emailmessage, $headers)) {
  echo "Thank you for contacting us. We will be in touch with you very soon."; 
}else{ 
  echo "Not sent"; 
}
 
  echo phpinfo();
  ?>