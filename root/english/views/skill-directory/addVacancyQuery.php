<?php include("company_database_classes.php"); ?>



<?php
	session_start();

	if(isset($_POST["addVacancy"]) && isset($_SESSION["mainID"]))
	{
		$date = $_POST["date"];
		$details = $_POST["vacancy"];
		$name = $_POST["details"];
		$companyID = $_SESSION["mainID"];

		echo $date;
		echo $companyID;

		$flag = SkillDirectoryCompany::addVacancyDatabase($name,$companyID,$date,$details);
		echo $flag;

		if($flag)
		{
			$_SESSION["Message"]="Data added successfully";
			SkillDirectoryCompany::redirect_to("addvacancy.php");
		}
		else
		{
			$_SESSION["errorMessage"]="Data adding fails";
			SkillDirectoryCompany::redirect_to("login_page.php");
		}
			
	}else
	{
		SkillDirectoryCompany::redirect_to("AllVacancy.php");
	}


	?>