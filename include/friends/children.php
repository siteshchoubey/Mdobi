<div id="tab-4" class="tab-content">

<div class="small_box">

   <!--  <div>

    

  <label><input class="thikmark" type="checkbox" name="children" value="any"><span class="js-material-button">Any</span></label>



</div> -->



<div>

  <label><input type="checkbox" name="children" value="Younger Children" <?php if(isset($children)) { if(in_array("Younger Children", $children)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Younger Children</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="checkbox" name="children" value="Older Children" <?php if(isset($children)) { if(in_array("Older Children", $children)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Older Children</span></label>

</div>

  

<div>

  <label><input type="checkbox" name="children" value="Children Someday" <?php if(isset($children)) { if(in_array("Children Someday", $children)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Children Someday</span></label>

</div>



</div>



<div class="small_box">



<div>

  <label><input type="checkbox" name="children" value="No Children" <?php if(isset($children)) { if(in_array("No Children", $children)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">No Children</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="checkbox" name="children" value="Never Children" <?php if(isset($children)) { if(in_array("Never Children", $children)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Never Children</span></label>

</div>

</div>

</div>

