<div id="tab-10" class="tab-content">
<div class="small_box">
    <!-- <div>
    
  <label><input class="thikmark" type="checkbox" name="vices" value="any"><span class="js-material-button">Any</span></label>

</div> -->


<div>
  <label><input type="checkbox" name="vices" value="Alcohol" <?php if(in_array("Alcohol", $vicesexp)) echo "checked";?>><span class="js-material-button">Alcohol</span></label>
</div>

<div>
  <label><input type="checkbox" name="vices" value="Tobacco" <?php if(in_array("Tobacco", $vicesexp)) echo "checked";?>><span class="js-material-button">Tobacco</span></label>
</div>

<div>
  <label><input type="checkbox" name="vices" value="Food Junkie" <?php if(in_array("Food Junkie", $vicesexp)) echo "checked";?>><span class="js-material-button">Food Junkie</span></label>
</div>

</div>

<div class="small_box">
  
<div>
  <label><input type="checkbox" name="vices" value="Marijuana" <?php if(in_array("Marijuana", $vicesexp)) echo "checked";?>><span class="js-material-button">Marijuana</span></label>
</div>
<div>
  <label><input type="checkbox" name="vices" value="Prescription Drugs" <?php if(in_array("Prescription Drugs", $vicesexp)) echo "checked";?>><span class="js-material-button">Prescription Drugs</span></label>
</div>
<div>
  <label><input type="checkbox" name="vices" value="Other Drugs" <?php if(in_array("Other Drugs", $vicesexp)) echo "checked";?>><span class="js-material-button">Other</span></label>
</div>

</div>

<div class="small_box">
<div>
  <label><input type="checkbox" name="vices" value="No Vices" <?php if(in_array("No Vices", $vicesexp)) echo "checked";?>><span class="js-material-button">No Vices</span></label>
</div>



</div>


</div>
