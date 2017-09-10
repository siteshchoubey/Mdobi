<div id="tab-15" class="tab-content">
<div class="small_box">
    <!-- <div>
    
  <label><input class="thikmark" type="checkbox" name="vices" value="any"><span class="js-material-button">Any</span></label>

</div> -->


<div>
  <label><input type="checkbox" name="seeking" value="Friends" <?php if(in_array("Friends", $seekingexp)) echo "checked";?>><span class="js-material-button">Friends</span></label>
</div>

<div>
  <label><input type="checkbox" name="seeking" value="Love" <?php if(in_array("Love", $seekingexp)) echo "checked";?>><span class="js-material-button">Love</span></label>
</div>



</div>

<div class="small_box">
  <div>
  <label><input type="checkbox" name="seeking" value="Marriage" <?php if(in_array("Marriage", $seekingexp)) echo "checked";?>><span class="js-material-button">Marriage</span></label>
</div>
<div>
  <label><input type="checkbox" name="seeking" value="Family" <?php if(in_array("Family", $seekingexp)) echo "checked";?>><span class="js-material-button">Family</span></label>
</div>
</div>
</div>
