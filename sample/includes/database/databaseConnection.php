<?php
//connect to main database ;;
//give server name,user name, password and database name;;
//call method like that --->>> DatabaseConnection::connectDatabase($servername,$username,$password,$dbname);
	class DatabaseConnection
	{

		public static function connectDatabase($severName,$userName,$password,$databaseName)
		{
			$connection = new mysqli($serverName, $userName, $password, $databaseName);
			
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			return $connection;
	}
}
?>