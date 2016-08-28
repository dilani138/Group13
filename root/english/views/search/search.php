
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVBPIjIDUkpPxXiMGv7wPt-85ceFr4-Kk&callback=initMap"
  type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>

<?php
  include("../../includes/main/header.php");
  include("../../includes/navigations/nav_active_skill_directory.php");
  include("search_database_classes.php");

?>

<?php 
	$option = false;
	
	if(isset($_POST['submit']))
	{
		
		

		$centerID = $_POST['center'];
		$centerDetails = SearchDatabase::getCentersByCenterID($centerID);

		$lan = $centerDetails[0]['latitude'];
		$lon = $centerDetails[0]['longitude'];

		
		
	}else{
		$lan = 6.897593;
		$lon = 79.881483;
	}
	


	//$myfile = fopen("places1.txt", "r") or die("Unable to open file!");
	
	
	
	

?> 
<script>
	function initMap() {
    
		var mapDiv = document.getElementById('map');
		var map = new google.maps.Map(mapDiv,{
  		center: {lat: <?php echo $lan; ?>, lng: <?php echo $lon; ?>,},
  		zoom: 16
		});

		var marker=new google.maps.Marker({
			  position:{lat: <?php echo $lan; ?>, lng:<?php echo $lon; ?>},
			  animation:google.maps.Animation.BOUNCE
			  });

		marker.setMap(map);
		}

  google.maps.event.addDomListener(window, 'load', initMap);
  $(document).bind("projectLoadComplete", initialize);
	</script>
 



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
    	<form method = "post" action = "search.php">
    	<select name="district" align ="left" bgcolor="#ffcc99" class="select-field" onchange="getID(this.value);"><br /><br/>
																
			<option value="Galle">Galle</option>
			<option value="Mathara">Mathara</option>
			<option value="Colombo">Colombo</option>
			<option value="Anuradhapura">Anuradhapura</option>


		</td>

															
	<!--center..........................................................................................................................-->															
    <td><span class="required">  </span><select name="center" align ="center" id="centerList" onchange="getCourseID(this.value);"><br><br/>
																
	
	</td>														
	<!--course...........................................................................................................................-->															
	<td><span class="required">  </span><select name="course" align ="right" id="courseList"><br><br/>
																
			

		</td>

<!--search................................................................................................................................-->																
	
	<td><input type="submit" value="Submit" name="submit"></td>	
	</form>														
  </tr>
</table>


<div class="col-b-2-r right">
		<div class="col-c-1">
			
			<h1> Satellite Map </h1>
			<div id="map" style="width:80%;height:600px;"></div>
			

		</div>
	</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
	function getID(val)
	{
		$.ajax({
			type:"POST",
			url:"getCenterData.php",
			data:"district="+val,
			success: function(data){
				$("#centerList").html(data);
			}

		});
	}
</script>

<script>
	function getCourseID(val)
	{
		$.ajax({
			type:"POST",
			url:"getCourseData.php",
			data:"center="+val,
			success: function(data){
				$("#courseList").html(data);
			}

		});
	}
</script>
</body>
</html>