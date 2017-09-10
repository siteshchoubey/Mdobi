<?php include('header.php');?>

<section class="middle">

    <div class="container-fluid matter">

  <div class="container">

  <div class="row">

  <div class="col-lg-12">

  <div class="sub_heading">

    <span>Introduce me to Family (filter options)</span>

  </div>

  </div> 

  </div>

  </div>

  </div>

   <form name="frmSearch" method="post" action="">

  <input type="hidden" name="zodiac_signs" value="<?php echo @$_SESSION['zodiac_signs']; ?>">

  <div class="container">

    <div class="row">

        <div class="col-lg-12">

          <div id="tab-container">

          <ul class="tabs">

            <li class="tab-link" data-tab="tab-1">Ethnicity</li>

            <?php include 'include/friends/ethnicity.php';?>

            <li class="tab-link" data-tab="tab-2">Religion</li>

            <?php include 'include/friends/religion.php';?>

            <li class="tab-link" data-tab="tab-3">Marital Status</li>

            <?php include 'include/friends/marital-status.php';?>

            <li class="tab-link" data-tab="tab-4">Children</li>

            <?php include 'include/friends/children.php';?>

            <li class="tab-link" data-tab="tab-5">Employment</li>

            <?php include 'include/friends/employment.php';?>

          </ul>

          <ul class="tabs">

            <li class="tab-link" data-tab="tab-6">Sexuality</li>

            <?php include 'include/friends/sexuality.php';?>

            <li class="tab-link" data-tab="tab-7">Age</li>

            <?php include 'include/friends/age.php';?>

            <li class="tab-link" data-tab="tab-8">Height</li>

            <?php include 'include/friends/height.php';?>

            <li class="tab-link" data-tab="tab-9">Weight</li>

            <?php include 'include/friends/weight.php';?>

            <li class="tab-link" data-tab="tab-10">Vices</li>

            <?php include 'include/friends/vices.php';?>

          </ul>

           <ul class="tabs">

            <li class="tab-link" data-tab="tab-11">Country</li>

            <?php include 'include/friends/country.php';?>

            <li class="tab-link" data-tab="tab-12">State/Province</li>

            <?php include 'include/friends/state-province.php';?>

            <li class="tab-link" data-tab="tab-13">City/Town</li>

            <?php include 'include/friends/city-town.php';?>

            <li class="tab-link" data-tab="tab-14">Zip/Postal Code</li>

            <?php include 'include/friends/zippostalcode.php';?>

            <li class="tab-link" data-tab="tab-15">Search All</li>

            <?php include 'include/friends/seeking.php';?>

          </ul>

      </div>

    </div>

          <div class="col-lg-12">

          <button type="button" class="btn btn-danger save_profile" id="search" >Save Search</button>

          </div>

      </div>

  </div>

</form>

<div id="loading" ></div>

<div id="toys-grid"></div>

<div id="lightbox"></div>

</section>

<?php include 'footer.php';?>



<script>

  

  function getresult(url) {    

      

    var ethnicityarray = new Array();   

    $('input[name="ethnicity"]:checked').each(function(){      

      ethnicityarray.push($(this).val());   

    });

    var religionarray = new Array();   

    $('input[name="religion"]:checked').each(function(){      

      religionarray.push($(this).val());   

    });

    var marital_statusarray = new Array();   

    $('input[name="marital_status"]:checked').each(function(){      

      marital_statusarray.push($(this).val());   

    });

    var childrenarray = new Array();   

    $('input[name="children"]:checked').each(function(){      

      childrenarray.push($(this).val());   

    });

    var employmentarray = new Array();   

    $('input[name="employment"]:checked').each(function(){      

      employmentarray.push($(this).val());   

    });

    var sexualityarray = new Array();   

    $('input[name="sexuality"]:checked').each(function(){      

      sexualityarray.push($(this).val());   

    });

    var agearray = new Array();   

    $('input[name="age"]:checked').each(function(){      

      agearray.push($(this).val());   

    });

    var heightarray = new Array();   

    $('input[name="height"]:checked').each(function(){      

      heightarray.push($(this).val());   

    });

    var weightarray = new Array();   

    $('input[name="weight"]:checked').each(function(){      

      weightarray.push($(this).val());   

    });

    var vicesarray = new Array();   

    $('input[name="vices"]:checked').each(function(){      

      vicesarray.push($(this).val());   

    });

    

      var seekingarray = new Array();   

    $('input[name="seeking"]:checked').each(function(){      

      seekingarray.push($(this).val());   

    });







    var rowcount = $("#rowcount").val();

    var ethnicity_checklist = ethnicityarray;

    var religion_checklist = religionarray;

    var marital_status_checklist = marital_statusarray;

    var children_checklist = childrenarray;

    var employment_checklist = employmentarray;

    var sexuality_checklist = sexualityarray;

    var age_checklist = agearray;

    var height_checklist = heightarray;

    var weight_checklist = weightarray;

    var vices_checklist = vicesarray;

    var seeking_checklist = seekingarray;

    var country = $("#country-list").val();

    var state = $("#state-list").val();

    var city = $("#city-list").val();

  

    



    var filter=$("input[name=filter]").val();

    $("input[type=hidden][name=filter]").val(filter);



    var dataString = {'rowcount' :rowcount,'ethnicity_checklist':ethnicity_checklist,'marital_status_checklist':marital_status_checklist,'religion_checklist':religion_checklist,'filter':filter,'children_checklist':children_checklist,'employment_checklist':employment_checklist,'sexuality_checklist':sexuality_checklist,'age_checklist':age_checklist,'height_checklist':height_checklist,'weight_checklist':weight_checklist,'vices_checklist':vices_checklist,'seeking_checklist':seeking_checklist,'country':country,'state':state,'city':city,'submit':'search'};

      

   



  $.ajax({

    url: url,

    type: "POST",

    data:  dataString,

    success: function(data)

    { 

      $("#toys-grid").html(data); $('#add-form').hide();

      $("#name").val();



    }

     });

  }

  getresult("getresult_family.php");

  </script>

  

 

  <script>

  $(document).ready(function(){

      $("#search").click(function(){

          

        getresult("getresult_family.php");

        $('html, body').animate({

        scrollTop: $("#loading").offset().top}, 500);

        $('.tab-content').removeClass('current');

      });

       $("#reset").click(function(){

           location.reload();



       });



  });

</script>