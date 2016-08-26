<?php 
	include("../../includes/main/header.php");
	include("../../includes/navigations/nav_active_skill_directory.php");
	?>

<?php include("company_database_classes.php"); ?>

<?php 
	session_start();
	if(isset($_SESSION["vacancyEditMessage"]))
	{
		echo "<script type='text/javascript'>alert('".$_SESSION["vacancyEditMessage"]."')</script>";
    	$_SESSION["vacancyEditMessage"] =null;
	}

	if(isset($_SESSION["deleteMessage"]))
	{
		echo "<script type='text/javascript'>alert('".$_SESSION["deleteMessage"]."')</script>";
    	$_SESSION["deleteMessage"] =null;
	}
?>	

<?php
	$vacancyID =$_GET['vacancy'];
	$returnArray = SkillDirectoryCompany::getVacancyDetailsByVacancyID($vacancyID);
	$vacancyDeatilsArray = $returnArray[0];

	//echo print_r($returnArray[0]);
?>
<form action="editVacancyQuery.php?vacancy=<?php echo $vacancyID;?>" method="post" >
	<p>Vacancy Name : <input type="text" value=<?php echo $vacancyDeatilsArray[0]['vacancy_name'];?> name="vacancyName"> </p>
	<p>Company ID:    <label><?php echo $vacancyDeatilsArray[0]['company_id']; ?></label></p>
	<p>Date :         <input type="text" value=<?php echo $vacancyDeatilsArray[0]['date']; ?> name="date"> </p>
	<p>Details:       <input type="text" value=<?php echo $vacancyDeatilsArray[0]['details']; ?> name="details"> </p>
	<input type="submit" value="Edit Vacancy" name="editVacancy">
</form>

<a onClick="javascript: return confirm('Please confirm deletion')" href=deleteVacancy.php?vacancy=<?php echo $vacancyID; ?>>Delete Vacancy</a>
</body>
</html>