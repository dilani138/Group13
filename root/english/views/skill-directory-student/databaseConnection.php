<?php
//connect to main database ;;
//give server name,user name, password and database name;;
//call method like that --->>> DatabaseConnection::connectDatabase($servername,$username,$password,$dbname);

class DatabaseConnection
{

	public static function connectDatabase($serverName,$userName,$password,$databaseName) 
	{
		$connection = new mysqli($serverName, $userName, $password, $databaseName);
		echo "hello";
		if ($connection->connect_error) 
		{
			
		    die("Connection failed: " . $connection->connect_error);
		}

		return $connection;
	}
}

class DatabaseConnectionPDO
{

	public static function connectDatabase($serverName,$userName,$password,$databaseName)
	{
		
		
		try 
		{
			
		    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully";
		    return $conn;
		}
		catch(PDOException $e)
		{
		    echo "Connection failed: " . $e->getMessage();
		}

		
	}
}
?>