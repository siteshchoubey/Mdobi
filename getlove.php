<?php
include('config.php');
if(@$_SESSION['zodiac_signs']=="Capricorn I")
{
   		$query = mysql_query("SELECT zodiac_signs FROM `love_capricorn i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}
if(@$_SESSION['zodiac_signs']=="Capricorn II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_capricorn ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}
if(@$_SESSION['zodiac_signs']=="Capricorn III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_capricorn iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Capricorn-Aquarius Cusp")
{
	   $query = mysql_query("SELECT zodiac_signs FROM `love_capricorn-aquarius cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aquarius I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aquarius i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aquarius II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aquarius ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aquarius III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aquarius iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aquarius-Pisces Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aquarius-pisces cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}


if(@$_SESSION['zodiac_signs']=="Pisces I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_pisces i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}


if(@$_SESSION['zodiac_signs']=="Pisces II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_pisces ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}


if(@$_SESSION['zodiac_signs']=="Pisces III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_pisces iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Pisces-Aries Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_pisces-aries cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aries I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aries i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aries II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aries ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aries III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aries iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Aries-Taurus Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_aries-taurus cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Taurus I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_taurus i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}


if(@$_SESSION['zodiac_signs']=="Taurus II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_taurus ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Taurus III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_taurus iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Taurus-Gemini Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_taurus-gemini cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Gemini I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_gemini i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Gemini II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_gemini ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Gemini III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_gemini iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Gemini-Cancer Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_gemini-cancer cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Cancer I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_cancer i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Cancer II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_cancer ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Cancer III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_cancer iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Cancer-Leo Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_cancer-leo cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Leo I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_leo i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Leo II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_leo ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Leo III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_leo iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Leo-Virgo Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_leo-virgo cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Virgo I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_virgo i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Virgo II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_virgo ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Virgo III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_virgo iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Virgo-Libra Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_virgo-libra cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Libra I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_libra i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Libra II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_libra ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Libra II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_libra ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Libra III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_libra iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Libra-Scorpio Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_libra-scorpio cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}
if(@$_SESSION['zodiac_signs']=="Scorpio I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_scorpio i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Scorpio II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_scorpio ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Scorpio III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_scorpio iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Scorpio-Sagittarius Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_scorpio-sagittarius cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Sagittarius I")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_sagittarius i`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Sagittarius II")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_sagittarius ii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Sagittarius III")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_sagittarius iii`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}

if(@$_SESSION['zodiac_signs']=="Sagittarius-Capricorn Cusp")
{
	    $query = mysql_query("SELECT zodiac_signs FROM `love_sagittarius-capricorn cusp`");
		while($zodiac_signs_array = mysql_fetch_assoc($query)) {
			foreach($zodiac_signs_array as $c) {
				$zodiacsignsarray[] = "zodiac_signs = '".$c."'";
			}
		}
	
		$zodiac[] = '('.implode(' OR ',$zodiacsignsarray).')';
		
   
}


?>