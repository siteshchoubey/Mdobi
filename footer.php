</section>
<div class="container-fluid footerbg">

  <div class="container">

  <div class="row">

  <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
    <nav class="nav footer-nav">
        <ul id="menu-footer-menu" class="menu">
           <li><a href="#">&copy;2016 Mdobi.com</a></li>
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



<script type="text/javascript">

$(document).ready(function(){

  

  $('ul.tabs li').click(function(){
    

    var tab_id = $(this).attr('data-tab');

    var ref_this = $(this).hasClass('isactive');


    if(ref_this)
    {
       

         $(this).removeClass('current');

         $(this).removeClass('isactive');

          $("#"+tab_id).removeClass('current');  
    }
    else
    {
           
          $('ul.tabs li').removeClass('current');

         $('ul.tabs li').removeClass('isactive');

         $('.tab-content').removeClass('current');

         $(this).addClass('current');

         $(this).addClass('isactive');

          $("#"+tab_id).addClass('current');
    }
    

   

  })



   $(document).on('click', function(event) {

      if (!$(event.target).closest('#tab-container').length) {

        $('.tab-content').removeClass('current');
       $('ul.tabs li').removeClass('current');

     $('ul.tabs li').removeClass('isactive');

 

      }

    });



})

</script>

<script type="text/javascript">

$('#type_message').keypress(function(){

    $('#sendmessage').css('visibility','visible');

});

</script>



  

<script>

  $(document).ready(function(){

      $(".login").click(function(){

          

          // $(".dropdown-menu").fadeToggle("slow");

           //s$(".arrow").fadeToggle(900);

          $(".login_box").fadeToggle(1000);



      });



   

  });





  </script>







  <style type="text/css">

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
    margin-top: 10px;

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

  .icon-bar { background-color: #000  !important; }

  .navbar-toggle:hover { background-color: #fff !important; }

  /*.icon-bar:hover {  background-color: #fff !important; }*/

  /*.navbar-inverse .navbar-nav > .active > a { background-color: #b40b63; }

  .navbar-inverse .navbar-nav > .active > a:hover { background-color: #ce3384; }

  .navbar-inverse .navbar-toggle:focus { background-color: #F08FBB; }

  .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus { background-color: #b40b63;  }*/


.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {color: #242424 !important;}
.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a{color : #222;}

  }



  </style>

   <script type="text/javascript" async >

  function genericSocialShare(url){

      var w = 648;

      var h = 395

      var left = (screen.width/2)-(w/2);

      var top = (screen.height/2)-(h/2);

      return window.open(url, 'sharer', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);

  }

  </script>