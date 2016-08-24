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
<div style="background-color:#87CEEB; padding:25px"><div>
</div>
<br><br><br><br><br>
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
$databaseName="webmis";
require ("databaseConnection.php");
DatabaseConnection::connectDatabase($serverName,$userName,$password,$databaseName);

if(isset($_POST['Update'])){ 
$company_id = $_POST['company_id'];
$name = $_POST['name'];
$user_name = $_POST['user_name'];
$address = $_POST['address'];
$telephone_01 = $_POST['telephone_01'];
$telephone_02 = $_POST['telephone_02'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$details = $_POST['details'];

$query = "UPDATE 'company' SET 'name'= :name,'user_name'= :user_name,'address'= :address,'telephone_01'= :telephone_01,'telephone_02'= :telephone_02,
 'fax'= :fax,'email'= :email,'details'= :details WHERE 'company_id'= :company_id";
 

echo "<br/><br/><span>Company Profile updated successfully...!!</span>";
}
else{
echo "<p>updation Failed <br/> Some Fields are Blank!</p>";
}
}
exit();
?>

<!-- content area -->
<div class="static">
<div class="form">
<p style="font-size:150%">Edit your Company Profile Information here:</p>
<form action="profileinfo.php" name=post enctype="multipart/form-data">
<table>
<tr><td> Company ID:</td><td> <input type="text" name="company_id"></td></tr>
<tr><td> Company Name:</td><td> <input type="text" name="name" Required></td></tr>
<tr><td> User Name:</td><td> <input type="text" name="user_name" Required></td></tr>
<tr><td>Address:</td><td><input type="text" name="address"></td></tr>
<tr><td>Telephone 1:</td><td><input type="text" name="telephone_01" Required></td></tr>
<tr><td>Telephone 2:</td><td> <input type="text" name="telephone_02"></td></tr>
<tr><td>Fax:</td><td> <input type="text" name="fax"></td></tr>
<tr><td>E-mail:</td><td> <input type="text" name="email" Required></td></tr>
<tr><td>Description:</td><td><input type="text" name="details"></td></tr>
<tr><td>Profile Picture:</td><td><input type="file" name="propic"></td></tr>
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

