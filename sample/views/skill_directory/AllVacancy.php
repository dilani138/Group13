<!DOCTYPE HTML >

<?php include("../../includes/main/header.php")?>
<?php //include("../../sample/includes/navigation/n.php")?>

	
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
</style>
</head>

<body>
<!-- profile picture -->
<div style="background-color:#87CEEB; padding:25px">
<input type="file" name="" accept="image/*" capture>
<br><br><br><br><br>
</div>

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
</body>
</html>

</head>
<body>
</body>
</html>


	
	
</div>

</body>

</html>

