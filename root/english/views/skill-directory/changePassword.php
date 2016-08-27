<?php include("../../includes/main/header.php");
	  include("../../includes/navigations/nav_active_skill_directory.php");

?>

<?php include("company_database_classes.php"); ?>

<?php
	
	if(isset($_GET["company"]))
	{
		$comapnyID= $_GET["company"];
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
		
		$validateCompany = SkillDirectoryCompany::validateCompanyPassword($comapnyID,$currentPassword);
		echo "<br/ >validate".$validateCompany;

		if($validateCompany==true)
		{
			if(strcmp($newpassword1,$newpassword2)==0)
			{
				$result = SkillDirectoryCompany::changePassword($companyID,$newpassword1);

				if($result)
				{
					$_SESSION["changePasswordMessage"]="change password correctly";
					SkillDirectoryCompany::redirect_to("profileinfo.php");
				}else
				{
					$_SESSION["changePasswordMessage"]="change password fails";
					SkillDirectoryCompany::redirect_to("profileinfo.php");
				}

				SkillDirectoryCompany::redirect_to("profileinfo.php");
			}else
			{
				echo "<script type='text/javascript'>alert('wrong new password')</script>";
			}

		}else
		{
			echo "<script type='text/javascript'>alert('wrong password')</script>";
			//SkillDirectoryCompany::redirect_to("login_page.php");
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