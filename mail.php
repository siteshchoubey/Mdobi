<?php include('header.php');?>

<div id="loading"></div>

<section class="middle">

<section class="middle">

  <div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-xs-12 col-sm-12 lines">

                <div class="sub_heading">

                    <span>Mail Received </span>

                </div>

                <div id="receivemail"></div>

            </div>

            <div class="col-lg-6 col-xs-12 col-sm-12">

                <div class="sub_heading">

                    <span>Mail Send </span>

                </div>

                <div id="sendmail"></div>

            </div>

        </div>

    </div>

  </div>

</section>

<div id="lightbox"></div>

<?php include 'footer.php';?>



<script>

  

  function getreceivemail(url) {    

    var rowcount = $("#rowcount").val();

    var dataString = {'rowcount' :rowcount};

      

   



  $.ajax({

    url: url,

    type: "POST",

    data:  dataString,

    success: function(data)

    { 

      $("#receivemail").html(data);





    }

     });

  }

  getreceivemail("receivemail.php");

  </script>



  <script>

  

  function getsendmail(url) {    

    var rowcount = $("#rowcount").val();

    var dataString = {'rowcount' :rowcount};

      

   



  $.ajax({

    url: url,

    type: "POST",

    data:  dataString,

    success: function(data)

    { 

      $("#sendmail").html(data);





    }

     });

  }

  getsendmail("sendmail.php");

  </script>

  

 

