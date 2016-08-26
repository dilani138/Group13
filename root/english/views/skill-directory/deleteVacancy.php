<?php include("company_database_classes.php"); ?>

<?php
	session_start();
	if(isset($_GET['vacancy']))
	{
		$vacancyID = $_GET['vacancy'];
		$result = SkillDirectoryCompany::deleteVacancy($vacancyID);
		if($result)
		{
			$_SESSION["deleteMessage"]="Vacancy deleted successfully";
			SkillDirectoryCompany::redirect_to("AllVacancy.php");
		}else
		{
			$_SESSION["deleteMessage"]="Vacancy deleting fails";
			SkillDirectoryCompany::redirect_to("editVacancy.php");
		}

	}
	
?>