<!DOCTYPE HTML >

<?php include("../../includes/main/header.php")?>
<?php //include("../../sample/includes/navigation/n.php")?>
<?php include("company_database_classes.php"); ?>

<?php 
	session_start();
	$resultArray = SkillDirectoryCompany::getVacancyDetails($_SESSION["mainID"]);
	$rows = $resultArray[1];
	$result = $resultArray[0];
	//$stmt->execute($_SESSION["mainID"]);
	//$result1 = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	//$result2 = $stmt->fetchAll();
	//$rows = $stmt->rowCount();
	//echo $rows;
	//print_r($stmt);
	//echo $result2[0]['vacancy_name'];

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
    width: 100px;
    margin: 10px 25% auto 25%;
}

#vacancyContainer{
	width:100%;
	
	
}

#vacancy{
	width:100%;
	height:200px;
	
}
</style>
</head>

<body>
<!-- profile picture -->
<!--div style="background-color:#87CEEB; padding:25px">
Abc Co ltd<br><br>
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
<h3>The following are the list of Vaccancies published</h3>

<div class="form">
<table border="1">
<tr><th colspan="2">Date</th><th colspan="3">Title</th><th colspan="5">Description</th></tr>
<tr></tr>
 
</table>
<br>
<form action="addvacancy.php" name=post>
<input type="submit" value="Add Vacancy"></form></div>
</div>

	<div id="vacancyContainer">
		<form action="deleteVacancyQuery.php"  method="post">
		<?php
			for($i=0;$i<$rows;$i++)
			{
				echo "<div id= vacancy>";
				echo "Vacancy Name : ".$result[$i]['vacancy_name']."<br>";
				echo "Date : ".$result[$i]['date']."<br>";
				echo "Detais : ".$result[$i]['details']."<br>";
				echo "<input type=\"submit\"  name=".$result[$i]['vacancy_id']." value=\"delete\" >";
				echo "</div>";
			}

		?>
	</form>
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

