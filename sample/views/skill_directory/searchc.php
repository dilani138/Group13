<!DOCTYPE HTML >

<?php include("../../includes/main/header.php")?>
<?php //include("../../sample/includes/navigation/n.php")?>
<?php include ("databaseConnection.php")?>

	
	<style>
.button {
    background-color:#000000;
    text-align: center;
	padding: 5px 5px;
	color: white;
	cursor: pointer;
	margin: 10px 12px;
}.static {
    position: static;
    border: 1px solid #87CEEB;
	padding-left:10px;
	margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
  
}

</style>
</head>

<body>
<!-- profile picture -->
<div style="background-color:#87CEEB; padding:25px">
Abc Co ltd<br><br>
</div>

<!-- black row with buttons -->
<div class="button">
<a href="comprofile.php"><button class="button" type="button">Profile</button></a>
<a href="AllVacancy.php"><button class="button" type="button">Vacancies</button></a>
<a href="searchc.php"><button class="button" type="button">Search</button></a>
<a href=""><button class="button" type="button">Logout</button></a>
</div>


<?php
$severName = "localhost";
$userName = "root";
$password = "123";
$databaseName = "webmis";

// set data in input text
$sname="";


if(isset($_POST['Search By Name']))
{
    try {

        // connect to mysql

        $connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 		
		catch (Exception $ex){
		echo 'Please Try again'.$ex->getMessage();
    }
	// id to search
    $sname = $_POST['sname'];
    
     // mysql search query
    $pdoQuery = "SELECT * FROM 'graduates' WHERE 'first_name' = :sname OR 'last_name'= :sname";
    
    $pdoResult = $connection->prepare($pdoQuery);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":sname"=>$sname));
    
    if($pdoExec)
    {
            // if id exist 
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            	
			echo"found 1 rcord";
            }
        }
            // if the id not exist
            // show a message and clear inputs
        else{
            echo 'No Graduates avalable With This Name';
        }
		// if the placeholder is empty
    }else{
        echo 'ERROR Student name is not Not Inserted to search';
		}	
}

?>

<!-- content area -->
<div class="static">
<form action="" target=_self name=post>
<input type="textbox" name=sname placeholder="Type Student Name" size="28"> 
<input type="submit" value="Search By Name"><br><br>
<select name="scourse">
    <option value="">Select course</option>
    <option value="Baker">Baker</option>
    <option value="Industrial Sewing machine operator">Industrial Sewing machine operator</option>
    <option value="Work study officer">Work study officer</option>
  </select>
<input type="submit" value=Search></form>

</div>
</body>
</html>

</head>
<body>
</body>
</html>

</div>

</body>

</html>

