<?php



 session_start();


?>



  <!DOCTYPE html>



  <html>



  <head>



  <title>Dating</title>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="../css/bootstrap.css">



  <link rel="stylesheet" href="../css/font-awesome.css">



  <link rel="stylesheet" href="../css/style.css">



  <link rel="stylesheet" href="../css/flags.css">



  <link rel="stylesheet" href="../css/responsive.css">



  <script type="text/jscript" src="../js/jquery-1.12.0.min.js"></script>



  <script type="text/jscript" src="../js/bootstrap.min.js"></script>



    <script type="text/javascript" src="../js/validation.js"></script>



  <script type="text/javascript" src="../js/combodate.js"></script> 




  <script src="../js/moment.min.js"></script> 



  </head>

<style type="text/css">
body p { font-size: 18px;}
body ol li { font-size: 18px;}
</style>

  <body>



<script type="text/javascript">



/*$(document).ready(function() { 



            // bind 'myForm' and provide a simple callback function 



            $('#myForm').ajaxForm(function() { 



                 $('#dis').slideDown().html("<span> Registered successfully</span>");



                       setTimeout(function () { $("#dis").fadeOut(); }, 5000);



                      



                      $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');



                      return false;



            }); 



        }); */







</script>



 <script type="text/javascript">



// $(document).ready(function() { 



//             // bind 'myForm' and provide a simple callback function 



//             $('#login_form').ajaxForm(function() { 



//                 alert("you have successfully login"); 



//             }); 



//         }); 







// </script>





  <div class="container-fluid top_header">



          <div class="container">



            <div class="row">



              <div class="col-lg-4 col-xs-4 col-sm-4">



                  <div class="social_icon">

                    <ul>

                      <li><a href="javascript:void(0)"  class="facebook customer share" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=http://www.mdobi.com')" title="Facebook Share"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)"  class="twitter customer share" onclick="javascript:genericSocialShare('http://twitter.com/share?url=http://www.mdobi.com')" title="Twitter Share"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)"  class="linkedin customer share" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.mdobi.com')" title="LinkedIn Share"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                    </ul>

                  </div>



                  </div>

















                <div class="col-lg-8 col-xs-8 col-sm-8">



                    <div class="login_bg">



                        <div class="languagebg"> 



                          <i class="flag flag-us"></i><span>English</span>



                        </div>



                      



                       </div>



                    </div>



                 



                </div>



          </div>  



  </div>



  <div class="container_fluid sub_top">



  <div class="container">



  <div class="row">



  <div class="col-sm-4">



   <div class="logo"><p style="color:#242424;font-size: 30px;"><a style="color:#242424;" href="mdobi-content.php">mdobi.com</a></p></div></div>

<div class="col-xs-12 col-sm-8  col-lg-8 col-md-8">

      <div class="top_nav">

      <ul>

         <li><a href="../index.php">Home</a></li>


      </ul>



        </div>

     



  <nav class="navbar navbar-inverse" style="display:none;">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

    </div>

    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav">

         <li><a href="../index.php">Home</a></li>


      </ul>

    </div>

  </nav>







  </div>









  </div>







  </div>



  </div>



  </div>














<?php 
include ('../config.php');
$query = mysql_query("select * from user order by user_id desc");
?>
<section class="middle">
    <div class="container-fluid matter">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <span>Registered User</span>
    <div id="response_brought"></div>
  </div>
  </div> 
  </div>
  </div>
  </div>
 <div class="container">
  <div class="row">
  <div class="col-lg-12">
   <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>Ethnicity</th>
                <th>Religion</th>
                <th>Marital Status</th>
                <th>Employment</th>
                <th></th>
            </tr>
        </thead>
       
        <tbody>
        <?php
        while($row= mysql_fetch_array($query)){ 
        ?>
            <tr>
                <td><?php  echo $row['user_name']; ?></td>
                <td><?php  echo $row['user_email']; ?></td>
                <td><?php  echo $row['ethnicity']; ?></td>
                <td><?php  echo $row['religion']; ?></td>
                <td><?php  echo $row['marital_status']; ?></td>
                <td><?php  echo $row['employment']; ?></td>
                <!-- <td><a href="edit.php?id=<?php //echo  $row['user_id'];?>)"><i class="glyphicon glyphicon-pencil"></i></a></td> -->
                <td><a href="javascript:delete_id('<?php echo $row['user_id']; ?>')">Delete</a></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
</div>
</div>
</section>
<?php include '../footer.php';?>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
 <script type="text/javascript">
    function delete_id(id)
    {
        
         var choice = confirm('Do you really want to delete your account?');

          if(choice === true) {

            var profile_id = $(this).attr("id");

            var dataString = {'profile_id':id,'submit':'delete_profile'};

            $.ajax({

            url: 'delete_record.php',

            type: "POST",

            data:  dataString,

            success: function(data){ 

                     $("#response_brought").html(data); 

                      setTimeout(function(){

                       window.location.reload(1);

                    }, 2000);

            }

            });

    }

    return false;

    }
</script>
