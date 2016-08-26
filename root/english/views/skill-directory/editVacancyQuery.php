<?php include("company_database_classes.php"); ?>

<?php

//echo $_GET["vacancy"];
//echo $_POST["vacancyName"];


if(isset($_POST["editVacancy"]))
{
	$vacancyID = $_GET["vacancy"];
	$vacancyName = $_POST["vacancyName"];
	$vacancyDate = $_POST["date"];
	$vacancyDetails = $_POST["details"];

	$result = SkillDirectoryCompany::editVacancy($vacancyID,$vacancyName,$vacancyDate,$vacancyDetails);
	session_start();
	if($result)
	{
		echo "ok";
		$_SESSION["vacancyEditMessage"]= $vacancyName." Edited Successfully ";
		SkillDirectoryCompany::redirect_to("AllVacancy.php");
	}else
	{
		echo "no";
		$_SESSION["vacancyEditMessage"] = "Sorry !! Edit fails..";
		SkillDirectoryCompany::redirect_to("editVacancy.php");
	}
}

?>