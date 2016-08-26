
<!DOCTYPE HTML >

<?php include("../../includes/main/header.php"); ?>
<?php include("company_database_classes.php"); ?>


<?php session_start();

	if(isset($_SESSION["mainUserName"]))
	{
		
		$mainUserName = $_SESSION["mainUserName"];
		echo $mainUserName;
		
	}else
	{
		$_SESSION["errorMessage"]="Error in login";
		SkillDirectoryCompany::redirect_to("login_page.php");
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
<?php $result = SkillDirectoryCompany::getCompanyDetails($mainUserName);
	
	$_SESSION["mainID"] = $result[0]['company_id'];


?>
<body>
<!-- define variables -->




<!-- profile picture -->
<!--div style="background-color:#87CEEB; padding:25px">
<p>UPDATED PROFILE PIC APPEAR HERE</p><br><br><br><br>
</div-->

<!-- black row with buttons -->
<div class="button">
	<a href="comprofile.php"><button class="button" type="button">Profile</button></a>
	<a href="AllVacancy.php"><button class="button" type="button">Vacancies</button></a>
	<a href="searchc.php"><button class="button" type="button">Search</button></a>
	<a href=""><button class="button" type="button">Logout</button></a>
</div>


<!-- content area -->
<div class="static">
	<div class="form">
		<p style="font-size:150%">Company Profile </p>
		<form action="profileinfo.php" name="post">

			<table>
				<tr><td> Company Name:<?php echo $result[0]['name'];?> </td></tr>

				<tr><td> User Name:<?php echo $mainUserName."A";?> </td></tr>

				<tr><td>Address:<?php echo $result[0]['address'];?></td></tr>
				<tr><td>Telephone 1:<?php echo $result[0]['telephone_01'];?></td></tr>
				<tr><td>Telephone 2:<?php echo $result[0]['telephone_02'];?></td></tr>
				<tr><td>Fax: <?php echo $result[0]['fax'];?> </td></tr>
				<tr><td>Description: <?php echo $result[0]['details'];?></td></tr>
			</table>
			<input type="submit" value="Edit Profile">
		</form>
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

