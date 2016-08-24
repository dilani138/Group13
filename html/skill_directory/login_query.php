<div class="container">
    <?php
        include("../../includes/main/header.php");
        include("../../includes/navigations/nav_active_skill_directory.php");
    ?>
</div>
<?php include("../includes/database/databaseConnection.php");?>

<?php
$con=DatabaseConnectionPDO::connectDatabase("localhost","root","","webmis");
if (isset $_POST['login'])
{
	$username=$_POST['un'];
	$password=$_POST['pw'];
}
if($username==null || $password==null){
	redirect_to("login_page.php");
	
}
else{
	try{
		$connection=DatabaseConnectionPDO::connectDatabase(localhost,root, ,webmis);
		$stmt= SELECT user_name,password FROM graduates where user_name = $username;
		//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		//foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        //echo $v;
    }
	}
	catch(PDOException $e)
		{
		    echo "Connection failed: " . $e->getMessage();
		}
}
?>