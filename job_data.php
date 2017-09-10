<?php
session_start();
include('config.php');
	$employ=$_POST['emp'];
	$title=$_POST['job_title'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['cities'];
	$zip=$_POST['zip'];
	$desc=$_POST['des'];
	$use_id=$_SESSION['user_id'];
	$date = date('Y-m-d', strtotime("now"));

  if($_POST)
  {
    if($_FILES['upload']['type'])
    {
                  $file_size = $_FILES['upload']['size'];
                  $file_type = $_FILES['upload']['type'];
                  $file_name= $_FILES['upload']['name'];
                  $tmpname=$_FILES['upload']['tmp_name'];
                  $allowed =  array('gif','png' ,'jpg');
                  $ext = pathinfo($file_name, PATHINFO_EXTENSION);

                  if (($file_size > 2097152)){      
                     echo "<div class='alert alert-success fade in'>File is to large</div>";
                  }
                  else if(!in_array($ext,$allowed))
                  {
                      
                    echo "<div class='alert alert-success fade in'>Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.</div>";       
                  }    
                  else
                  {
                           $filename = uniqid().$file_name;
                           $destination="uploads/";
                
                           if(move_uploaded_file($tmpname, $destination.$filename))
                           {

                              $query="INSERT INTO `user_job`(`job_id`,`user_id`,`email`,`employer`, `job_title`, `country`, `state`, `city`, `zip`, `job_desc`,`date`,`image`) VALUES (NULL,'".$_SESSION['user_id']."','".$_SESSION['email']."','$employ','$title','$country','$state','$city','$zip','$desc','$date','$filename')";
                              mysql_query($query);
                              if($query)
                              {
                                     echo "<div class='alert alert-success'><strong>Success!</strong> Your job post successfully.</div>";
                              }
                              else
                              {
                                    echo "<div class='alert alert-success'><strong>Success!</strong> Some thing wrong.</div>";  
                              }
                          }
       
                  }
    }
    else
    {
                              $query="INSERT INTO `user_job`(`job_id`,`user_id`,`email`,`employer`, `job_title`, `country`, `state`, `city`, `zip`, `job_desc`,`date`,`image`) VALUES (NULL,'".$_SESSION['user_id']."','".$_SESSION['email']."','$employ','$title','$country','$state','$city','$zip','$desc','$date','')";
                              mysql_query($query);
                              if($query)
                              {
                                     echo "<div class='alert alert-success'><strong>Success!</strong> Your job post successfully.</div>";
                              }
                              else
                              {
                                    echo "<div class='alert alert-success'><strong>Success!</strong> Some thing wrong.</div>";  
                              }


    }
  }
 

 ?>
 