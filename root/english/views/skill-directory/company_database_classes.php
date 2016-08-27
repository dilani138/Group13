
<?php include("../../includes/database/databaseConnection.php");?>

<?php


	//connection data for database
	$severName = "localhost";
	$userName = "root";
	$password = "£5shashika5£";
	$databaseName = "webmis";

	//connecting function for database
	$connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//main class for skill directory company
	class SkillDirectoryCompany
	{

		//validate company access by user name and password
		public static function validateCompanyAccess($userNameCompany,$passwordCompany)
		{
			
			try
			{
				
				$connection = $GLOBALS['connection'];
				$stmt = $connection->prepare("SELECT * FROM company WHERE user_name=?");
    			$stmt->execute([$userNameCompany]);

			    
			    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			    $result1 = $stmt->fetchAll();
			    
			    if(intval($result1[0]['password'])==intval($passwordCompany))
			    {
			    	
			    	return true;
			    }else
			    {
			    	return false;
			    }
			     
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return false;

			}

		}

		//validate company access by user name and password
		public static function validateCompanyPassword($companyID,$passwordCompany)
		{
			
			try
			{
				
				$connection = $GLOBALS['connection'];
				$stmt = $connection->prepare("SELECT * FROM company WHERE company_id=?");
    			$stmt->execute([$companyID]);

			    
			    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			    $result1 = $stmt->fetchAll();
			    
			    if(intval($result1[0]['password'])==intval($passwordCompany))
			    {
			    	
			    	return true;
			    }else
			    {
			    	return false;
			    }
			     
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return false;

			}

		}

		//redirect function 
		public static function redirect_to($new_location)
		{
			header("Location: ".$new_location);
			exit;
		}

		//get company details by company user name
		public static function getCompanyDetails($userNameCompany)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM company WHERE user_name=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$userNameCompany]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//get company details by company id
		public static function getCompanyDetailsByCompanyID($companyID)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM company WHERE company_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$companyID]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}


		//get vacancy details by company id
		public static function getVacancyDetails($companyID)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM vacancy WHERE company_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$companyID]);

			    $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
				$result2 = $stmt1->fetchAll();
				$rows = $stmt1->rowCount();
			    
			    return array($result2,$rows);
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//get vacancy details by vacancy id
		public static function getVacancyDetailsByVacancyID($vacancyID)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM vacancy WHERE vacancy_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$vacancyID]);

			    $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
				$result2 = $stmt1->fetchAll();
				$rows = $stmt1->rowCount();
			    
			    return array($result2,$rows);
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//edit vacancy
		public static function editVacancy($vacancyID,$vacancyName,$vacancyDate,$vacancyDetails)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt = $connection1->prepare("UPDATE vacancy SET vacancy_name=:vacancyName,date=:vacancyDate,details=:vacancyDetails WHERE vacancy_id=:vacancyID");
				$stmt->bindParam(':vacancyName', $vacancyName);
				$stmt->bindParam(':vacancyDate', $vacancyDate);
				$stmt->bindParam(':vacancyDetails', $vacancyDetails);
				$stmt->bindParam(':vacancyID', $vacancyID);
    			$stmt->execute();

			    $result1 = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				//$result2 = $stmt->fetchAll();
				$rows = $stmt->rowCount();
				echo "<br/>"."my roe : ".$rows;
			    
			    if($rows == 1)
			    {
			    	return true;

			    }else
			    {
			    	return false;
			    }
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//add a vacancy for database table
		public static function addVacancyDatabase($name,$companyID,$date,$details)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt = $connection1->prepare("INSERT INTO vacancy(vacancy_name,company_id,date,details) VALUES (:vacancyName,:companyID,:date,:details)");
				//echo "2";
				$stmt->bindParam(':vacancyName', $name);
				$stmt->bindParam(':companyID', $companyID);
				$stmt->bindParam(':date', $date);
				$stmt->bindParam(':details', $details);
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

		//delete vacancy by vacancy id
		public static function deleteVacancy($vacancyID)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("DELETE FROM vacancy WHERE vacancy_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$vacancyID]);

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

		//edit company
		public static function editCompany($companyID,$userName,$name,$email,$tp1,$tp2,$address,$fax,$details)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt = $connection1->prepare("UPDATE company SET user_name=:userName,name=:name,email=:email,telephone_01=:tp1,telephone_02=:tp2,address=:address,fax=:fax,details=:details WHERE company_id=:companyID");
				$stmt->bindParam(':userName', $userName);
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':email', $email);
				$stmt->bindParam(':tp1', $tp1);
				$stmt->bindParam(':tp2', $tp2);
				$stmt->bindParam(':fax', $fax);
				$stmt->bindParam(':address', $address);
				$stmt->bindParam(':details', $details);
				$stmt->bindParam(':companyID', $companyID);
    			$stmt->execute();

			    $result1 = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				//$result2 = $stmt->fetchAll();
				$rows = $stmt->rowCount();
				echo "<br/>"."my roe : ".$rows;
			    
			    if($rows == 1)
			    {
			    	return true;

			    }else
			    {
			    	return false;
			    }
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//change password
		public static function changePassword($companyID,$newPassword)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("UPDATE company SET password=:password WHERE company_id=:companyID");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
				$stmt->bindParam(':password', $newPassword);
				$stmt->bindParam(':companyID', $companyID);
    			$stmt1->execute();

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