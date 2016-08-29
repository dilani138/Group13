<!DOCTYPE HTML >

<?php include("../../includes/main/header.php"); 
	  include("../../includes/navigations/nav_active_skill_directory.php");

?>

<?php include("skilldir_student_functions.php"); ?>


<?php session_start();

	if(isset($_SESSION["mainUserName"]))
	{
		
		$mainUserName = $_SESSION["mainUserName"];
		
		
	}else
	{
		$_SESSION["errorMessage"]="Error in login";
		SkillDirectoryStudent::redirect_to("login_page.php");
	}


	if(isset($_SESSION["editStudentMessage"]))
	{
		echo "<script type='text/javascript'>alert('".$_SESSION["editStudentMessage"]."')</script>";
    	$_SESSION["editStudentMessage"] =null;
	}
?>

<div style="background-color:lightcyan; color:black; padding:15px; ">


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

<?php $result = SkillDirectoryStudent::getStudentDetails($mainUserName);
	
	$_SESSION["mainID"] = $result[0]['student_id'];


?>

<!-- content area -->
<div class="static">
	<div class="form">
		<p style="font-size:150%">Student Profile </p>
			

				<table>
					<tr><td> First Name:<?php echo $result[0]['first_name'];?> </td></tr>
					<tr><td> Last Name: <?php echo $result[0]['last_name'];?> </td></tr>
					<tr><td> User Name:<?php echo $result[0]['user_name'];?></td></tr>

					<tr><td>Address: <?php echo $result[0]['address'];?> </td></tr>
					<tr><td>Telephone : <?php echo $result[0]['telephone'];?> </td></tr>

					<tr><td>Email:  <?php echo $result[0]['email'];?> </td></tr>
					<tr><td>Qualifications: <?php echo $result[0]['extra_qualification'];?> </td></tr>
					<tr><td>GPA: <?php echo $result[0]['gpa'];?></td></tr>
				</table>
			
			<a href=edit_profile.php?graduates=<?php echo $_SESSION["mainID"]; ?><button type="button" style="background-color:blue;"><font color="white"> Edit Profile</font></button></a>
			</form>
	</div>

</div>



</body>


</html>