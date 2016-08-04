<?php include("../includes/new_main_header.php");?>

<div style="background-color:lightcyan; color:black; padding:15px; ">

<h1 style="text-align:center;">student name</h1>
<img src="linux.jpg"  style="width:100px;height:100px;">


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
<p style="font-size:150%">Edit your Password here!</p>
<form action="skill_profile.php" name=post>
<table>
<tr><td> Current Password:</td><td> <input type="text" name="cpass"></td></tr>

<tr><td> New Password:</td><td> <input type="text" name="npass"></td></tr>

<tr><td>Re-enter new password:</td><td><input type="text" name="npass2"></td></tr>

</table>
<input type="submit" value="Change" name="password_update">
</form>

</div>

</div>



</body>


</html>