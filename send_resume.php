<?php
error_reporting(0);
session_start();
    //$from_email = $_SESSION['email']; 
    $recipient_email = $_POST['user_email'];
    //$recipient_email = 'braj.kishore@fiduciainfotech.com'; 
    $subject="New Job Applied"; 
    $message = 'Resume';
   
    //get file details we need
    $file_tmp_name    = $_FILES['resume']['tmp_name'];
    $file_name        = $_FILES['resume']['name'];
    $file_size        = $_FILES['resume']['size'];
    $file_type        = $_FILES['resume']['type'];
    $file_error       = $_FILES['resume']['error'];

    $allowedExts = array("pdf", "doc", "docx");
    $extension = end(explode(".", $_FILES["resume"]["name"]));
    if (!(in_array($extension, $allowedExts)))
    {
            echo "<div class='alert alert-danger'><strong>file type Not allowed!!!</strong> </div>";

    }
    else
    {
                        $handle = fopen($file_tmp_name, "r");
                        $content = fread($handle, $file_size);
                        fclose($handle);
                        $encoded_content = chunk_split(base64_encode($content));


                        $boundary = md5("brajsingh");
                        //header
                        $headers = "MIME-Version: 1.0\r\n";
                        $headers .= "From:".$from_email."\r\n";
                        $headers .= "Reply-To: ".$user_email."" . "\r\n";
                        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
                       
                        //plain text
                        $body = "--$boundary\r\n";
                        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
                        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
                        $body .= chunk_split(base64_encode($message));
                       
                        //attachment
                        $body .= "--$boundary\r\n";
                        $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
                        $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
                        $body .="Content-Transfer-Encoding: base64\r\n";
                        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
                        $body .= $encoded_content;
                   
                        $sentMail = @mail($recipient_email, $subject, $body, $headers);
                        if($sentMail)
                        {     
                            echo "<div class='alert alert-sucess'><strong>Resume Uploaded Succesfully</strong> </div>";
                        }
                        else
                        {
                             echo "<div class='alert alert-danger'><strong>Resume not send</strong> </div>";
                        }


      }

      
   
    //$user_email = filter_var($_SESSION['email'], FILTER_SANITIZE_EMAIL);

  
    

?>