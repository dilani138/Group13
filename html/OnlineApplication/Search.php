

<?php include("../includes/new_main_header.php");?>
<?php include("../../sample/includes/database/databaseConnection.php"); ?>



<?php 
$severName = "localhost";
$userName = "root";
$password = "£5shashika5£";
$databaseName = "webmis";




try {
    $connection = DatabaseConnectionPDO::connectDatabase($severName,$userName,$password,$databaseName);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $connection->prepare("SELECT * FROM course");
    
    $stmt->execute();

    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result1 = $stmt->fetchAll();

     foreach($result1 as $row)
        {
        echo $row['course_id'].'-'.$row['course_name'].'-'.$row['nvq_level'];
        }
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
/*try{

	$connection = DatabaseConnection::connectDatabase($severName,$userName,$password,$databaseName); 
}catch(PDOException $e)
{
	echo "error";
}*/
?>

<br></br>
<table cellspacing="10" align="center">

<!--district.center,course........................................................................................................-->
  <tr>
    <th><img src = "search/district.jpg" align ="left" ></th>
	<th><img src = "search/center.jpg" align ="center" ></th>
	<th><img src = "search/course.jpg" align ="right" ></th>
  </tr>
  
  
  <tr>
  
  <!--district......................................................................................................................-->
    <td><span class="required">  </span><select name="field4" align ="left" bgcolor="#ffcc99" class="select-field"><br><br/>
																<option Course_value="Galle">##################</option>
																<option Course_value="Galle">Galle</option>
																<option Course_value="Mathara">Mathara</option>
																<option Course_value="Colombo">Colombo</option></td>
																
	<!--center..........................................................................................................................-->															
    <td><span class="required">  </span><select name="field4" align ="center" class="select-field"><br><br/>
																<option Course_value="#####">###################</option>
																<option Course_value="ddddd">ddddd</option>
																
	<!--course...........................................................................................................................-->															
	<td><span class="required">  </span><select name="field4" align ="right"class="select-field"><br><br/>
																<option Course_value="Galle">###################</option>
																<option Course_value="Appointment">Appointment</option>
																<option Course_value="Interview">Interview</option>
																<option Course_value="Regarding a post">Regarding a post</option></td>

<!--search................................................................................................................................-->																
	<td><img src = "search.jpg" align ="right" type="search" id="mySearch"></td>																
  </tr>
</table>


</body>
</html>