<div id="tab-3" class="tab-content">


<div class="small_box">
    <!-- <div>
    
  <label><input class="thikmark" type="radio" name="marital_status" value="any"><span class="js-material-button">Any</span></label>

</div> -->

<div>
  <label><input type="radio" name="marital_status" value="Single" <?php if($row['marital_status']=="Single") echo "checked";?>><span class="js-material-button">Single</span></label>
</div>

<div class="search-settings-advanced-row-item">
  <label><input type="radio" name="marital_status" value="Attached" <?php if($row['marital_status']=="Attached") echo "checked";?>><span class="js-material-button">Attached</span></label>
</div>
<div>
  <label><input type="radio" name="marital_status" value="Separated" <?php if($row['marital_status']=="Separated") echo "checked";?>><span class="js-material-button">Separated</span></label>
</div>

</div>
<div class="small_box">
  
<div>
  <label><input type="radio" name="marital_status" value="Married" <?php if($row['marital_status']=="Married") echo "checked";?>><span class="js-material-button">Married</span></label>
</div>

<div class="search-settings-advanced-row-item">
  <label><input type="radio" name="marital_status" value="Open Relationship" <?php if($row['marital_status']=="Open Relationship") echo "checked";?>><span class="js-material-button">Open Relationship</span></label>
</div>
</div>
</div>
