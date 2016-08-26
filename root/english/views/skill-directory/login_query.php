
<?php include("company_database_classes.php"); ?>

<?php 


session_start();
if(isset($_POST["login"]))
{

	$userName = $_POST["un"];
	$password = $_POST["pw"];

	//echo $userName;
	//echo $password;

	$authorize = SkillDirectoryCompany::validateCompanyAccess($userName,$password);
	if($authorize)
	{
		
		$_SESSION["mainUserName"] = $userName;
		SkillDirectoryCompany::redirect_to("comprofile.php");
		
		//echo $_GET["userName"];
	}else
	{
		$_SESSION["errorMessage"] = "User Name / password incorrect";
		SkillDirectoryCompany::redirect_to("login_page.php");
	}
		

}else
{
	echo "<script type='text/javascript'>alert('failed!')</script>";
}


?>

 