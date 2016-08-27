<!DOCTYPE HTML >

<?php include("../../includes/main/header.php");
	  include("../../includes/navigations/nav_active_skill_directory.php");

?>

<?php include("company_database_classes.php"); ?>
<?php 
	
	session_start();
	
	if(isset($_GET["company"]))
	{
		$companyID = $_GET["company"];
		//echo $companyID;
		$result =SkillDirectoryCompany::getCompanyDetailsByCompanyID($companyID);
	}else
	{
		SkillDirectoryCompany::redirect_to("login_page.php");
	}

	if(isset($_SESSION["editCompanyMessage"]))
	{
		echo "<script type='text/javascript'>alert('".$_SESSION["editCompanyMessage"]."')</script>";
    	$_SESSION["editCompanyMessage"] =null;
	}

	if(isset($_SESSION["changePasswordMessage"]))
	{
		echo "<script type='text/javascript'>alert('".$_SESSION["changePasswordMessage"]."')</script>";
    	$_SESSION["changePasswordMessage"] =null;
	}
?>

	
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
</head>

<body>
<!-- profile picture -->
<!--div style="background-color:#87CEEB; padding:25px"><div>
</div>
<br><br><br><br><br>
</div-->
<!-- black row with buttons -->
<div class="button">
<a href="comprofile.php"><button class="button" type="button">Profile</button></a>
<a href="AllVacancy.php"><button class="button" type="button">Vacancies</button></a>
<a href="searchc.php"><button class="button" type="button">Search</button></a>
<a href="logout.php"><button class="button" type="button">Logout</button></a>
</div>


<!-- content area -->
	<div class="static">
		<div class="form">
		<p style="font-size:150%">Edit your Company Profile Information here:</p>
			<form action="updateCompany.php" method="post" >
				<table>
					<tr><td> Company Name:</td><td> <input type="text" name="cname" value=<?php echo $result[0]['name'];?>></td></tr>

					<tr><td> User Name:</td><td> <input type="text" name="uname"  value=<?php echo $result[0]['user_name'];?>></td></tr>
					<tr><td>Email Address:</td><td><input type="text" name="email"  value=<?php echo $result[0]['email'];?>></td></tr>
					<tr><td>Address:</td><td><input type="text" name="address"  value=<?php echo $result[0]['address'];?>></td></tr>
					<tr><td>Telephone 1:</td><td><input type="text" name="tel1"  value=<?php echo $result[0]['telephone_01'];?>></td></tr>
					<tr><td>Telephone 2:</td><td> <input type="text" name="tel2" value=<?php echo $result[0]['telephone_02'];?>></td></tr>
					<tr><td>Fax:</td><td> <input type="text" name="fax" value=<?php echo $result[0]['fax'];?>></td></tr>
					<tr><td>Description:</td><td><input type="text" name="desc" value=<?php echo $result[0]['details'];?> ></td></tr>
					<tr><td>Profile Picture:</td><td><input type="file" name="propic" id="propic"></td></tr>

				</table>
			<input type="submit" value="Update" name="companyUpdate">
		</form>

		<a href=changePassword.php?company=<?php echo $companyID; ?> >Change password</a>
		</div>

	</div>
</body>
</html>

</head>
<body>
</body>
</html>


	
	
</div>

</body>

</html>

