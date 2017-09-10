<?php

session_start();

include('config.php');

if(isset($_POST['testino']))

{

				$query = mysql_query("INSERT INTO testinomial (`id`, `testinomial`,`date`) VALUES (NULL,'".$_POST['testino']."',now())");

					if($query)

					{

					    echo '<div class="alert alert-success"><strong>Testinomial saved Successfully...</strong> </div>';

					}

					else

					{

					     echo '<div class="alert alert-danger"><strong>Sorry, Testinomial not saved try again</strong> </div>';

					}

}



?>





