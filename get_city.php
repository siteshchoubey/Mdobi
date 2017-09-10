<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["state_id"])) {
	$query ="SELECT * FROM `cities` WHERE state_id = '" . $_POST["state_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select City</option>
<?php
	foreach($results as $city) {
?>
	<option value="<?php echo $city["name"]; ?>" id="<?php echo $city["id"]; ?>"><?php echo $city["name"]; ?></option>
<?php
	}
}
?>