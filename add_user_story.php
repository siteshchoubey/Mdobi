<?php
session_start();

include('config.php');

if($_POST['submit_button']=="publish") {

   //echo "INSERT INTO `user_story` (`id`, `user_id`, `chapter_title`, `chapter_desc`, `status`, `publish_date`) VALUES (NULL, '".$_SESSION['user_id']."', '".$_POST['title']."', '".$_POST['desc']."', '1',now())";

   $query = mysql_query("INSERT INTO `user_story` (`id`, `user_id`, `chapter_title`, `chapter_desc`, `status`, `publish_date`) VALUES (NULL, '".$_SESSION['user_id']."', '".$_POST['title']."', '".$_POST['desc']."', '1',now())");

    if($query){

        echo  '<div class="alert alert-success"><strong>Success!</strong>Your story has been published</div>';

    }

    else{

        echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

    }
}

if($_POST['submit_button']=="update") {

   $query = mysql_query("UPDATE user_story SET chapter_title = '".$_POST['title']."' ,  chapter_desc = '".$_POST['desc']."'  WHERE user_id = '".$_SESSION['user_id']."' and id = '".$_POST['chapter_id']."'");

    if($query){

        echo  '<div class="alert alert-success"><strong>Success!</strong> Story Updated</div>';

    }

    else{

        echo  '<div class="alert alert-danger"><strong></strong> Something Wrong Try Again</div>';

    }
}

?>