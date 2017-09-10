<div id="tab-5" class="tab-content">

<div class="small_box">

    <!-- <div>

    

  <label><input class="thikmark" type="radio" name="employment" value="any"><span class="js-material-button">Any</span></label>



</div> -->



<div>

  <label><input type="radio" name="employment" value="Employed" <?php if($row['employment']=="Employed") echo "checked";?>><span class="js-material-button">Employed</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="radio" name="employment" value="Not Employed" <?php if($row['employment']=="Not Employed") echo "checked";?>><span class="js-material-button">Not Employed </span></label>

</div>



</div>



<div class="small_box">

  

<div>

  <label><input type="radio" name="employment" value="Student" <?php if($row['employment']=="Student") echo "checked";?>><span class="js-material-button">Student</span></label>

</div>

<div>

  <label><input type="radio" name="employment" value="Disabled" <?php if($row['employment']=="Disabled") echo "checked";?>><span class="js-material-button">Disabled</span></label>

</div>



</div>
<div class="small_box">

  

<div>

  <label><input type="radio" name="employment" value="Retired" <?php if($row['employment']=="Retired") echo "checked";?>><span class="js-material-button">Retired</span></label>

</div>


</div>

</div>

