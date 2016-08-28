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

	class SearchDatabase
	{
		public static function redirect_to($new_location)
		{
			header("Location: ".$new_location);
			exit;
		}

		//get center details by district name
		public static function getCentersByDistrict($district)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM center WHERE district=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$district]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//get course by center
		public static function getCourseByCenter($center)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$sql = "SELECT course.course_id,course.course_name,course.time_period FROM course INNER JOIN course_center ON course_center.course_id=course.course_id WHERE course_center.center_id=?";
				$stmt1 = $connection1->prepare($sql);
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$center]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}

		//get center details by center id
		public static function getCentersByCenterID($centerID)
		{
			
			try
			{
				//echo $userNameCompany;
				$connection1 = $GLOBALS['connection'];
				$stmt1 = $connection1->prepare("SELECT * FROM center WHERE center_id=?");
				//echo "2";
				//$stmt->bindParam(':user_name', $userNameCompany);
    			$stmt1->execute([$centerID]);

			    
			    $result2 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
			    $result3 = $stmt1->fetchAll();
			    return $result3;
			}catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
				return null;

			}
		}
	}
	?>