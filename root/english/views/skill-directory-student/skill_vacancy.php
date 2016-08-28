<!DOCTYPE HTML >

<?php 
	include("../../includes/main/header.php");
	include("../../includes/navigations/nav_active_skill_directory.php");
	?>

<?php include("skilldir_student_functions.php"); ?>

<?php/*
	session_start();
	$resultArray = SkillDirectoryStudent::getVacancyDetails($_SESSION["mainID"]);
	$rows = $resultArray[1];
	$result = $resultArray[0];*/
	
?>

<div style="background-color:lightcyan; color:black; padding:15px; ">

	
	<img src="linux.jpg"  style="width:100px;height:100px;">


</div>
<div style="background-color:black; padding:5px; ">
	<a href="skill_profile.php"><button type="button"><font color="blue">Profile</font></button></a>
	<a href="skill_vacancy.php"><button type="button" style="background-color:blue;"><font color="white">Vacancy</font></button></a>
	<a href="skill_search.php"><button type="button"><font color="blue">Search</font></button></a>
	<a href=""><button type="button"><font color="blue">Logout</font></button></a>
</div>

<!-- students can see vacancies from here -->
<div style="background-color:dodgerblue; padding:8px; ">
	<font color="white">Company_Name/Vacancy</font>
</div>

<div style="background-color:powderblue; padding:70px; ">
	<font style="text-align:right;" color="black">
		about company vacancies
	</font>
</div>





</body>


</html>