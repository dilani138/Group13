<?php include("../includes/new_main_header.php");?>

<div style="background-color:lightcyan; color:black; padding:15px; ">

<h1 style="text-align:center;">student name</h1>
<img src="linux.jpg"  style="width:100px;height:100px;">


</div>
<div style="background-color:black; padding:5px; ">
	<a href="skill_profile.php"><button type="button" style="background-color:blue;"><font color="white">Profile</font></button></a>
	<a href="skill_vacancy.php"><button type="button"><font color="blue">Vacancy</font></button></a>
	<a href="skill_search.php"><button type="button"><font color="blue">Search</font></button></a>
	<a href=""><button type="button"><font color="blue">Logout</font></button></a>

</div>

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

<!-- content area -->
<div class="static">
<div class="form">
<p style="font-size:150%">Edit your Profile Information here!</p>
<form action="skill_profile.php" name=post>
<table>
	<tr><td> First Name:</td><td> <input type="text" name="sname1"></td></tr>
	<tr><td> Last Name:</td><td> <input type="text" name="sname2"></td></tr>
	<tr><td> User Name:</td><td> <input type="text" name="uname"></td></tr>
	<tr><td>Address:</td><td><input type="text" name="address"></td></tr>
	<tr><td>Telephone:</td><td> <input type="text" name="tel"></td></tr>
	<tr><td>Email:</td><td> <input type="text" name="email"></td></tr>
	<tr><td>Qualifications:</td><td><input type="text" name="qua"></td></tr></table>
<input type="submit" value="Update" name="studentupdate">
</form>
<form action="password_change.php" name=post>
<input type="submit" value="Change Password" name="password_change" >
</form>

</div>

</div>



</body>


</html>