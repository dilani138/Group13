<?php include("../../includes/database/databaseConnection.php");?>

<?php

	$severName = "localhost";
	$userName = "root";
	$password = "";
	$databaseName = "webmis";

	$connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	class SkillDirectoryStudent
	{

		//validate student access by user name and password
		public static function validateStudentAccess($userNameStudent,$passwordStudent)
		{
			
			try
			{
				
				$connection = $GLOBALS['connection'];
				$stmt = $connection->prepare("SELECT * FROM graduates WHERE user_name=?");

                                $stmt->execute([$userNameCompany]);

    			$stmt->execute([$userNameStudent]);

			    
			    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			    $result1 = $stmt->fetchAll();
			    
			    if(intval($result1[0]['password'])==intval($passwordStudent))
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
		
		//validate password
		public static function validateStudentPassword($studentID,$passwordStudent)
		{
			
			try
			{
				
				$connection = $GLOBALS['connection'];
				$stmt = $connection->prepare("SELECT * FROM graduates WHERE student_id=?");
    			$stmt->execute([$studentID]);


			    
			    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			    $result1 = $stmt->fetchAll();
			    
			    if(intval($result1[0]['password'])==intval($passwordStudent))
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
		
		//get student details by student user name
		public static function getStudentDetails($userNameStudent)
		{
			
			try
			{
				
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM graduates WHERE user_name=?");
				
    			$stmt1->execute([$userNameStudent]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//get student details by student id
		public static function getStudentDetailsByStudentID($studentID)
		{
			
			try
			{
				
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM graduates WHERE student_id=?");
				
    			$stmt1->execute([$studentID]);

			    
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
		
		//edit student profile
		public static function editStudent($studentID,$userName,$firstname,$lastname,$email,$tp,$address,$qualification)
		{
			
			try
			{
				
				$connection1 = $GLOBALS['connection'];
				$stmt = $connection1->prepare("UPDATE graduates SET user_name=:userName,first_name=:firstname,last_name=:lastname,email=:email,telephone=:tp,address=:address,extra_qualification=:qualification WHERE student_id=:studentID");
				$stmt->bindParam(':userName', $userName);
				$stmt->bindParam(':firstname', $firstname);
				$stmt->bindParam(':lastname', $lastname);
				$stmt->bindParam(':email', $email);
				$stmt->bindParam(':tp', $tp);
				
				
				$stmt->bindParam(':address', $address);
				$stmt->bindParam(':qualification', $qualification);
				$stmt->bindParam(':studentID', $studentID);
    			$stmt->execute();

			    $result1 = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				
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
		public static function changePassword($studentID,$newPassword)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("UPDATE graduates SET password=:password WHERE student_id=:studentID");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
				$stmt1->bindParam(':password', $newPassword);
				$stmt1->bindParam(':studentID', $studentID);
    			$stmt1->execute();

			    $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
				//$result2 = $stmt1->fetchAll();
				$rows = $stmt1->rowCount();
				//echo "leel ".$rows;
			    
			    if($rows == 1)
			    {
			    	return true;
			    }
			    else{
			    	return false;
			    }
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return false;

			}
		}
	/*	
	//get vacancy details 
		public static function getVacancyDetails()
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM vacancy");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute();

			    $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
				$result2 = $stmt1->fetchAll();
				$rows = $stmt1->rowCount();
			    
			    return array($result2,$rows);
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}*/
	}

?>