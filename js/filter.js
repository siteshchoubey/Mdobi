function getresult(url) {    
	$( ".btnSearch" ).click(function() {
		alert("chch");
    });
    
    var mainarray = new Array();
    
    var ethnicityarray = new Array();   
    $('input[name="ethnicity"]:checked').each(function(){      
      ethnicityarray.push($(this).val());   
    });

    var rowcount = $("#rowcount").val();
    var ethnicity_checklist = ethnicityarray;

    var filter=$("input[name=filter]").val();
    $("input[type=hidden][name=filter]").val(filter);

  var dataString = {'rowcount' :rowcount,'ethnicity_checklist':ethnicity_checklist,'filter':filter,'submiited':1};
    
   

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