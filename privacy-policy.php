 <?php



 session_start();


?>



  <!DOCTYPE html>



  <html>



  <head>



  <title>Mdobi.com</title>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="css/bootstrap.css">



  <link rel="stylesheet" href="css/font-awesome.css">



  <link rel="stylesheet" href="css/style.css">



  <link rel="stylesheet" href="css/flags.css">



  <link rel="stylesheet" href="css/responsive.css">



  <script type="text/jscript" src="js/jquery-1.12.0.min.js"></script>



  <script type="text/jscript" src="js/bootstrap.min.js"></script>



    <script type="text/javascript" src="js/validation.js"></script>



  <script type="text/javascript" src="js/combodate.js"></script> 




  <script src="js/moment.min.js"></script> 



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



<?php



require_once("dbcontroller.php");



$db_handle = new DBController();



$query ="SELECT * FROM countries";



$results = $db_handle->runQuery($query);



?>



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



                        <div class="login">



                          <ul class="nav navbar-nav navbar-right">



                              <li>


                               <?php if(@$_SESSION['user_id']==true) { ?>

                                <i class="fa fa-user" aria-hidden="true"></i> <a href="logout.php"><samp>Log Out</samp></a>

                               <?php } else { ?>

                               <a href="#" id="login"> <i class="fa fa-user" aria-hidden="true"></i> <b>Login</b> <span class="caret"></span></a>

                               <?php } ?>

                            <ul id="login-dp" class="dropdown-menu">



                              <li>



                                 <div class="row">



                                    <div class="col-md-12">



                                       <form class="form" role="form" method="post" action="login.php"  accept-charset="UTF-8" id="login-nav">



                                          <div class="form-group">



                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>



                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address"  name="email" required>



                                          </div>



                                          <div class="form-group">



                                             <label class="sr-only" for="exampleInputPassword2">Password</label>



                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pass"  required>



                                                                   <div class="help-block text-right"><a href="forgot-password.php" target="_blank">Forget the password ?</a></div>



                                          </div>



                                          <div class="form-group">



                                             <button type="submit" class="btn btn-primary  loginbtn" name="login">Sign in</button>



                                          </div>



                                       </form>



                                    </div>



                                 </div>



                              </li>



                            </ul>



                        </div> 



                       </div>



                    </div>



                    <div class="dropdown-toggle"></div>



                      <!-- <div class="login_box">



                        <form action="login.php" method="POST" id="login_form">



                          <div class="top_input">



                            



                          <input value="" id="txtLogin" name="email" type="email" >



                          </div>



                            <input value="" id="txtPassword" name="pass" type="password">



                            <a>Forgot password?</a>



                            <input value="Login" class="loginbtn" type="submit" name="login">



                            </form>



                      </div> -->



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

         <li><a href="index.php">Home</a></li>


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

         <li><a href="index.php">Home</a></li>


      </ul>

    </div>

  </nav>







  </div>









  </div>







  </div>



  </div>



  </div>















