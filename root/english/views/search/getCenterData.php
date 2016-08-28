<?php
	include("search_database_classes.php");

?>

<?php
	if(isset($_POST["district"]))
	{
		$district=$_POST["district"];
		$result = SearchDatabase::getCentersByDistrict($district);

		foreach ($result as $center) 
		{
			echo "<option value=".$center['center_id']." >".$center['center_name']."</option>";
		}
	}

?>