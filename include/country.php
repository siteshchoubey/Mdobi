<div id="tab-11" class="tab-content">
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM countries";
$results = $db_handle->runQuery($query);
?>
<select class="form-control" name="country" id="country-list">
	 <option value="">Select Country</option>
                <?php
                foreach($results as $country) {
                	echo '<option value="'.$country["name"].'"  id="'.$country["id"].'"'; 

					if($country["name"]===$row['user_country'])
				    {
				        echo ' selected';
				    }
				    echo '>'. $country["name"] . '</option>'."\n";
				    }

                ?>
              
</select>

</div>
