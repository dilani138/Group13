<?php include("company_database_classes.php"); ?>

<?php

echo $_GET["vacancy"];
echo $_POST["vacancyName"];

if(isset($_POST["editVacancy"]))
{
	$vacancyID = $_GET["vacancy"];
	$vacancyName = $_POST["vacancyName"];
	$vacancyDate = $_POST["date"];
	$vacancyDetails = $_POST["details"];

	$result = SkillDirectoryCompany::editVacancy($vacancyID,$vacancyName,$vacancyDate,$vacancyDetails);

	if($result)
	{
		echo "ok";
		//SkillDirectoryCompany::redirect_to("");
	}else
	{
		echo "no";
		//SkillDirectoryCompany::redirect_to();
	}
}

?>