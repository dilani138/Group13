<?php include("company_database_classes.php"); ?>

<?php
	
	session_start();

	if(isset($_POST["companyUpdate"]) && isset($_SESSION["mainID"]))
	{
		
		$companyID = $_SESSION["mainID"];
		$companyUserName = $_POST["uname"];
		$companyName = $_POST["cname"];
		$email = $_POST["email"];
		$tp1 = $_POST["tel1"];
		$tp2 = $_POST["tel2"];
		$address = $_POST["address"];
		$fax = $_POST["fax"];
		$details = $_POST["desc"];

		$result = SkillDirectoryCompany::editCompany($companyID,$companyUserName,$companyName,$email,$tp1,$tp2,$address,$fax,$details);

		if($result)
		{
			$_SESSION["editCompanyMessage"]="Company updated successfully";
			SkillDirectoryCompany::redirect_to("comprofile.php");
		}else
		{
			$_SESSION["editCompanyMessage"]="Update fails";
			SkillDirectoryCompany::redirect_to("profileinfo.php");
		}

	}else
	{
		echo "false";
	}

?>