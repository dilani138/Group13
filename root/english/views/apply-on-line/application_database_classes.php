<?php include("../../includes/database/databaseConnection.php");?>

<?php

	//connection data for database
	$severName = "localhost";
	$userName = "root";
	//$password = "£5shashika5£";
	$password="";
	$databaseName = "webmis";

	//connecting function for database
	$connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//main class for online Application
	class OnlineApplier
	{
		//add applier details for database table
		public static function addApplierDetailsDatabase($initials,$lastName,$nic,$dob,$gender,$address01,$address02,$city,$district,$homeTelephone,$mobile,$email,$time)
		{
			
			try
			{
				echo  "hello";
				//echo $userNameApplier;
				$connection1 = $GLOBALS['connection'];
				$stmt = $connection1->prepare("INSERT INTO applier(initials,last_name,nic,dob,gender,address_01,address_02,city,district,home_telephone,mobile,email,time) VALUES (:initials,:lastName,:nic,:dob,:gender,:address01,:address02,:city,:district,:homeTelephone,:mobile,:email,:time");
				//echo "2";
				$stmt->bindParam(':initials', $initials);
				$stmt->bindParam(':lastName', $lastName);
				$stmt->bindParam(':nic', $nic);
				$stmt->bindParam(':dob', $dob);
				$stmt->bindParam(':gender', $gender);
				$stmt->bindParam(':address01', $address01);
				$stmt->bindParam(':address02', $address02);
				$stmt->bindParam(':city', $city);
				$stmt->bindParam(':district', $district);
				$stmt->bindParam(':homeTelephone', $homeTelephone);
				$stmt->bindParam(':mobile', $mobile);
				$stmt->bindParam(':email', $email);
				
				//$stmt->bindParam(':FullTimePartTime', $FullTimePartTime);
				//$stmt->bindParam(':oLevel', $oLevel);
				//$stmt->bindParam(':other', $other);
				$stmt->bindParam(':time', $time);
				//$stmt->bindParam(':trade', $trade);
    			$stmt->execute();

			    
				$rows = $stmt->rowCount();
			    
			    if($rows >0)
			    	return true;
			    else
			    	return false;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return false;

			}
		}

		


		//delete applier by same applier email 
		public static function deleteApplierDetails($email)
		{
			
			try
			{
				//echo $email;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("DELETE FROM applier WHERE email=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$email]);

			    $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
				//$result2 = $stmt1->fetchAll();
				$rows = $stmt1->rowCount();
			    
			    if($rows ==1)
			    	return true;
			    else
			    	return false;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return false;

			}
	}
}
?>