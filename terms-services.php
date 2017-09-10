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
    <center><span>mdobi TERMS OF USE AGREEMENT</span></center>
  </div>
  </div> 
  </div>
  </div>
  </div>

  <div class="container" style="text-align:justify;">
    <div class="row">
       <div class="col-lg-12">
        <p><strong>DEFINITIONS </strong></p>
        <p>"You" refers to the user of this website and its related services, and as such You have gained the right to use this website by respecting the applicable Terms of Use described in detail below.</p>
        <p>mdobi ("mdobi") is the exclusive owner and operator of mdobi.com (the "Website").</p>
        <p>As used in this Terms of Use Agreement, "we" and "us" means mdobi or any successor, subsidiary, division or assign of mdobi.</p>
        <p>"Service(s)" refers to Your use of the Website for any purpose whatsoever.</p>
        <p><strong>OVERVIEW </strong></p>
        <p>This Terms of Use Agreement (the "Agreement") sets forth the terms and conditions that apply to Your use of the Website and all services offered by mdobi. By completing the subscription process You are indicating that You agree to be bound by all of the terms in this Agreement. Please print and keep a copy of this Agreement for Your records. By accessing the Website or using any Services, You consent to receive this Agreement electronically.</p>
        <p>We reserve the right to modify this Agreement at any time. Such modified Agreement will become effective and will apply to Your subscription upon our posting such Agreement to the Website. Your continued use of our Service after such a modification has been posted shall be deemed to constitute acceptance by You of any such modified Agreement. It is Your obligation to review the Agreement and to become aware of any modifications.</p>
        <p><strong>ELIGIBILITY </strong></p>
        <p>You must be 18 years of age or older to visit or use this Website or the Services in any manner. By visiting the Website or accepting these Terms of Use, You represent and warrant to mdobi that You: (i) are 18 years of age or older, and that You have the right, authority and capacity to agree to and abide by the Agreement; (ii) will use the Website in a manner consistent with any and all applicable laws and regulations; and (iii) have not been convicted of any felony and are not required to register as a sex offender with any government authority.</p>
        <p><strong>USER AGREEMENT </strong></p>
        <p>This Agreement constitutes Your agreement with mdobi with respect to Your use of the Service. You must abide by all of the terms and conditions of the Agreement in order to become or remain an authorized user of the Service.</p>
        <p><strong>RIGHT TO USE </strong></p>
        <p>Your right to use the Service is subject to any limitations, conditions and restrictions established by us from time to time, in our sole discretion. We may alter, suspend or discontinue any aspect of the Service at any time, including the availability of any Service feature, database or content. We may also impose limits on certain features and aspects of the Service or restrict Your access to parts or all of the Service without notice or liability and for any reason.</p>
        <p><strong>CODE OF CONDUCT </strong></p>
        <p>You agree to use the Service in accordance with the following Code of Conduct:</p>
        <ol>
        <li>You will keep all information provided to You through the Service as private and confidential and will not give such information to anyone without the permission of the person who provided it to You.</li>
        <li>You will not use the Service to engage in any form of harassment or offensive behavior, including but not limited to the posting of communications, pictures or recordings which contain libelous, slanderous, abusive or defamatory statements, or racist, pornographic, obscene, or otherwise offensive language.</li>
        <li>You will not forward chain letters through the Service.</li>
        <li>You will not use the Service to infringe the privacy rights, property rights, or any other rights of any person.</li>
        <li>You will not post messages, pictures or recordings or use the Service in any way that;</li>
        </ol>
        <ol>
        <li>violates, plagiarizes or infringes upon the rights of any third party, including but not limited to any copyright or trade-mark law, privacy or other personal or proprietary rights, or</li>
        <li>is fraudulent or otherwise unlawful or violates any law.</li>
        </ol>
        <ol start="2">
        <li>You will not use the Service to distribute, promote or otherwise publish any material containing any solicitation for funds, advertising or solicitation for goods or services. Parties responsible for the distribution, promotion or publication of any material containing any solicitation for funds, advertising or solicitation for goods or services agree to pay mdobi One Thousand US Dollars ($1000.00) per account involved with such activities to cover expenses involved with investigation and prosecution of such activities.</li>
        <li>You will not use the Service to distribute or upload any virus, or malicious software of any type, or do anything else that might cause harm to the Service, the Website, mdobi, its systems, or any other members' systems in any way.</li>
        <li>You will not post or transmit in any manner any contact information including but not limited to email addresses, "instant messenger" nicknames or contact information, telephone numbers, postal addresses, URLs, and full names through publicly posted information on the Website and through its Services.</li>
        <li>You will not cause the Service to be accessed through any automated or robotic means, including but not limited to the rapid access of the site as in a denial-of-service attack. Such restriction shall not apply to legitimate search engine activity that does not place an unreasonable burden on the Service.</li>
        <li>You will not use a third-party application such as a mobile smart phone application, social media or other Web page widget, or any other such mobile, social media, Web, or desktop application to access the Service, except where such application is either provided by us or endorsed by us. Such restriction shall not apply to a browser application which merely displays the pages of the Service in their entirety without modification or reformulation of content.</li>
        </ol>
        <p><strong>MONITORING OF INFORMATION </strong></p>
        <p>We may use third-party advertising companies, such as Yahoo!, Google, and Microsoft, to serve ads when you visit our website. These companies may use information about your interests in order to provide advertisements about goods and services of interest to you.</p>
        <p>We reserve the right to monitor all advertisements, public postings and messages to ensure that they conform to content guidelines that are monitored by us and subject to change from time to time.</p>
        <p><strong>REMOVAL OF INFORMATION </strong></p>
        <p>We do not and cannot review all profiles, public postings, messages or other materials posted or sent by users of the Service. We are not responsible for any of the content of these profiles, public postings, messages or other materials. We reserve the right, but are not obligated to, delete, move or edit profiles, public postings, messages and other materials that we, in our sole discretion, deem to be in violation of the Code of Conduct as set out above or any other applicable content guidelines or deem to be otherwise unacceptable. You shall remain solely responsible for the content of profiles, public postings, messages and other materials You may upload to the Service.</p>
        <p><strong>TERMINATION OF ACCESS TO SERVICE </strong></p>
        <p>We may, in our sole discretion, terminate or suspend Your access to all or part of the Service at any time, with or without notice, for any reason, including, without limitation, breach of this Agreement. Without limiting the generality of the foregoing, any fraudulent, abusive, or otherwise illegal activity that may otherwise affect the enjoyment of the Service or the Internet by others may be grounds for termination of Your access to all or part of the Service at our sole discretion, and You may be referred to appropriate law enforcement agencies.</p>
        <p><strong>PROPRIETARY INFORMATION </strong></p>
        <p>The Service contains information which is proprietary to us, our partners, and our users. We assert full copyright protection in the Service. Information posted by us, our partners or users of the Service may be protected whether or not it is identified as proprietary to us or to them. You agree not to modify, copy or distribute any such information in any manner whatsoever without having first received the express written permission of the owner of such information.</p>
        <ol>
        <li>
        <p><strong>NO RESPONSIBILITY </strong></p>
        <p>You acknowledge that we are not responsible for interruption or suspension of the Service, regardless of the cause of the interruption or suspension.</p>
        <p><strong>SECURITY </strong></p>
        <p>You are responsible for maintaining the confidentiality of Your email and password, and You should not allow anyone to use Your password to access any Services. You are responsible for all usage or activity on the Service by users using Your password, including but not limited to use of Your password by any third party. You agree to immediately notify mdobi of any unauthorized use of Your email or password or any unauthorized access to Your account. For Your own security, it is advisable to log out when You finish each use of the Services, especially if You are using a public computer or share a computer with others. When logging into the Services using a public computer please use caution to prevent other people from learning Your email and password.</p>
        <p><strong>INTERACTIONS WITH OTHER MEMBERS </strong></p>
        <p><strong>YOU ARE SOLELY RESPONSIBLE FOR YOUR INTERACTIONS WITH OTHER MEMBERS. YOU UNDERSTAND THAT mdobi CURRENTLY DOES NOT CONDUCT CRIMINAL BACKGROUND CHECKS ON ITS MEMBERS. mdobi ALSO DOES NOT INQUIRE INTO THE BACKGROUNDS OF ALL OF ITS MEMBERS OR ATTEMPT TO VERIFY THE STATEMENTS OF ITS MEMBERS. mdobi MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE CONDUCT OF MEMBERS OR THEIR COMPATIBILITY WITH ANY CURRENT OR FUTURE MEMBERS. mdobi RESERVES THE RIGHT TO CONDUCT ANY CRIMINAL BACKGROUND CHECK OR OTHER SCREENINGS (SUCH AS SEX OFFENDER REGISTER SEARCHES), AT ANY TIME AND USING AVAILABLE PUBLIC RECORDS.</strong></p>
        <p><strong>IN NO EVENT SHALL mdobi BE LIABLE FOR ANY DAMAGES WHATSOEVER, WHETHER DIRECT, INDIRECT, GENERAL, SPECIAL, COMPENSATORY, CONSEQUENTIAL, AND/OR INCIDENTAL, ARISING OUT OF OR RELATING TO THE CONDUCT OF YOU OR ANYONE ELSE IN CONNECTION WITH THE USE OF THE SERVICE, INCLUDING WITHOUT LIMITATION, BODILY INJURY, EMOTIONAL DISTRESS, AND/OR ANY OTHER DAMAGES RESULTING FROM COMMUNICATIONS OR MEETINGS WITH OTHER REGISTERED USERS OF THIS SERVICE OR PERSONS YOU MEET THROUGH THIS SERVICE. YOU AGREE TO TAKE REASONABLE PRECAUTIONS IN ALL INTERACTIONS WITH OTHER MEMBERS OF THE SERVICE, PARTICULARLY IF YOU DECIDE TO MEET OFFLINE OR IN PERSON. YOU UNDERSTAND THAT mdobi MAKES NO GUARANTEES, EITHER EXPRESS OR IMPLIED; REGARDING YOUR ULTIMATE COMPATIBILITY WITH INDIVIDUALS YOU MEET THROUGH THE SERVICE. YOU SHOULD NOT PROVIDE YOUR FINANCIAL INFORMATION (FOR EXAMPLE, YOUR CREDIT CARD OR BANK ACCOUNT INFORMATION) TO OTHER MEMBERS.</strong></p>
        <p><strong>&nbsp;</strong></p>
        <p><strong>&nbsp;</strong></p>
        <p><strong>EXTERNAL LINKS </strong></p>
        <p>The Service may contain links to other Internet sites and resources ("External Links"). You acknowledge that we are not responsible for and have no liability as a result of the availability of External Links or their contents. We suggest that You review the terms of use and privacy statements of such External Links prior to using them.</p>
        <p>You understand that by using any of the External Links, You may encounter content that may be deemed offensive, indecent, or objectionable, which content may or may not be identified as having explicit language, and that the results of any search or entering of a particular URL may automatically and unintentionally generate links or references to objectionable material. Nevertheless, You agree to use the External Links at Your sole risk and that mdobi shall not have any liability to You for content that may be found to be offensive, indecent, or objectionable. It shall be Your sole and exclusive obligation to prevent children and other persons from viewing or accessing any inappropriate content that may be included in or available through any External Links.</p>
        <p>By using External Links, You acknowledge and agree that mdobi is not responsible for examining or evaluating the content, accuracy, completeness, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect of such materials at External Links. mdobi does not warrant or endorse and does not assume and will not have any liability or responsibility to You or any other person for any External Links or for any other materials, products, or services of third parties.</p>
        <p>mdobi shall not be responsible for the contents of, updates to, or privacy practices of third parties operating External Links, which may differ from those of mdobi. The personal data You may choose to give to such third parties are not covered by mdobi's privacy policies. Some third party companies may choose to share their personal data with mdobi, in which case such data sharing shall be governed by that third party's privacy policy.</p>
        <p>You understand and agree that your use of External Links may result in harmful or unwanted content or malicious software infecting or interacting with your computer or mobile device. You accept all risk in connection with such External Links, and you agree that mdobi shall have no responsibility to you in the event your computer or mobile device is affected in any way by your use of External Links.</p>
        <p>&nbsp;</p>
        </li>
        </ol>
        <ol>
        <li>
        <p><strong>MAKING CLAIMS OF COPYRIGHT INFRINGEMENT </strong></p>
        <p>If You believe that any material or content distributed by mdobi constitutes copyright infringement, please provide us with the following information: an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest; a description of the copyrighted work that You claim has been infringed; a description of where the material that You claim is infringing is located on our Website; Your address, telephone number and email address; a written statement by You that You have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; a statement by You, made under penalty of perjury, that the above information in Your notice is accurate and that You are the copyright owner or authorized to act on the copyright owner's behalf.</p>
        <p><strong>DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY </strong></p>
        <p><strong>YOU UNDERSTAND AND AGREE THAT YOU USE THE WEBSITE AND SERVICES AT YOUR OWN RISK. SERVICES ARE PROVIDED ON AN "AS IS" BASIS WITHOUT REPRESENTATIONS OR WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO WARRANTIES OF TITLE, NON-INFRINGEMENT, OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, OTHER THAN THOSE WARRANTIES WHICH ARE INCAPABLE OF EXCLUSION UNDER LAW.</strong></p>
        <p><strong>mdobi PROVIDES ON-LINE INTRODUCTION SERVICES AND TOOLS TO ANYONE AS WELL AS FORUMS FOR DISCUSSION AND COMMENTARIES TO SUBSCRIBERS THROUGH THE WEBSITE AND OTHER MEANS OF DISTRIBUTION. mdobi DOES NOT GUARANTEE THE ACCURACY, COMPLETENESS, OR TIMELINESS OF, OR OTHERWISE ENDORSE ANY INFORMATION CONTAINED ON THE WEBSITE. DUE TO THE NUMBER OF SOURCES FROM WHICH CONTENT DISTRIBUTED BY mdobi IS OBTAINED, THERE MAY BE DELAYS, OMISSIONS OR INACCURACIES IN SUCH CONTENT. WE DO NOT REPRESENT OR ENDORSE THE ACCURACY OR RELIABILITY OF ANY MEMBER PROFILE, ADVICE, OPINION, STATEMENT OR OTHER INFORMATION DISPLAYED, UPLOADED OR DISTRIBUTED THROUGH THE SERVICE BY mdobi, OUR PARTNERS OR ANY USER OF THE SERVICE OR ANY OTHER PERSON OR ENTITY. YOU ACKNOWLEDGE THAT ANY RELIANCE UPON ANY SUCH OPINION, MEMBER PROFILE, ADVICE, STATEMENT OR INFORMATION SHALL BE AT YOUR SOLE RISK. YOUR CONTINUED USE OF THE SERVICE NOW, OR FOLLOWING THE POSTING OF NOTICE OF ANY CHANGES IN THIS AGREEMENT, WILL CONSTITUTE A BINDING ACCEPTANCE BY YOU OF THIS AGREEMENT, OR ANY SUBSEQUENT MODIFICATIONS.</strong></p>
        <p><strong>YOU HEREBY ACKNOWLEDGE AND AGREE THAT UNDER NO CIRCUMSTANCES WILL mdobi, ITS OFFICERS, DIRECTORS, EMPLOYEES, AGENTS AND THIRD PARTY CONTENT PROVIDERS OR LICENSORS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY LOSS WHATSOEVER CAUSED BY YOUR USE OR RELIANCE ON INFORMATION OBTAINED THROUGH THE CONTENT DISTRIBUTED BY mdobi AS WELL AS ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE OR CONSEQUENTIAL DAMAGES OR INJURY ARISING OUT OF THE USE OR INABILITY TO USE THE SERVICE OR OUT OF THE BREACH OF ANY WARRANTY, OR CAUSED BY ANY FAILURE OF PERFORMANCE, ERROR, OMISSION, INTERRUPTION, DELETION, DEFECT, DELAY IN OPERATION OR TRANSMISSION, COMPUTER VIRUS, COMMUNICATION LINE FAILURE, THEFT OR DESTRUCTION OR UNAUTHORIZED ACCESS TO AND/OR ALTERATION OF THE WEBSITE, NO MATTER WHETHER SUCH CLAIMS ARE BASED IN CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR ANY OTHER CAUSE OF ACTION, AND REGARDLESS OF WHETHER mdobi HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</strong></p>
        <p><strong>SOME JURISDICTIONS LIMIT THE AVAILABILITY OF SUCH LIMITATION OF LIABILITY, IN WHICH CASE THE PROVISIONS OF THIS SECTION MAY NOT APPLY TO YOU. NOTWITHSTANDING THE FOREGOING, IN NO EVENT SHALL OUR LIABILITY EXCEED THE SUM OF FIFTY U.S. DOLLARS ($50.00).</strong></p>
        <p><strong>EACH PARTY AGREES THAT EACH OF US MAY BRING CLAIMS AGAINST THE OTHER ONLY ON AN INDIVIDUAL BASIS AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE ACTION OR PROCEEDING. UNLESS BOTH PARTIES AGREE OTHERWISE, NO CLAIM MAY BE CONSOLIDATED OR JOINED WITH MORE THAN ONE PERSON&rsquo;S OR PARTY&rsquo;S CLAIMS. UNLESS BOTH PARTIES AGREE OTHERWISE, NEITHER PARTY MAY JOIN ANY CONSOLIDATED, REPRESENTATIVE, OR CLASS PROCEEDING. UNLESS BOTH PARTIES AGREE OTHERWISE, EITHER PARTY MAY ONLY SEEK AND/OR ACCEPT AN AWARD OF RELIEF (INCLUDING MONETARY, INJUNCTIVE, AND/OR DECLARATORY RELIEF) IN FAVOR OF THE INDIVIDUAL SEEKING RELIEF AND ONLY TO THE EXTENT NECESSARY TO PROVIDE RELIEF NECESSITATED BY THAT PARTY&rsquo;S INDIVIDUAL CLAIM(S).</strong></p>
        <p>&nbsp;</p>
        <p><strong>INDEMNITY </strong></p>
        <p>You hereby agree to indemnify, defend and hold harmless mdobi and all officers, directors, owners, agents, information providers, affiliates, licensors and licensees (collectively, the "Indemnified Parties") from and against any and all liability and costs, including, without limitation, reasonable attorneys' fees, incurred by the Indemnified Parties in connection with any claim arising out of any breach by You of this Agreement or the foregoing representations, warranties and covenants. You shall cooperate as fully as reasonably required in the defense of any such claim. mdobi reserves the right, at its own expense, to assume the exclusive defense and control of any matter subject to indemnification by You.</p>
        </li>
        </ol>
        <ol>
        <li>
        <p><strong>MISCELLANEOUS </strong></p>
        <p>This Agreement represents the entire agreement between You and mdobi regarding the use of our Services and supersedes any other agreement or understanding on the subject matter. This Agreement, Your rights and obligations, and all actions contemplated by this Agreement shall be governed by the laws of the Province of British Columbia, Canada. As a condition of using the Services, each user agrees that any and all disputes and causes of action arising out of or connected with mdobi, shall be resolved through arbitration, with such arbitration to be held in Vancouver, British Columbia, Canada.</p>
        <p>Additionally, except where prohibited by law, as a condition of using the Services, You agree that any and all disputes and causes of action arising out of or connected to our Services shall be resolved individually, without resort to any form of class action. You also agree that regardless of any statute or law to the contrary, any claim or cause of action arising from or related to the use of the Services must be filed within one (1) year after such claim or cause of action arose or be forever barred. The failure of either party to exercise, in any respect, any right provided for herein shall not be deemed a waiver of any further rights hereunder.</p>
        <p>If any provision of this Agreement is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary so that this Agreement shall otherwise remain in full force and effect and be enforceable. You may not assign, transfer or sublicense this Agreement without the prior written consent of mdobi. mdobi may assign this Agreement in whole or in part. No agency, partnership, joint venture, or employment is created as a result of this Agreement. Headings are for convenience only and have no legal or contractual effect. All notices under this Agreement shall be in writing and shall be deemed to have been duly given when receipt is electronically confirmed, if transmitted by facsimile or email or upon receipt, if sent by certified or registered mail, return receipt requested.</p>
        <p>&nbsp;</p>
        <p>Copyright 2016, mdobi and My Date of Birth Introductions, www.mdobi.com are registered trademarks of mdobi</p>
        </li>
        </ol>
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
