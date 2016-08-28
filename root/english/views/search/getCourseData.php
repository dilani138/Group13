<?php
	include("search_database_classes.php");

?>

<?php
	if(isset($_POST["center"]))
	{
		$center=$_POST["center"];
		$result = SearchDatabase::getCourseByCenter($center);

		foreach ($result as $course) 
		{
			echo "<option value=".$course['course_id']." >".$course['course_name']."</option>";
		}
	}

?>

