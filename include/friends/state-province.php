<div id="tab-12" class="tab-content">
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM states";
$results = $db_handle->runQuery($query);
?>
<select class="form-control" name="state" id="state-list">
	 <option value="">Select States</option>
                <?php
                foreach($results as $state) {
                	echo '<option value="'.$state["name"].'"  id="'.$state["id"].'"'; 

					if($state["name"]===@$row['user_state'])
				    {
				        echo ' selected';
				    }
				    echo '>'. $state["name"] . '</option>'."\n";
				    }

                ?>
              
</select>

</div>
