<?php include("../../includes/main/header.php");
	  include("../../includes/navigations/nav_active_skill_directory.php");

?>

<?php include("company_database_classes.php"); ?>

<?php
	
	if(isset($_GET["company"]))
	{
		$companyID= $_GET["company"];
		echo $_GET["company"];
	}else
	{
		SkillDirectoryCompany::redirect_to("profileinfo.php");
	}
?>

<?php
	session_start();
	if(isset($_POST["changePassword"]))
	{
		$currentPassword = $_POST["currentPassword"];
		$newpassword1 = $_POST["newpassword1"];
		$newpassword2 = $_POST["newpassword2"];

		//echo $newpassword1.$newpassword2;
		
		$validateCompany = SkillDirectoryCompany::validateCompanyPassword($companyID,$currentPassword);
		//echo strcmp($newpassword1,$newpassword2);

		if($validateCompany==1)
		{
			//echo "<br/ >validate".$validateCompany;
			if((strcmp($newpassword1,$newpassword2))==0)
			{
				//echo "<br> hello<br>";
				//echo (is_string($newpassword1))."<br>";
				$result = SkillDirectoryCompany::changePassword($companyID,$newpassword1);

				//echo $result;
				if($result)
				{
					$_SESSION["changePasswordMessage"]="change password correctly";
					SkillDirectoryCompany::redirect_to("profileinfo.php?company=".$companyID);
				}else
				{
					$_SESSION["changePasswordMessage"]="change password fails";
					SkillDirectoryCompany::redirect_to("profileinfo.phpcompany=".$companyID);
				}

				//SkillDirectoryCompany::redirect_to("profileinfo.php");
			}else
			{
				echo "<script type='text/javascript'>alert('wrong new password')</script>";
			}

		}else
		{
			echo "<script type='text/javascript'>alert('wrong password')</script>";
			//SkillDirectoryCompany::redirect_to("login_page.php");
			//echo "wrong pass";
		}
	}

?>

	<body>
		<form action="" method="post">
			Current Password: <input name="currentPassword" type="password" ><br/>
			New Password: <input name="newpassword1" type="password" ><br/>
			Re enter new password: <input name="newpassword2" type="password" ><br/>
			<input name="changePassword" type="submit" value="Change"><br/>
		</form>
	</body>

</html>