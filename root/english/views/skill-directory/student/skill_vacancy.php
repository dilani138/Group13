<!DOCTYPE HTML >

<?php 
	include("../../includes/main/header.php");
	include("../../includes/navigations/nav_active_skill_directory.php");
	?>

<?php include("skill_student_functions.php"); ?>

<?php 
	session_start();
	$resultArray = SkillDirectoryStudent::getVacancyDetails();
	$rows = $resultArray[1];
	$result = $resultArray[0];
	
?>

<div style="background-color:lightcyan; color:black; padding:15px; ">

	
	<img src="linux.jpg"  style="width:100px;height:100px;">


</div>
<div style="background-color:black; padding:5px; ">
	<button type="button"><font color="blue">Profile</font></button>
	<button type="button" style="background-color:blue;"><font color="white">Vacancy</font></button>
	<button type="button"><font color="blue">Search</font></button>
	<button type="button"><font color="blue">Logout</font></button>
</div>

<!-- students can see vacancies from here -->
<div id="vacancyContainer">
		
		<?php
			for($i=0;$i<$rows;$i++)
			{
				echo "<div id= vacancy>";
				echo "Vacancy Name : ".$result[$i]['vacancy_name']."<br>";
				echo "Date : ".$result[$i]['date']."<br>";
				echo "Detais : ".$result[$i]['details']."<br>";
				//echo "<a href=editVacancy.php?vacancy=".$result[$i]['vacancy_id'].">Edit Vacancy</a>";
				echo "</div>";
			}

		?>

	</div>





</body>


</html>