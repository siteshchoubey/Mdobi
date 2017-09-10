<?php
define ("DB_HOST","localhost");
define ("DB_USER","sitesh");
define ("DB_PASS","q1w2e3r4");
define ("DB_NAME","mdobi");

$admin_email = 'braj.kishore@fiduciainfotech.com';
$url = 'http://mdobi.com/';

   
   $query = mysql_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   $db=mysql_select_db(DB_NAME,$query);
?>
