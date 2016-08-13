
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
<script>
	function initMap() {
    
		var mapDiv = document.getElementById('map');
		var map = new google.maps.Map(mapDiv,{
  		center: {lat: 44.540, lng: -78.546},
  		zoom: 8
		});

		}

  google.maps.event.addDomListener(window, 'load', initMap);
	</script>

<!-- |THIS IS contact PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_contact.php") ?>  <!-- |NAVIGATION OF THE PAGE| -->


<!-- |CONTENT OF THE PAGE| -->
   
<div class="content">
	<div class="col-b-2">
		<div class="col-c-1">
			
			<h1> Contact Details </h1>
			<table border= "0" class="tb-1" >

				<tr>
					<td style="vertical-align: top;">  Mailing address: </td>
					<td style="vertical-align: top;"> 
						 354/2 , "Nipunatha Piyasa" ,<br/>
						  Elvitigala Mawatha, <br/>
						  Colombo 05, <br/>
						  Sri Lanka. <br/>	                         
					</td>
				</tr>

				<tr>
					<td> Hot line : </td>
					<td> +94117270270</td>
				</tr>

				<tr>
				   <td> Telephone : </td>
				   <td> +94112596517-16 </td>
				</tr>

				<tr>
					<td> Fax : </td>
					<td>+94112502342 </td>
				</tr>

				<tr>
					<td> Email : </td>
					<td> info@vtasl.gov.lk </td>
				</tr>

				<tr>
					<td> Web : </td>
					<td> www.vtasl.gov.lk </td>
				</tr>
				
			</table>
		</div>		
	</div>

	<div class="col-b-2-r right">
		<div class="col-c-1">
			
			<h1> Satellite Map </h1>
			<div id="map" style="width:80%;height:300px;"></div>
			

		</div>
	</div>

	<div class="col-b-2">
		<div class="col-c-1">
			
			<h1> Leave Your Message </h1>
			<form method="post">

				<table border="0" class="tb-1" >
					
					<tr>
						<td> Name:</td>
						<td> <input type="text" name="name" value="" /></td>
					</tr>

					<tr>
						<td> Email:</td>
						<td> <input type="text" name="email" value="" /></td>
					</tr>

					<tr>
						<td> Telephone:</td>
						<td> <input type="text" name="telephone" value="" /></td>
					</tr>

					<tr>
						<td> Subject:</td>
						<td> <input type="text" name="subject" value="" /></td>
					</tr>

					<tr>
						<td> Message:</td>
						<td> <textarea name="message" > </textarea></td>
					</tr>

					<tr>
					<td></td>
						<td > <input type="submit" name="Send Message" value="Send Message" /></td>
					</tr>

				</table>	
			</form>

		</div>			
	</div>
</div>


<!--div id="map" style="width:500px;height:380px;"></div-->

</body>
<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
</html>
