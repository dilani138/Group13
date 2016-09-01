<?php include("application_database_classes.php"); ?>

<?php 
	
	if(isset($_POST['apply']))
	{
		$initials = $_POST["Initials"];
		$lastName = $_POST["LN"];
		$nic = $_POST["NIC"];
		$dob = $_POST["BD"];
		$gender = $_POST["gender"];
		$address01 = $_POST["Add1"];
		$address02 = $_POST["Add2"];
		$city = $_POST["City"];
		$district = $_POST["District"];
		$homeTelephone = $_POST["HPhone"];
		$mobile = $_POST["Mobile"];
		$email = $_POST["Email"];
		$trade = $_POST["Course"];
		$FullTimePartTime = $_POST["FullPart"];
		$olevel = $_POST["FullPart"];
		$other = $_POST["oLevel"];
		$time = $_POST["apply"];

		//echo $nic;
		//echo $email;

		$flag = OnlineApplier::addApplierDetailsDatabase($initials,$lastName,$nic,$dob,$gender,$address01,$address02,$city,$district,$homeTelephone,$mobile,$email,$time);
		//echo $flag;

		
			//$_SESSION["Message"]="Data added successfully";
		
	}else{
		//$_SESSION["errorMessage"]="Data adding fails";
	}
	

?>