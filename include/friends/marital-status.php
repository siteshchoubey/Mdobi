<div id="tab-3" class="tab-content">


<div class="small_box">
    <!-- <div>
    
  <label><input class="thikmark" type="checkbox" name="marital_status" value="any"><span class="js-material-button">Any</span></label>

</div> -->

<div>
  <label><input type="checkbox" name="marital_status" value="Single" <?php if(isset($marital_status)) { if(in_array("Single", $marital_status)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Single</span></label>
</div>

<div class="search-settings-advanced-row-item">
  <label><input type="checkbox" name="marital_status" value="Attached" <?php if(isset($marital_status)) { if(in_array("Attached", $marital_status)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Attached</span></label>
</div>
 
<div>
  <label><input type="checkbox" name="marital_status" value="Separated" <?php if(isset($marital_status)) { if(in_array("Separated", $marital_status)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Separated</span></label>
</div>
</div>

<div class="small_box">
 
<div>
  <label><input type="checkbox" name="marital_status" value="Married" <?php if(isset($marital_status)) { if(in_array("Married", $marital_status)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Married</span></label>
</div>

<div class="search-settings-advanced-row-item">
  <label><input type="checkbox" name="marital_status" value="Open Relationship" <?php if(isset($marital_status)) { if(in_array("Open Relationship", $marital_status)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Open Relationship</span></label>
</div>
</div>
</div>
