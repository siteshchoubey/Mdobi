<div id="tab-6" class="tab-content">

<div class="small_box">

   <!--  <div>

    

  <label><input class="thikmark" type="radio" name="sexuality" value="any"><span class="js-material-button">Any</span></label>



</div>

 -->

<div>

  <label><input type="radio" name="sexuality" value="Male" <?php if($row['sexuality']=="Male") echo "checked";?>><span class="js-material-button">Male</span></label>

</div>



<div class="search-settings-advanced-row-item">

  <label><input type="radio" name="sexuality" value="Female" <?php if($row['sexuality']=="Female") echo "checked";?>><span class="js-material-button">Female</span></label>

</div>



<div>

  <label><input type="radio" name="sexuality" value="Transgender" <?php if($row['sexuality']=="Transgender") echo "checked";?>><span class="js-material-button">Transgender</span></label>

</div>



</div>



<div class="small_box">

  

<div>

  <label><input type="radio" name="sexuality" value="Gay" <?php if($row['sexuality']=="Gay") echo "checked";?>><span class="js-material-button">Gay</span></label>

</div>

<div>

  <label><input type="radio" name="sexuality" value="Lesbian" <?php if($row['sexuality']=="Lesbian") echo "checked";?>><span class="js-material-button">Lesbian</span></label>

</div>

<div>

  <label><input type="radio" name="sexuality" value="Bisexual" <?php if($row['sexuality']=="Bisexual") echo "checked";?>><span class="js-material-button">Bisexual</span></label>

</div>



</div>



</div>

