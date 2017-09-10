$(document).ready(function(){

  $("#myForm").on('submit',(function(e) {

      e.preventDefault();

      var f_name = $('#f_name').val();

      var l_name = $('#l_name').val();

      var dob=$('#datetime24').val();

      var email = $('#email').val();

      var c_email = $('#c_email').val();

      var country = $('#country-list').val();

      var state = $('#state-list').val();

      var city = $('#city-list').val();

      var zip = $('#zip').val();

      var pass=$('#pwd').val();

      var passlen = pass.length;

      var c_pass=$('#c_pwd').val();

      var isChecked = $('#chkSelect').prop('checked');    

      var pos = null;

      pos = $('#dis').offset().top;

      var nameRule=/^[A-Za-z ]+$/;

      var lnameRule=/^[a-zA-Z ]{2,25}$/;

      var emailRule=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

      /*var passRule=/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;*/

      var zipRule=/^[0-9a-zA-Z]+$/;







      if(nameRule.test(f_name)==false)

      {

          $("#dis").html('<div class="alert alert-info">Name should be Only character</div>');

          $("#f_name").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if(lnameRule.test(l_name)==false)

      {

          $("#dis").html('<div class="alert alert-info">Last name should be at least two character</div>');

          $("#l_name").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if(emailRule.test(email)==false)

      {

          $("#dis").html('<div class="alert alert-info">Must contain a valid Email address</div>');

          $("#email").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if(email!=c_email)

      {

          $("#dis").html('<div class="alert alert-info">Email and Confirm Email dont match</div>');

          $("#c_email").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if(pass=="")

      {

          $("#dis").html('<div class="alert alert-info">Password at least Eight characters one number, one lowercase and one uppercase letter digit and spical characters</div>');

          $("#pwd").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if(pass !=c_pass)

      {

          $("#dis").html('<div class="alert alert-info">Password and Confirm Password dont match</div>');

          $("#c_pwd").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if (country =='') 

      {

          $("#dis").html('<div class="alert alert-info">Please select country</div>');

          $("#country-list").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else if (state =='') 

      {

          $("#dis").html('<div class="alert alert-info">Please select State</div>');

          $("#state-list").focus();

          $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

   /*   else if (city =='') 

      {

           $("#dis").html('<div class="alert alert-info">Please select city</div>'); 

           $("#city-list").focus();

           $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }*/

      else if(zipRule.test(zip)==false)

      {

           $("#dis").html('<div class="alert alert-info">Contain only letter and digit</div>'); 

           $("#zip").focus();

           $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      /*else if ($('#file1').get(0).files.length === 0)

      {

           $("#dis").html('<div class="alert alert-info">Please upload your Clear face photo</div>'); 

           $("#file1").focus();

           $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');     

     }

     else if ($('#file2').get(0).files.length === 0)

      {

           $("#dis").html('<div class="alert alert-info">Please upload your Full length body photo</div>'); 

           $("#file2").focus();

           $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');     

     }*/

     else if(isChecked != true)

     {  

           $("#dis").html('<div class="alert alert-info">Please verify the information above to be true</div>'); 

           $("#chkSelect").focus();

           $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');

      }

      else

      {

                $.ajax({
                           url: "user_registration.php", // Url to which the request is send

                          type: "POST",             // Type of request to be send, called as method

                          data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)

                          contentType: false,       // The content type used when sending data to the server.

                          cache: false,             // To unable request pages to be cached

                          processData:false,        // To send DOMDocument or non processed data file it is set to false

                          success: function(data)   // A function to be called if request succeeds

                          {

                                $("#dis").html(data);

                               $('html, body').animate({scrollTop:$('#dis').position().top}, 'slow');
                               //$( '#myForm' ).each(function(){
                                //  this.reset();
                              //});


                                

                          }

            
                });

      }

         

}));



});

