<div id="tab-2" class="tab-content">


<div class="small_box">
    <div>
    
  <label><input class="thikmark" type="checkbox" name="religion" value="Religious" <?php if(isset($religion)) { if(in_array("Religious", $religion)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Religious</span></label>

</div>

</div>

<div class="small_box">
  
<div>
  <label><input type="checkbox" name="religion" value="Non-Religious" <?php if(isset($religion)) { if(in_array("Non-Religious", $religion)) { ?> checked="checked" <?php } } ?>><span class="js-material-button">Non-Religious</span></label>
</div>
</div>

</div>
