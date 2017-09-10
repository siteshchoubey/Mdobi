function edit_profile() {

    var ethnicity = $('input[name="ethnicity"]:checked').val();

    var religion = $('input[name="religion"]:checked').val();

    var marital_status = $('input[name="marital_status"]:checked').val();

    var children = $('input[name="children"]:checked').val();

    var employment = $('input[name="employment"]:checked').val();

    var sexuality = $('input[name="sexuality"]:checked').val();

    var age = $('input[name="age"]:checked').val();

    var height = $('input[name="height"]:checked').val();

    var weight = $('input[name="weight"]:checked').val();

    var vices = [];

        $('input[name="vices"]:checked').each(function(i){

          vices[i] = $(this).val();

        });

    //var vices = $('input[name="vices"]:checked').val();

    var country = $('#country-list').val();

    var state = $('#state-list').val();

    var city = $('#city-list').val();

    var zip = $('#zip').val();

    var seeking = [];

        $('input[name="seeking"]:checked').each(function(i){

          seeking[i] = $(this).val();

        });







	var dataString = {'ethnicity' :ethnicity,'religion' :religion,'marital_status':marital_status,'children':children,'employment':employment,

                      'sexuality' :sexuality,'age' :age,'height' :height,'weight' :weight,'vices' :vices,'seeking':seeking,'country':country,'state':state,'city':city,'zip':zip,'submit':'filter'};

	$.ajax({

    url: 'profile_update.php',

    type: "POST",

    data:  dataString,

    success: function(data){ 

      		 $("#response_brought").html(data); 

		      setTimeout(function() {

				$("#response_brought").html('');

			},10000);

    }

    });

}







$(document).ready(function(){

  $("#update_profile_status").on('click',(function(e) {

    var profile = $(this).attr("value");

    var dataString = {'profile':profile,'submit':'profile_update'};

    $.ajax({

    url: 'profile_update.php',

    type: "POST",

    data:  dataString,

    success: function(data){ 

             $("#response_brought").html(data); 

                      setTimeout(function(){

                       window.location.reload(1);

                    }, 2000);

    }

    });



  }));

});



$(document).ready(function(){

  $("#detele_account").on('click',(function(e) {

    var choice = confirm('Do you really want to delete your account?');

    if(choice === true) {

            var profile_id = $(this).attr("value");

            var dataString = {'profile_id':profile_id,'submit':'delete_profile'};

            $.ajax({

            url: 'profile_update.php',

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

   



  }));

});



$(document).ready(function() {

  $("button#detele_image").on('click',(function(e) {

    var choice = confirm('Do you really want to delete your account?');

    if(choice === true) {

            var image_id = $(this).attr("value");

            var dataString = {'image_id':image_id,'submit':'delete_image'};

            $.ajax({

            url: 'profile_update.php',

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

}));

});


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


$(document).ready(function (e) {

  $("#bussiness").on('submit',(function(e) {
    e.preventDefault();

    $.ajax({

                          url: "job_data.php", // Url to which the request is send

                          type: "POST",             // Type of request to be send, called as method

                          data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)

                          contentType: false,       // The content type used when sending data to the server.

                          cache: false,             // To unable request pages to be cached

                          processData:false,        // To send DOMDocument or non processed data file it is set to false

                          success: function(data)   // A function to be called if request succeeds

                          {

                                $("#success").html(data); 


                                

                          }

              });

}));

});





$(document).ready(function (e) {

$("#uploadimage").on('submit',(function(e) {

e.preventDefault();

var msg = setTimeout(function() {

        $("#response_brought").html('');

      },10000);

    

      if ($('#file').get(0).files.length === 0)

      {

           $("#response_brought").html('<div class="alert alert-info">Please Select / Upload your Image</div>'); 

           $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow'); 

           msg;    

      }

      else if(window.File && window.FileReader && window.FileList && window.Blob)

      {

          //get the file size and file type from file input field

          var fsize = $('#file')[0].files[0].size;

          var ftype = $('#file')[0].files[0].type;

          var fname = $('#file')[0].files[0].name;



          var ext = $('#file').val().split('.').pop().toLowerCase();

         
/*
              if(fsize > 1000000)

              {



                  $("#response_brought").html('<div class="alert alert-info">please upload more than 20kb and less than 1mb image in size</div>'); 

                  $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow');  

                  msg;

              }*/

             if(fsize < 20000)

              {



                  $("#response_brought").html('<div class="alert alert-info">please upload less than 20kb image in size</div>'); 

                  $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow');  

                  msg;

              }

              else if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1)

              {

                     $("#response_brought").html('<div class="alert alert-info">please upload image type jpg , png , gif file only</div>'); 

                     $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow'); 

                     msg;

              }

              else

              {

                   $.ajax({

                          url: "profile_update.php", // Url to which the request is send

                          type: "POST",             // Type of request to be send, called as method

                          data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)

                          contentType: false,       // The content type used when sending data to the server.

                          cache: false,             // To unable request pages to be cached

                          processData:false,        // To send DOMDocument or non processed data file it is set to false

                          success: function(data)   // A function to be called if request succeeds

                          {

                                $("#response_brought").html(data); 

                                 setTimeout(function(){

                                   window.location.reload(1);

                                }, 2000);

                                

                          }

                          });

             }



      }

      else

       {

           alert("Please upgrade your browser, because your current browser lacks some new features");

       }

          



}));

});

 

$(document).ready(function (e) {

  $("form#profile-setting").on('submit',(function(e) {
    e.preventDefault();

    var emailid = $('#email').val();

    var pwd = $('#pwd').val();

    var cpwd = $('#cpwd').val();

    var emailRule=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    var msg = setTimeout(function() {

        $("#response_brought").html('');

      },10000);


          if(emailid=="")

          {

              $("#response_brought").html('<div class="alert alert-danger">please Enter Email Id</div>'); 

              $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow');  

              msg;

          }
          else if(emailRule.test(emailid)==false)

          {

               $("#response_brought").html('<div class="alert alert-danger">Must contain a valid Email address</div>'); 

              $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow');  

              msg;

          }
          else if(pwd=="")

          {
                $("#response_brought").html('<div class="alert alert-danger">please Enter Password</div>'); 

              $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow');  

              msg;
          }
          else if(cpwd=="" || cpwd !=pwd)
          {
              $("#response_brought").html('<div class="alert alert-danger">Password and Confirm Password dont match</div>'); 

              $('html, body').animate({scrollTop:$('#response_brought').position().top}, 'slow');  

              msg;
          }
          else
          {
                var dataString = {'emailid' :emailid,'pwd' :pwd,'submit':'pwdupdate'};


                 $.ajax({

                              url: 'profile_update.php',

                              type: "POST",

                              data:  dataString,

                              success: function(data){ 

                                    $("#response_brought").html(data); 

                                    setTimeout(function() {

                                    $("#response_brought").html('');

                                },10000);

                                  setTimeout(function(){

                                   window.location.reload(1);

                                }, 10000);

                              }

                              });


          }

    
}));

});
