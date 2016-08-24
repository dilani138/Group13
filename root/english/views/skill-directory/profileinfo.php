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
<a href=""><button class="button" type="button">Logout</button></a>
</div>


<!-- content area -->
<div class="static">
<div class="form">
<p style="font-size:150%">Edit your Company Profile Information here:</p>
<form action="comprofile.php" name=post enctype="multipart/form-data">
<table>
<tr><td> Company Name:</td><td> <input type="text" name="cname"></td></tr>

<tr><td> User Name:</td><td> <input type="text" name="uname"></td></tr>

<tr><td>Address:</td><td><input type="text" name="address"></td></tr>
<tr><td>Telephone 1:</td><td><input type="text" name="tel1"></td></tr>
<tr><td>Telephone 2:</td><td> <input type="text" name="tel2"></td></tr>
<tr><td>Fax:</td><td> <input type="text" name="fax"></td></tr>
<tr><td>Description:</td><td><input type="text" name="desc"></td></tr>
<tr><td>Profile Picture:</td><td><input type="file" name="propic" id="propic"></td></tr>

</table>
<input type="submit" value="Update" name="comupdate"></form></div>

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

