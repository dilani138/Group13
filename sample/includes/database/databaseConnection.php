<?php
//connect to main database ;;
//give server name,user name, password and database name;;
//call method like that --->>> DatabaseConnection::connectDatabase($servername,$username,$password,$dbname);

class DatabaseErrorException extends Exception
{
	public function getErrorMessage()
	{
		return "Error occur in database connection";
	}
}

class DatabaseConnection
{

	public static function connectDatabase($severName,$userName,$password,$databaseName) throws DatabaseErrorException
	{
		$connection = new mysqli($serverName, $userName, $password, $databaseName);
		
		if ($connection->connect_error) 
		{
			throw new DatabaseErrorException("Error occur in database connection");
		    die("Connection failed: " . $conn->connect_error);
		}

		return $connection;
	}
}
?>