<div id="tab-4" class="tab-content">

<div class="small_box">

   <!--  <div>

    

  <label><input class="thikmark" type="radio" name="children" value="any"><span class="js-material-button">Any</span></label>



</div> -->



<div>

  <label><input type="radio" name="children" value="Younger Children" <?php if($row['children']=="Younger Children") echo "checked";?>><span class="js-material-button">Younger Children</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="radio" name="children" value="Older Children" <?php if($row['children']=="Older Children") echo "checked";?>><span class="js-material-button">Older Children</span></label>

</div>

  

<div>

  <label><input type="radio" name="children" value="Children Someday" <?php if($row['children']=="Children Someday") echo "checked";?>><span class="js-material-button">Children Someday</span></label>

</div>

</div>



<div class="small_box">



<div>

  <label><input type="radio" name="children" value="No Children" <?php if($row['children']=="No Children") echo "checked";?>><span class="js-material-button">No Children</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="radio" name="children" value="Never Children" <?php if($row['children']=="Never Children") echo "checked";?>><span class="js-material-button">Never Children</span></label>

</div>

</div>

</div>

