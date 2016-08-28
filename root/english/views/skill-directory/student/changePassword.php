<?php include("../../includes/main/header.php");
	  include("../../includes/navigations/nav_active_skill_directory.php");

?>

<?php include("skilldir_student_functions.php"); ?>

<?php
	
	if(isset($_GET["graduates"]))
	{
		$studentID= $_GET["graduates"];
		echo $_GET["graduates"];
	}else
	{
		SkillDirectoryStudent::redirect_to("edit_profile.php");
	}
?>

<?php
	session_start();
	if(isset($_POST["changePassword"]))
	{
		$currentPassword = $_POST["currentPassword"];
		$newpassword1 = $_POST["newpassword1"];
		$newpassword2 = $_POST["newpassword2"];

		
		
		$validateStudent = SkillDirectoryStudent::validateStudentPassword($studentID,$currentPassword);
		

		if($validateStudent==1)
		{
			//echo "<br/ >validate".$validateCompany;
			if((strcmp($newpassword1,$newpassword2))==0)
			{
				//echo "<br> hello<br>";
				//echo (is_string($newpassword1))."<br>";
				$result = SkillDirectoryStudent::changePassword($studentID,$newpassword1);

				//echo $result;
				if($result)
				{
					$_SESSION["changePasswordMessage"]="change password correctly";
					SkillDirectoryStudent::redirect_to("edit_profile.php?graduates=".$studentID);
				}else
				{
					$_SESSION["changePasswordMessage"]="change password fails";
					SkillDirectoryStudent::redirect_to("edit_profile.phpgraduates=".$studentID);
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

<div style="background-color:lightcyan; color:black; padding:15px; ">


<img src="linux.jpg"  style="width:100px;height:100px;">


</div>
<div style="background-color:black; padding:5px; ">
	<a href="skill_profile.php"><button type="button" style="background-color:blue;"><font color="white">Profile</font></button></a>
	<a href="skill_vacancy.php"><button type="button"><font color="blue">Vacancy</font></button></a>
	<a href="skill_search.php"><button type="button"><font color="blue">Search</font></button></a>
	<a href=""><button type="button"><font color="blue">Logout</font></button></a>

</div>

<style>
.button {
    background-color:#000000;
    text-align: center;
	padding: 5px 5px;
	color: white;
	cursor: pointer;
	margin: 10px 12px;
}.static {
    position: static;
    border: 1px solid #87CEEB;
	padding-left:10px;
	margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
  
} .form {
    
    margin: 10px 25% auto 25%;
}
</style>

<!-- content area -->
<div class="static">
	<div class="form">
		<p style="font-size:150%">Edit your Password here!</p>
		<form action="" method=post>
		<table>
			Current Password: <input name="currentPassword" type="password" ><br/>
			New Password: <input name="newpassword1" type="password" ><br/>
			Re enter new password: <input name="newpassword2" type="password" ><br/>

		</table>
		<input name="changePassword" type="submit" value="Change"><br/>
		</form>

	</div>

</div>



</body>


</html>