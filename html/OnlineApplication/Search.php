
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVBPIjIDUkpPxXiMGv7wPt-85ceFr4-Kk&callback=initMap"
  type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>

<?php include("../includes/new_main_header.php");?>
<?php include("../../sample/includes/database/databaseConnection.php"); ?>

<?php 
	$option = false;
	echo $_GET['Submit'];
	if(isset($_GET['Submit']))
	{
		$option=true;
		echo "<br>";
		echo "hiiii";
		echo "$option";
		echo "<br>";
	}
	


	$myfile = fopen("places1.txt", "r") or die("Unable to open file!");
	echo "<br>";
	echo fread($myfile,filesize("places1.txt"));
	echo "<br>";

	$lan = 6.897593;
	$lon = 79.881483;
	echo "option : ".$option;
	if($option)
	{
		echo "hello";
		$lan = 8.311352;
		$lon = 80.403651;
	}

?> 
<script>
	function initMap() {
    
		var mapDiv = document.getElementById('map');
		var map = new google.maps.Map(mapDiv,{
  		center: {lat: <?php echo $lan; ?>, lng: <?php echo $lon; ?>,},
  		zoom: 8
		});

		var marker=new google.maps.Marker({
			  position:{lat: <?php echo $lan; ?>, lng:<?php echo $lon; ?>},
			  animation:google.maps.Animation.BOUNCE
			  });

		marker.setMap(map);
		}

  google.maps.event.addDomListener(window, 'load', initMap);
	</script>
 

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
    <td><span class="required">  </span>
    	<form method = "GET" action = "Search.php">
    	<select name="district" align ="left" bgcolor="#ffcc99" class="select-field"><br><br/>
																
																<option Course_value="Galle">Galle</option>
																<option Course_value="Mathara">Mathara</option>
																<option Course_value="Colombo">Colombo</option></td>
		
																
	<!--center..........................................................................................................................-->															
    <td><span class="required">  </span><select name="field4" align ="center" class="select-field"><br><br/>
																
																<option Course_value="ddddd">ddddd</option>
																
	<!--course...........................................................................................................................-->															
	<td><span class="required">  </span><select name="field4" align ="right"class="select-field"><br><br/>
																
																<option Course_value="Appointment">Appointment</option>
																<option Course_value="Interview">Interview</option>
																<option Course_value="Regarding a post">Regarding a post</option></td>

<!--search................................................................................................................................-->																
	<td><img src = "search/Search.jpg" align ="right" type="search" id="mySearch"></td>	
	<td><input type="submit" value="Submit"></td>	
	</form>														
  </tr>
</table>


<div class="col-b-2-r right">
		<div class="col-c-1">
			
			<h1> Satellite Map </h1>
			<div id="map" style="width:80%;height:600px;"></div>
			

		</div>
	</div>

<?php fclose($myfile);?>
</body>
</html>