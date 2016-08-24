
<!DOCTYPE HTML >

<?php include("../../includes/main/header.php")?>
<?php //include("../../sample/includes/navigation/n.php")?>
<?php include("company_database_classes.php"); ?>

<?php session_start();
	if(isset($_SESSION["mainID"]))
	{
		$companyID = $_SESSION["mainID"];
	}else
	{
		$_SESSION["errorMessage"] = "error login";
		SkillDirectoryCompany::redirect_to("login_page.php");
	}

	if(isset($_SESSION["Message"]))
	{
		 echo "<script type='text/javascript'>alert('".$_SESSION["Message"]."')</script>";
    	$_SESSION["Message"] =null;
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
}
.static {
    position: static;
    border: 1px solid #87CEEB;
	padding-left:10px;
	margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
	
} .form {
    width: 100px;
    margin: 10px 25% auto 25%;
}
</style>
</head>

<body>
<!-- profile picture -->
<div style="background-color:#87CEEB; padding:25px">
Abc Co ltd<br><br>
</div>
<!-- black row with buttons -->
<div class="button">
	<a href="comprofile.php"><button class="button" type="button">Profile</button></a>
	<a href="AllVacancy.php"><button class="button" type="button">Vacancies</button></a>
	<a href="searchc.php"><button class="button" type="button">Search</button></a>
	<a href=""><button class="button" type="button">Logout</button></a>
</div>

<!-- input text add vaccancy area -->
<div class="static">
	<div class="form">
		<form action="addVacancyQuery.php" method="post">
			Date: <br><br></tr><tr><input type="text" name="date" size="100%"><br><br>
			Title: <br><br></tr><tr><input type="text" name="vacancy" size="100%"><br><br>
			Description: <br><br><input type="text" name="details" size="100%" style="height:300px"><br><br>
			<input type="submit" name="addVacancy" value="submit">
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

