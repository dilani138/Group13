
<!DOCTYPE HTML >

<?php include("../../includes/main/header.php")?>
<?php //include("../../sample/includes/navigation/n.php")?>
<?php include ("databaseConnection.php")?>

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
$serverName="localhost";
$userName="root";
$password="123";
$dbname="webmis";
DatabaseConnection::connectDatabase($servername,$username,$password,$dbname); 

if(isset($_POST['Publish'])){
	$data=getPosts();
	$insert_Query= "INSERT INTO vacancy(date,vacancy_name,details)
	VALUES ('$data[1]','$data[2]','$data[3]')";
	try{
		$insert_Result=mysqli_query($insert_Query);
		
		if ($insert_Result){
			
			if(mysqli_affected_rows>0){
				echo 'Vaccancy Published';
			}else{
				echo 'Vaccancy Not Published';
			}
		}
				
	} catch (Exception $ex){
		echo 'Please Try again'.$ex->getMessage();
		
	}
	
}
?>

<!-- input text add vaccancy area -->
<div class="static">
<div class="form">
<form action="" name=post>
Date: <br><br></tr><tr><input type="text" name="date" size="100%"><br><br>
Title: <br><br></tr><tr><input type="text" name="vacancy_name" size="100%"><br><br>
Description: <br><br><input type="text" name="details" size="100%" style="height:300px"><br><br>
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

</html>

