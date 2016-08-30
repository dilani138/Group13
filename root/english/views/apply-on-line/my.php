<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "myApp";

	//connecting function for database
	$connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "CREATE TABLE Applier (
	  `applier_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	  `initials` varchar(20) NOT NULL,
	  `last_name` varchar(20) NOT NULL,
	  `nic` varchar(12) NOT NULL,
	  `dob` date NOT NULL,
	  `gender` tinyint(4) NOT NULL,
	  `address_01` varchar(50) NOT NULL,
	  `address_02` varchar(50) DEFAULT NULL,
	  `city` varchar(20) NOT NULL,
	  `district` varchar(20) NOT NULL,
	  `home_telephone` int(12) NOT NULL,
	  `mobile` int(12) NOT NULL,
	  `email` varchar(50) NOT NULL,
	  'trade' tinyint(40) NOT NULL,
	  'o/l' tinyint(4) NOT NULL,
	  'other` varchar(200) NOT NULL,
	  `time` tinyint(1) NOT NULL,
  
	)" ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
		//get Applier details by applier_id
		public static function getApplierDetails($ApplierDetails)
		{
			
			try
			{
				//echo $ApplierID;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM Applier WHERE applier_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$ApplierDetails]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//get Applier details by NIC no
		public static function getApplierDetailsByNICNo($NIC)
		{
			
			try
			{
				//echo $NIC;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM company WHERE NIC=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$NIC]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		

		//delete Applier by Applier_id
		public static function deleteApplier($applier_id)
		{
			
			try
			{
				//echo $applierId;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("DELETE FROM vacancy WHERE applier_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$applier_id]);

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


		

?>