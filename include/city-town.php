<div id="tab-13" class="tab-content">
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM states Where name='".$row["user_state"]."'";
$state = $db_handle->runQuery($query);
$query ="SELECT * FROM cities Where state_id='".$state[0]['id']."'";
$results = $db_handle->runQuery($query);
?>
<select class="form-control" name="city" id="city-list">
	 <option value="">Select City</option>
                <?php
                foreach($results as $city) {
                	echo '<option value="'.$city["name"].'"  id="'.$city["id"].'"'; 

					if($city["name"]===$row['user_city'])
				    {
				        echo ' selected';
				    }
				    echo '>'. $city["name"] . '</option>'."\n";
				    }

                ?>
              
</select>

</div>
