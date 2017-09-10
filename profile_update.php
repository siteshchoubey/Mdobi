<?php

error_reporting(0);

session_start();

include('config.php');

if($_POST['submit']=="filter") {

    $vices = implode(',', $_POST['vices']);

    $seeking = implode(',', $_POST['seeking']);

	$query = mysql_query("UPDATE user SET ethnicity = '".$_POST['ethnicity']."' , religion = '".$_POST['religion']."' , marital_status = '".$_POST['marital_status']."' , children = '".$_POST['children']."' , employment = '".$_POST['employment']."' , sexuality = '".$_POST['sexuality']."' , age = '".$_POST['age']."' , height = '".$_POST['height']."' ,  weight = '".$_POST['weight']."' ,  vices = '".$vices."' , seeking = '".$seeking."' , user_country = '".$_POST['country']."' , user_state = '".$_POST['state']."', 	user_city = '".$_POST['city']."' , user_zip = '".$_POST['zip']."'   WHERE user_id = '".$_SESSION['user_id']."'");

	if($query){

		echo  '<div class="alert alert-success"><strong>Success!</strong> Profile Updated</div>';

	}

	else{

		echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

	}

}

if($_POST['submit']=="profile_update") {

		$query = mysql_query("UPDATE user SET 	hide_profile = '".$_POST['profile']."'  WHERE user_id = '".$_SESSION['user_id']."'");

		if($query){

			echo  '<div class="alert alert-success"><strong>Success!</strong> Profile Updated</div>';

		}

		else{

			echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

		}

}

if($_POST['submit']=="delete_profile") {

		/*$query = mysql_query("DELETE * FROM user WHERE user_id = '".$_POST['profile_id']."'");

		if($query){

			echo  '<div class="alert alert-success"><strong>Success!</strong> Profile Delete </div>';

		}

		else{

			echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

		}*/



		echo  '<div class="alert alert-success"><strong>Profile Delete Successfully</strong>  </div>';

		//session_destroy();

}



if($_POST['submit']=="delete_image") {

		$sql=mysql_query("select * from user WHERE user_id='".$_SESSION['user_id']."'");

        $row = mysql_fetch_array($sql) ;

        $array = explode(',',$row['user_photo']);

        $pos = array_search($_POST['image_id'] , $array);

        unset($array[$pos]);

        $count = count($array);

        if($count < 0)

        {

        	$image = "";

        }

        else 

        {

        $image=implode(',',$array);

        }





        $sql= mysql_query("UPDATE user SET 	user_photo = '".$image."'  WHERE user_id = '".$_SESSION['user_id']."'");

        if($sql){
            
            unlink("uploads/".$_POST['image_id']);
			echo  '<div class="alert alert-success"><strong>Success!</strong> Profile Image  Updated</div>';

		}

		else{

			echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

		}

        

}

if(isset($_FILES["file"]["type"]))

{

    $pre_filename = time();

    $tmp_filename = $pre_filename.'-'.'_'.md5(uniqid()).$_FILES["file"]["name"];

    $target_dir = "uploads/";

    $target_file = $target_dir . $tmp_filename;

    $uploadOk = 1;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

        $sql=mysql_query("select * from user WHERE user_id='".$_SESSION['user_id']."'");

        $row = mysql_fetch_array($sql) ;

        

       

        if($row['user_photo']==""){

        	$array = $tmp_filename;

        }

        else {

        $array = explode(',',$row['user_photo']);

        $push = array_push($array,$tmp_filename);

        $array=implode(',',$array);

        }

        $query = mysql_query("UPDATE user SET user_photo = '".$array."'  WHERE user_id = '".$_SESSION['user_id']."'");

        if($query){

			echo  '<div class="alert alert-success"><strong>Success!</strong> Profile Image  Updated</div>';

		}

		else{

			echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

		}





    } 

    else 

    {

        echo '<div class="alert alert-danger"><strong>Sorry, there was an error uploading your file</strong> </div>';

    }

}


if($_POST['submit']=="pwdupdate") {

   $query = mysql_query("UPDATE user SET user_email = '".$_POST['emailid']."' ,  user_pass = '".$_POST['pwd']."'  WHERE user_id = '".$_SESSION['user_id']."'");

    if($query){

        echo  '<div class="alert alert-success"><strong>Success!</strong> Profile Updated</div>';

    }

    else{

        echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

    }
}
?>