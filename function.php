<?php

function showmsg(){

	if(!empty($_SESSION['msg'])){

		echo $_SESSION['msg'];

	 	unset($_SESSION['msg']);

	}

}



function checkuser(){

	if(!empty($_SESSION['usersession']['id'])){

		return true;

	}else{

		return false;

	}

}

?>

<?php

function star_sign($month, $day, $year) {

   $time = mktime(0, 0, 0, $month, $day, $year); //return the Unix timestamp

   $day_of_year = date("z", $time);  // "z" is equal to  the day of the year 0 to 365

   //echo $day_of_year;

 

   if (date("L", $time) && ($day_of_year > 59)) // for leap years "L" is LEAP YEAR

      $day_of_year -= 1; // if it is FEB 29 (59) Subtract 1 from the day of year

 

   switch ($day_of_year) {

     case $day_of_year >= 359:

         return "Capricorn I";

      case $day_of_year >= 2 && $day_of_year <= 8:

         return "Capricorn II";

      case $day_of_year >= 9 && $day_of_year <= 15:

         return "Capricorn III";

      case $day_of_year >= 16 && $day_of_year <= 21:

         return "Capricorn-Aquarius Cusp";

      case $day_of_year >= 22 && $day_of_year <= 29:

         return "Aquarius I";

      case $day_of_year >= 30 && $day_of_year <= 37:

         return "Aquarius II";

      case $day_of_year >= 38 && $day_of_year <= 45:

         return "Aquarius III";

      case $day_of_year >= 46 && $day_of_year <= 52:

         return "Aquarius-Pisces Cusp";

      case $day_of_year >= 53 && $day_of_year <= 60:

         return "Pisces I";

      case $day_of_year >= 61 && $day_of_year <= 68:

         return "Pisces II";

      case $day_of_year >= 69 && $day_of_year <= 76:

         return "Pisces III";

      case $day_of_year >= 77 && $day_of_year <= 82:

         return "Pisces-Aries Cusp";

      case $day_of_year >= 83 && $day_of_year <= 91:

         return "Aries I";

      case $day_of_year >= 92 && $day_of_year <= 99:

         return "Aries II";

      case $day_of_year >= 100 && $day_of_year <= 107:

         return "Aries III";

      case $day_of_year >= 108 && $day_of_year <= 113:

         return "Aries-Taurus Cusp";

      case $day_of_year >= 114 && $day_of_year <= 121:

         return "Taurus I";

      case $day_of_year >= 122 && $day_of_year <= 129:

         return "Taurus II";

      case $day_of_year >= 130 && $day_of_year <= 137:

         return "Taurus III";

      case $day_of_year >= 138 && $day_of_year <= 143:

         return "Taurus-Gemini Cusp";

      case $day_of_year >= 144 && $day_of_year <= 152:

         return "Gemini I";

      case $day_of_year >= 153 && $day_of_year <= 160:

         return "Gemini II";

      case $day_of_year >= 161 && $day_of_year <= 168:

         return "Gemini III";

      case $day_of_year >= 169 && $day_of_year <= 174:

         return "Gemini-Cancer Cusp";

      case $day_of_year >= 175 && $day_of_year <= 182:

         return "Cancer I";

      case $day_of_year >= 183 && $day_of_year <= 190:

         return "Cancer II";

      case $day_of_year >= 191 && $day_of_year <= 198:

         return "Cancer III";

      case $day_of_year >= 199 && $day_of_year <= 205:

         return "Cancer-Leo Cusp";

      case $day_of_year >= 206 && $day_of_year <= 213:

         return "Leo I";

      case $day_of_year >= 214 && $day_of_year <= 221:

         return "Leo II";

      case $day_of_year >= 222 && $day_of_year <= 229:

         return "Leo III";

      case $day_of_year >= 230 && $day_of_year <= 236:

         return "Leo-Virgo Cusp";

      case $day_of_year >= 237 && $day_of_year <= 244:

         return "Virgo I";

      case $day_of_year >= 245 && $day_of_year <= 252:

         return "Virgo II";

      case $day_of_year >= 253 && $day_of_year <= 260:

         return "Virgo III";

      case $day_of_year >= 253 && $day_of_year <= 260:

         return "Virgo-Libra Cusp";

      case $day_of_year >= 261 && $day_of_year <= 274:

         return "Libra I";

      case $day_of_year >= 275 && $day_of_year <= 282:

         return "Libra II";

      case $day_of_year >= 283 && $day_of_year <= 290:

         return "Libra III";

      case $day_of_year >= 291 && $day_of_year <= 297:

         return "Libra-Scorpio Cusp";

      case $day_of_year >= 298 && $day_of_year <= 305:

         return "Scorpio I";

      case $day_of_year >= 305 && $day_of_year <= 314:

         return "Scorpio II";

      case $day_of_year >= 315 && $day_of_year <= 321:

         return "Scorpio III";

      case $day_of_year >= 322 && $day_of_year <= 327:

         return "Scorpio-Sagittarius Cusp";

      case $day_of_year >= 328 && $day_of_year <= 335:

         return "Sagittarius I";

      case $day_of_year >= 336 && $day_of_year <= 343:

         return "Sagittarius II";

      case $day_of_year >= 344 && $day_of_year <= 351:

         return "Sagittarius III";

      case $day_of_year >= 352 && $day_of_year <= 358:

         return "Sagittarius-Capricorn Cusp";

      default:

         return "Capricorn";

   }

}



?>

<?php

function GetAge($dob) 

{ 

        $dob=explode("-",$dob); 

        $curMonth = date("m");

        $curDay = date("j");

        $curYear = date("Y");

        $age = $curYear - $dob[0]; 

        if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])) 

                $age--; 

        return $age; 

}


function activatetoken($len)
{
 $min_lenght= 0;
 $max_lenght = 100;
 $bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $smallL = "abcdefghijklmnopqrstuvwxyz";
 $number = "0123456789";
 $bigB = str_shuffle($bigL);
 $numberS = str_shuffle($number);
 $subA = substr($bigB,0,5);
 $subB = substr($bigB,6,5);
 $subC = substr($bigB,10,5);
 /*$subD = substr($smallS,0,5);
 $subE = substr($smallS,6,5);
 $subF = substr($smallS,10,5);*/
 $subG = substr($numberS,0,5);
 $subH = substr($numberS,6,5);
 $subI = substr($numberS,10,5);
 $RandCode1 = str_shuffle($subA.$subB.$subC);
 $RandCode2 = str_shuffle($RandCode1);
 $RandCode = $RandCode1.$RandCode2;
 if ($len>$min_lenght && $len<$max_lenght)
 {
 $CodeEX = substr($RandCode,0,$len);
 }
 else
 {
 $CodeEX = $RandCode;
 }
 return $CodeEX;
}

  

?>