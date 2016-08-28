
<?php include("skilldir_student_functions.php"); ?>

<?php 


session_start();
if(isset($_POST["login"]))
{

	$userName = $_POST["un"];
	$password = $_POST["pw"];

	

	$authorize = SkillDirectoryStudent::validateStudentAccess($userName,$password);
	if($authorize)
	{
		
		$_SESSION["mainUserName"] = $userName;
		SkillDirectoryStudent::redirect_to("skill_profile.php");
		
		
	}else
	{
		$_SESSION["errorMessage"] = "User Name / password incorrect";
		SkillDirectoryStudent::redirect_to("login_page.php");
	}
		

}else
{
	echo "<script type='text/javascript'>alert('failed!')</script>";
}


?>

 