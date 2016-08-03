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
<form action="" target=_self name=post>
<input type="textbox" name=sname placeholder="Type Student Name" size="28"> 
<input type="submit" value=Search><br><br>
<select name="scourse">
    <option value="">Select course</option>
    <option value="Baker">Baker</option>
    <option value="Industrial Sewing machine operator">Industrial Sewing machine operator</option>
    <option value="Work study officer">Work study officer</option>
  </select>
<input type="submit" value=Search></form>

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

