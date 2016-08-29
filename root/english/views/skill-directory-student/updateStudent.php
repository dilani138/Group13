
<?php include("skilldir_student_functions.php"); ?>
<?php
	
	session_start();

	if(isset($_POST["studentUpdate"]) && isset($_SESSION["mainID"]))
	{
		
		$studentID = $_SESSION["mainID"];
		$studentUserName = $_POST["uname"];
		$firstName = $_POST["sname1"];
		$lastName = $_POST["sname2"];
		$email = $_POST["email"];
		$tp = $_POST["tel"];
		$address = $_POST["address"];
		$qualifications = $_POST["qua"];

		$result = SkillDirectoryStudent::editStudent($studentID,$studentUserName,$firstName,$lastName,$email,$tp,$address,$qualifications);

		if($result)
		{
			$_SESSION["editStudentMessage"]="Student updated successfully";
			SkillDirectoryStudent::redirect_to("skill_profile.php");
		}else
		{
			$_SESSION["editStudentMessage"]="Update fails";
			SkillDirectoryStudent::redirect_to("edit_profile.php");
		}

	}else
	{
		echo "false";
	}

?>