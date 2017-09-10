<div id="tab-5" class="tab-content">

<div class="small_box">

    <!-- <div>

    

  <label><input class="thikmark" type="checkbox" name="employment" value="any"><span class="js-material-button">Any</span></label>



</div> -->



<div>

  <label><input type="checkbox" name="employment" value="Employed" <?php if(isset($employment)) { if(in_array("Employed", $employment)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Employed</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="checkbox" name="employment" value="Not Employed" <?php if(isset($employment)) { if(in_array("Not Employed", $employment)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Not Employed </span></label>

</div>



</div>



<div class="small_box">

  

<div>

  <label><input type="checkbox" name="employment" value="Student" <?php if(isset($employment)) { if(in_array("Student", $employment)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Student</span></label>

</div>

<div>

  <label><input type="checkbox" name="employment" value="Disabled" <?php if(isset($employment)) { if(in_array("Disabled", $employment)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Disabled</span></label>

</div>



</div>

<div class="small_box">

  

<div>

  <label><input type="checkbox" name="employment" value="Retired" <?php if(isset($employment)) { if(in_array("Retired", $employment)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Retired</span></label>

</div>

</div>

</div>