<section class="middle">
  <div class="container">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="sub_heading">
    <center><span>mdobi Privacy Policy</span></center>
  </div>
  </div> 
  </div>
  </div>
  </div>

  <div class="container" style="text-align:justify;">
    <div class="row">
       <div class="col-lg-12">
        <p>This privacy policy (this &ldquo;Policy&rdquo;) describes the practices mdobi, and any affiliates (as that term is defined in the British Columbia Business Corporations Act), (collectively &ldquo;we&rdquo;, &ldquo;us&rdquo;, &ldquo;our&rdquo;) with respect to our collection, use, storage and disclosure of personal information provided to us from users of our Website. This Policy forms an integral part of Terms of Use Agreement, which is incorporated by reference. Any capitalized term used but not defined in this Policy will have the meaning defined in the Terms of Use Agreement. <br /> All references to &ldquo;Website&rdquo; in this Policy refer to website located at <a href="http://www.mdobi.com">www.mdobi.com</a></p>
        <p><br /> <strong>INTRODUCTION</strong> <br /> We respect and uphold individual rights to privacy and the protection of personal information. We know how important it is to protect Your personal information and want to make every customer experience safe and secure. In keeping with that goal, we have developed this Policy to explain our practices for the collection, use, and disclosure of Your personal information. <br /> For the purposes of this Policy, &ldquo;personal information&rdquo; means information about an identifiable individual, including, for example, an individual&rsquo;s height, birth date, name, home address, telephone number, social insurance number, sex, income and marital status. We will only collect, use or disclose personal information in accordance with this Policy, or in accordance with laws applicable to the collection, use and disclosure of Your personal information by us (&ldquo;Applicable Privacy Laws&rdquo;). <br /> We have appointed a Privacy Officer who is responsible for our compliance with this Policy. Information on how to contact the Privacy Officer can be found below.</p>
        <p><br /> <strong>COLLECTION AND USE OF PERSONAL INFORMATION</strong> <br /> We collect two types of information through our Website: personal information and non-personal information. The types of information we collect depend on the nature of Your interaction with us. <br /> <strong>Personal information</strong> <br /> We may collect personal information such as:</p>
        <ol>
        <li>Your contact information &ndash; for example, Your name and email address;</li>
        <li>Your personal preferences &ndash; for example, language preferences, and marketing consent; and</li>
        <li>Your profile information &ndash; for example, photographs You upload, and other information You provide in Your personal profile, such as Your interests, marital status, Your height, weight and occupation.</li>
        </ol>
        <p><strong>Non-personal information</strong> <br /> Non-personal information does not identify You as an individual. For example:</p>
        <ol>
        <li>we may collect certain non-personal data when You visit our Website, such as the type of browser You are using or the referring URL; or</li>
        <li>we may collect and summarize customer information in a non-personal, aggregate format for statistical and research purposes. We may, for example, summarize our data to determine that a certain percentage of users are male, aged 18 to 25.</li>
        </ol>
        <p>&nbsp;</p>
        <p>You may choose not to provide us with Your personal information. However, if You make this choice we may not be able to provide You with the service, or information that You requested.</p>
        <p><br /> <strong>USE OF PERSONAL INFORMATION</strong> <br /> We may use Your personal information for a number of different business purposes, for example to:</p>
        <ol>
        <li>create and display Your online profile to other users of the Website;</li>
        <li>compare Your profile and preferences with that of other users to provide both You and other users with potential matches;</li>
        <li>provide customer support to assist You with Your questions or complaints;</li>
        <li>conduct surveys in order to improve our services;</li>
        <li>advise You of changes to our services, or new services that we may implement from time to time;</li>
        <li>measure and improve the effectiveness of our Website or our marketing endeavours;</li>
        <li>detect and protect against fraud and error;</li>
        <li>track and analyze Your preferences to better understand Your service needs and eligibility; and</li>
        <li>for other purposes as described in this Policy.</li>
        </ol>
        <p>We limit the personal information we collect and use to that which is necessary to fulfill our business purposes. We will not collect, sell, distribute or use personal information for any other purposes without Your further consent, except to the extent as required by law or as authorized by Applicable Privacy Laws.</p>
        <p><br /> <strong>YOUR CONSENT</strong> <br /> When You choose to provide us with Your personal information You consent to the use of Your personal information as identified in this Policy and as may be further identified at the time of collection.</p>
        <p><br /> <strong>Express Consent</strong> <br /> Sometimes You will be asked to give Your express consent to our collection, use or disclosure of personal information &ndash; for example, by being asked to check a box to indicate Your consent to receive marketing communications. <br /> </p>
        <p><strong>Implied Consent</strong> <br /> Other times, You may provide Your implied consent to our collection, use or disclosure of personal information when we can reasonably conclude that You have given consent by some action You have taken or an action You have decided not to take. Generally, this occurs where the purpose for the use of Your personal information would be reasonably apparent to You &ndash; for example, when You provide us with personal information through forms to populate Your online profile, You provide us with implied consent to publish that information for other users of the Website to view. <br /> </p>
        <p><strong>Withdrawing Your Consent</strong> <br /> You may notify us at any time that You wish to withdraw or change Your consent to our use and disclosure of Your information. We will accommodate Your request subject to legal and contractual restrictions. <br /> </p>
        <p><strong>INFORMATION WE MAY COLLECT DIRECTLY FROM YOU</strong> <br /> Listed here are some further examples of the ways that we collect personal information directly from You and how we use it. <br /> </p>
        <p><strong>Follow-Up and Surveys</strong> <br /> From time to time, we may send You a follow-up letter to thank You for Your use of the Website, or we may contact You to ensure that You are completely satisfied. <br /> We may use contact information collected online to conduct occasional surveys and other customer research. These surveys are entirely voluntary and You may easily decline to participate. <br /> </p>
        <p><strong>Our Website</strong> <br /> Our Website can be browsed anonymously. However, to engage in certain special features or functions of our Website, You may be asked to provide certain personal information, such as Your email address or demographic information. We use this information to create Your account, contact and correspond with You about Your account, respond to Your inquiries, and monitor functions of our Website that You choose to use. <br /> </p>
        <p><strong>Advertising Campaigns </strong><br /> To supplement our website, we rely on advertisers who wish to serve advertisements to some or all of our users (&ldquo;Campaigns&rdquo;) to generate revenue. We never share Your personal information with our advertisers for their Campaigns. However, we will use elements of Your personal information to create a list of users that advertisers may want to direct their Campaigns to. Advertisers may decide to serve advertisements to all of our users (&ldquo;General Campaigns&rdquo;), or to send messages to specific segments of our user base (&ldquo;Direct Campaigns&rdquo;) based on particular personal characteristics (for example, age, sex or geographic location). In the case of Direct Campaigns, we may use different elements of Your personal preferences to develop and display advertising content tailored to Your preferences. <br /> </p>
        <p><strong>Matching </strong><br /> We use your birth date to generate You a list of Your possible best personality matches from among our other users. <br /> </p>
        <p><strong>Customer Support Centre</strong> <br /> We operate an electronic customer support centre to accept and address Your questions, concerns, or complaints. When You contact our customer support centre, we may ask for personal information to help us respond to Your inquiry or to verify Your identity. For example if You need to make a change to Your account, we will ask for personal information to verify that You are the account holder. We may also monitor or record Your online or telephone discussions with our customer support representatives for training purposes and to ensure service quality. <br /> </p>
        <p><strong>INFORMATION WE COLLECT AUTOMATICALLY </strong><br /> In some cases, we automatically collect certain information. <br /> <br /> </p>
        <p><strong>Our Website </strong><br /> When using our Website, we may collect the Internet Protocol (IP) address of Your computer, the IP address of Your Internet Service Provider, the date and time You access our Website, the Internet address of the web site from which You linked directly to our Website, the operating system You are using, the Internet browser You are using, the sections of the Website You visit, the Website pages read and images viewed, and the content You download from the Website. This information is used for Website and system administration purposes and to improve the Website. <br /> </p>
        <p><strong>Cookies</strong> <br /> The Website uses "cookies", a technology that installs a small amount of information on a Website user's computer to permit the Website to recognize future visits using that computer. Cookies enhance the convenience and use of the Website. For example, the information provided through cookies is used to recognize You as a previous user of the Website, to offer personalized Web page content and information for Your use, and to otherwise facilitate Your Website experience. You may choose to decline cookies if Your browser permits, but doing so may affect Your use of the Website and Your ability to access certain features of the Website or engage in transactions through the Website. <br /> </p>
        <p><strong>Web Site Tracking Information </strong><br /> We may use web beacons or pixel tags to compile tracking information reports regarding Website user demographics, Website traffic patterns, and Website purchases. We may also utilize Google Analytics and its User ID function in the collection, compilation and analysis of this tracking information, which allows us to track your use of our Website across multiple devices. We may then provide these reports to advertisers and others. None of the tracking information in these reports can be connected to the identities or other personal information of individual users. For our own research purposes we may link tracking information with personal information voluntarily provided by Website users. Once such a link is made, all of the linked information is treated as personal information and will be used and disclosed only in accordance with this Policy.<br /> More information on Google Analytics may be found at http://www.google.com/analytics, as amended by Google from time to time.<br /> </p>
        <p><strong>Links to Other websites </strong><br /> Our Website may contain links to other websites or Internet resources which are provided solely for Your convenience and information. When You click on one of those links You are contacting another website or Internet resource. We have no responsibility or liability for, or control over, those other websites or Internet resources or their collection, use and disclosure of Your personal information. We encourage You to read the privacy policies of those other websites to learn how they collect and use Your personal information. <br /> </p>
        <p><strong>SUPPLEMENTING INFORMATION </strong><br /> From time to time we may supplement information You give us with information from other sources, such as information validating Your address or other available information You have provided us. This is to help us maintain the accuracy of the information we collect and to help us provide better service. <br /> </p>
        <p><strong>DISCLOSURE AND SHARING OF YOUR INFORMATION </strong><br /> We do not sell or license Your personal information to any other party. However, in the normal course of business we may share some of Your personal information with our affiliates and with third parties acting on our behalf or as permitted or required by Applicable Privacy Laws. <br /> </p>
        <p><strong>Service Providers </strong><br /> We may use third party service providers (for example, web hosting providers, data management providers and/or payment processers) to manage one of more aspects of our business operations, including the processing or handing of personal information. When we do use an outside company, we use contractual or other appropriate means to ensure that Your personal information is used in a manner that is consistent with this Policy. <br /> <br /> To provide increased availability of the Website, some of these operations may result in personal information collected by mdobi being stored outside Canada and, as a result, such personal information stored outside of Canada may be accessible to law enforcement and regulatory authorities in accordance with applicable laws of countries outside Canada. <br /> </p>
        <p><strong>Information Shared Amongst Our Affiliates, Subsidiaries and Divisions </strong><br /> We may share personal information gathered on our Website with and amongst our corporate subsidiaries, affiliates or divisions for internal business purposes in accordance with this Policy. If we do, we will ensure that Your information continues to be used only in accordance with this Policy and Your expressed choices. <br /> </p>
        <p><strong>Legal Disclosure </strong><br /> We may disclose Your information as permitted or required by law. For example, we may be compelled to release information by a court of law or other person or entity with jurisdiction to compel production of such information. If we have reasonable grounds to believe information could be useful in the investigation of improper or unlawful activity, we may disclose information to law enforcement agencies or other appropriate investigative bodies. <br /> </p>
        <p><strong>SECURITY OF PERSONAL INFORMATION </strong><br /> The security of Your personal information is a high priority for us. We maintain appropriate safeguards and current security standards to protect Your personal information, whether recorded on paper or captured electronically, against unauthorized access, disclosure, or misuse. For example, electronic records are stored in secure, limited-access servers; we employ technological tools like firewalls and passwords; and we ensure the importance of maintaining the security and confidentiality of personal information. Reasonably secure methods are used whenever we destroy personal information. However, no system can be completely secure. While mdobi takes steps to secure Your information, we do not promise, and You should not expect, that Your personal information will always remain secure. <br /> </p>
        <p><strong>REQUESTS FOR ACCESS TO AND CORRECTION OF PERSONAL INFORMATION </strong><br /> Applicable Privacy Laws allows any individual the right to access and/or request the correction of errors or omissions in his or her personal information that is in our custody or under our control. Our Privacy Officer will assist the individual with the access request. This includes:</p>
        <ol>
        <li>identification of personal information under our custody or control; and</li>
        <li>information about how personal information under our control may be or has been used by us.</li>
        </ol>
        <p>&nbsp;</p>
        <p>We will respond to requests within the time allowed by Applicable Privacy Laws and will make every effort to respond as accurately and completely as possible. Any corrections made to personal information will be promptly sent to any organization it was disclosed to. <br /> In certain exceptional circumstances, we may not be able to provide access to certain personal information it holds about an individual. For security purposes, not all personal information is accessible and amendable by the Privacy Officer. If access or corrections cannot be provided, we will notify the individual making the request within 30 days, in writing, of the reasons for the refusal. <br /> </p>
        <p><strong>REMOVAL OF YOUR INFORMATION </strong><br /> We keep Your information only as long as we need it for legitimate business purposes and to meet any legal requirements. Personal information used to make a decision that directly affects an individual will be kept for at least one year after such a decision. We have retention standards that meet these parameters. <br /> </p>
        <p><strong>Changes to this Policy </strong><br /> We will occasionally update this Privacy Policy. When we post changes to this Privacy Policy, we will revise the &ldquo;effective&rdquo; date at the top of this Privacy Policy. We recommend that you check our website from time to time to inform yourself of any changes in this Privacy Policy or any of our other policies.<br /> </p>
        <p><strong>CONCERNS OR QUESTIONS REGARDING OUR COMPLIANCE </strong><br /> Questions or concerns regarding our compliance with this Policy may be directed to the Privacy Officer, Kat Lukkarinen, at mydateofbirthintroductions@gmail.com<br /> </p>
       </div>
    </div>
  </div>
