
<!DOCTYPE HTML >

<?php include("../../includes/main/header.php")?>
<?php //include("../../sample/includes/navigation/n.php")?>

<head>
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



<?php
$severName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "webmis";

if(isset($_POST['Publish']))
{ require ("databaseConnection.php");
    try {

        // connect to mysql

        $connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
		//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     		
		$date=$_POST["date"];
		$query = "INSERT INTO vacancy (date, vacancy_name, details) VALUES
	VALUES ('".$date."','".$_POST["vacancy_name"]."','".$_POST["details"]."')";
	$stmt = $connection->prepare($query);

if ($stmt->execute()){
echo "<script type= 'text/javascript'>alert('New vacancy Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('vacancy not successfully Inserted.');</script>";
}
	
} catch(Exception $e) {
	echo "Error: " . $e->getMessage();
}
}
?>

<!-- input text add vaccancy area -->
<div class="static">
<div class="form">
<form action="" name=post>
Date: <br><br></tr><tr><input type="text" name="date" size="100%" required><br><br>
Title: <br><br></tr><tr><input type="text" name="vacancy_name" size="100%" required><br><br>
Description: <br><br><input type="text" name="details" size="100%" style="height:300px" required><br><br>
<input type="submit" value="Publish"></form></div>
</div>
</body>
</html>

</head>
<body>
</body>
</html>


	
	
</div>

</body>
<?php } ?>
</html>

