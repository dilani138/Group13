<?php include("../includes/new_main_header.php");?>

<div style="background-color:lightcyan; color:black; padding:15px; ">

<h1 style="text-align:center;">student name</h1>
<img src="user.jpg"  style="width:100px;height:100px;">


</div>
<div style="background-color:black; padding:5px; ">
	<button type="button" style="background-color:blue;"><font color="white">Profile</font></button>
	<button type="button"><font color="blue">Vacancy</font></button>
	<button type="button"><font color="blue">Search</font></button>
	<button type="button"><font color="blue">Logout</font></button>

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
<p style="font-size:150%">Student Profile </p>
<form action="edit_profile.php" name=post>

<table>
<tr><td> First Name: $name1 </td></tr>
<tr><td> Last Name: $name2 </td></tr>
<tr><td> User Name:$usrname </td></tr>

<tr><td>Address: $add </td></tr>
<tr><td>Telephone : $telp </td></tr>

<tr><td>Email:  $mail </td></tr>
<tr><td>Qualifications: . $qual </td></tr>
<tr><td>GPA: . $gpa </td></tr></table>

<input type="submit" value="Edit Profile"></form></div>

</div>



</body>


</html>