</section>

<div class="container-fluid footerbg">

  <div class="container">

  <div class="row">

  <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
    <nav class="nav footer-nav">
        <ul id="menu-footer-menu" class="menu">
           <li><a href="#">&copy; 2016 Mdobi.com</a></li>
           <li><a href="terms-services.php">Terms of Service</a></li>
           <li><a href="privacy-policy.php">Privacy Policy</a></li>
        </ul> 

<!-- <p><span style="margin:0px 66px 0px 0px; color:#fff;text-align:center;" class="copyright-footer">© 2016 Mdobi.com</span></p> -->

  </nav> 


   </div>
   <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">

                  <div class="social_icon" style="float:right;">

                    <ul>

                      <li><a href="javascript:void(0)" class="facebook customer share" onclick="javascript:genericSocialShare('http://www.facebook.com/sharer.php?u=http://www.mdobi.com')" title="Facebook Share"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)" class="twitter customer share" onclick="javascript:genericSocialShare('http://twitter.com/share?url=http://www.mdobi.com')" title="Twitter Share"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                      <li><a href="javascript:void(0)" class="linkedin customer share" onclick="javascript:genericSocialShare('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.mdobi.com')" title="LinkedIn Share"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                    </ul>

                  </div>

  </div>

  </div>

  </div>

  </div>



  </body>

  </html>






  <script>



  $(document).ready(function(){



      $(".login").click(function(){



          



          // $(".dropdown-menu").fadeToggle("slow");



          //  $(".arrow").fadeToggle(900);



          $(".login_box").slideToggle(1000);







      });







    /*  $('#date1 input').autotab_magic().autotab_filter('numeric');



  $('#date1 input').datepicker()*/



  });











  </script>



  <script type="text/javascript">



  $(function(){



   $('#datetime24').combodate(); 



});



  </script>















  <style type="text/css">



  .login_box{display: none;}



  @media only screen and (min-width:320px) and (max-width:800px){



  .navbar-header {



    float: none;



  }



  .navbar.navbar-inverse{



    display: block !important;



  }



  .navbar-toggle {



    display: block;



  }



  .navbar-collapse.collapse {



    display: none!important;



  }



  .navbar-nav {



    float: none!important;



  }



  .navbar-nav>li {



    float: none;



  }



  .navbar-collapse.collapse.in{



    display:block !important;



  }



  .top_nav{



    display: none;



  }



  .formbg{



    width: 100%;



  }



  .navbar-inverse { background-color: inherit; border-color:#fff; }



  .icon-bar { background-color: #CF2424  !important; }



  .navbar-toggle:hover { background-color: #fff !important; }



  .icon-bar:hover {  background-color: #fff !important; }



  .navbar-inverse .navbar-nav > .active > a { background-color: #b40b63; }



  .navbar-inverse .navbar-nav > .active > a:hover { background-color: #ce3384; }



  .navbar-inverse .navbar-toggle:focus { background-color: #F08FBB;    border-color: #b40b63; }



  .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus { background-color: #b40b63;  }











  }







  </style>



  <script>



$(document).ready(function() {



$("#country-list").on('change', function () {



  var id =  $(this).find('option:selected').attr('id');



    $.ajax({



  type: "POST",



  url: "get_state.php",



  data:'country_id='+id,



  success: function(data){



    $("#state-list").html(data);



  }



  });



    



});











$("#state-list").on('change', function () {



  var id =  $(this).find('option:selected').attr('id');



    $.ajax({



  type: "POST",



  url: "get_city.php",



  data:'state_id='+id,



  success: function(data){



    $("#city-list").html(data);



  }



  });



    



});















});



</script>

<script type="text/javascript" async >

  function genericSocialShare(url){

      var w = 648;

      var h = 395

      var left = (screen.width/2)-(w/2);

      var top = (screen.height/2)-(h/2);

      return window.open(url, 'sharer', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);

  }

  </script>
  <style type="text/css">
  </style>
  <script type="text/javascript">
  $('#login').click(function(){
  $('#login-dp').fadeToggle('slow');
});
  </script> 
