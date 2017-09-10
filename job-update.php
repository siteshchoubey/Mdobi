<?php
 session_start();
include('config.php');
error_reporting(0);


if($_FILES['upload']['type']){
      $file_size = $_FILES['upload']['size'];
    $file_type = $_FILES['upload']['type'];
    $file_name= $_FILES['upload']['name'];
    $tmpname=$_FILES['upload']['tmp_name'];

    if (($file_size > 2097152)){      
       echo "<div class='alert alert-success fade in'>File is to large</div>";
    }
    elseif (  
        ($file_type != "application/pdf") &&
        ($file_type != "image/jpeg") &&
        ($file_type != "image/jpg") &&
        ($file_type != "image/gif") &&
        ($file_type != "image/png")    
    ){
        
       echo "<div class='alert alert-success fade in'>
     Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.
</div>";       
    }    
     else
      {
     $filename = uniqid().$file_name;
      $destination="uploads/";
      
       if(move_uploaded_file($tmpname, $destination.$filename)){

			      $query = mysql_query("UPDATE user_job SET employer = '".$_POST['emp']."' , job_title = '".$_POST['job_title']."' , country = '".$_POST['country']."' , state = '".$_POST['state']."' , city = '".$_POST['cities']."' , zip = '".$_POST['zip']."' , job_desc = '".$_POST['des']."' , date = '".$date."' , image = '".$filename."'   WHERE job_id = '".$_POST['job_id']."'");
            if($query)
				     {
				echo "<div class='alert alert-success'>
				   <strong>Success!</strong> Your job update successfully.
				</div>";
				}
			else{
				echo "<div class='alert alert-success'>
			   <strong>Success!</strong> Something wrong.
			</div>";	
			}
       }
       
      }
}
else
{
      $date = date('Y-m-d', strtotime("now"));

	 $query = mysql_query("UPDATE user_job SET employer = '".$_POST['emp']."' , job_title = '".$_POST['job_title']."' , country = '".$_POST['country']."' , state = '".$_POST['state']."' , city = '".$_POST['cities']."' , zip = '".$_POST['zip']."' , job_desc = '".$_POST['des']."' , date = '".$date."'   WHERE job_id = '".$_POST['job_id']."'");
            if($query)
				     {
				echo "<div class='alert alert-success'>
				   <strong>Success!</strong> Your job update successfully.
				</div>";
				}
			else{
				echo "<div class='alert alert-danger'>
			   <strong>Wrong!</strong> Something wrong.
			</div>";
}

}
 ?>