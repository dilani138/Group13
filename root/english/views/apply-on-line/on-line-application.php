<!-- |THIS IS apply on line PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php");?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_apply_on_line.php"); ?> <!-- |NAVIGATION OF THE PAGE| -->
<?php include("application_database_classes.php"); ?>
   

   
<!-- |CONTENT OF THE PAGE| -->
<html>
	<head>
		<style>  
			p {
			display: block;
			margin-top: 0em;
			margin-bottom: 0em;
			margin-left: 0;
			margin-right: 0;
			font-size:100%;
		}
			p1 {
			display: block;
			margin-top: 1em;
			margin-bottom: 0em;
			margin-left: 0;
			margin-right: 0;
			font-size:150%;
		}
			pOrg {
			margin-top: 0em;
			margin-bottom: 0em;
			margin-left: 0;
			margin-right: 0;
			color: Orange;
		}
			pF{
			font-weight: bold;	
		}
			pFont {
			font-family: Arial;
			font-size: 20px;
			font-weight: bold;
		}
			button {
			background-color: #00000;
			border: 1px;
			color: black;
			padding: 5px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			transition-duration: 0.4s;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 10px 0 rgba(0,0,0,0.19);
		}
        bodyimg{
               margin: auto;
                background-image: url("application_background.png");
                background-repeat: no-repeat;
                background-size: 100% 720px;
            } 
		
		</style> 
	</head>
    
<body><bodyimg>
<div class="col-b-2-r right">
        <div class="col-c-1"></div></div>
<div class="container" >
<div class="contianer">
    <div class="col-b-2" width="50%" >
        <div class="col-c-1"><bodyimg>
    		<td> You can apply for our courses via on-line.<br>Please fill all the fields in this form and submit. Good luck!! </td><br>
    		<h2> On-line Application Form </h2>
			<table border="0" width="50%">
    			<thead>
    				<th>
    					<td colspan="2"> </td>
    				</th>
    			</thead>
    			<form action="onlineApplicationQuery.php" method="post" >
    			<tbody>
    				<tr>
    					<td><pF>*Initials:</pF><br><p>Put your initials here <br><p1></p></td>
    					<td><input type="text" name="Initials"   /></td>
    				</tr>
    				<tr>
    					<td><pF>*Last Name:</pF><br><p>Put your surname<br><p1></p></td>
    					<td><input type="text" name="LN"  /></td>
    				</tr>
					<tr>
    					<td><pF>*NIC No:</pF><br><p>Type your NIC No <br><p1></p></td>
    					<td><input type="text" name="NIC"  /></td>
    				</tr>
    				<tr>
    					<td><pF>*Date Of Birth</pF><br><p>Type your Birth Day <br><p1></p></td>
    					<td><input type="text" name="BD"  /></td>
    				</tr>
    				<tr>
    					<td><pF>*Gender:</pF><p1></td>
    					<td>
    						<input type="radio" name="gender" value="male"  /> Male<br>
    						<input type="radio" name="gender" value="female"  /> Female
    					</td>
    				</tr>
    				<tr>
    					<td><pF>*Address 1:</pF><br><p>Address 1 here <br><p1></p></td>
    					<td><input type="text" name="Add1" required /></td>
    				</tr>
					<tr>
    					<td><pF>Address 2:</pF><br><p>Address 2 here <br><p1></p></td>
    					<td><input type="text" name="Add2" /></td>
    				</tr>
    				<tr>
    					<td><pF>*City:</pF><br><p>Type your city here <br><p1></p></td>
    					<td><input type="text" name="City"  /></td>
    				</tr>
					<tr>
    					<td><pF>District:</pF><br><p>Type your District<br><p1></p></td>
    					<td><input type="text" name="District" /></td>
    				</tr>
    				<tr>
    					<td><pF>*Home Phone:</pF><br><p>Type your home number <br><p1></p></td>
    					<td><input type="text" name="HPhone"  /></td>
    				</tr>
					<tr>
    					<td><pF>*Mobile:</pF><br><p>Type your mobile number <br><p1></p></td>
    					<td><input type="text" name="Mobile"  /></td>
    				</tr>
					<tr>
    					<td><pF>*E-mail:</pF><br><pOrg>Please add correct email <br><p1></p2></td>
    					<td><input type="text" name="Email"  /></td>
    				</tr>
					
					<!--course Details................-->
					
					<tr>
    					<td><pFont><p>Course Details</p1></td>
    				</tr>
    				<tr>
    					<td><pF>*Trade:</pF><br><p>Select your Favarite Trade <br><p1></p></td>
    					<td>
    					<select name="Course" >
							<option value="1" >Agriculture Plantation & Livestock</option>
							<option value="2">Automobile Repair & Maintenance</option>
							<option value="3">Building & Construction</option> 
							<option value="4">Electrical,Electronic & Telecommunication</option>
							<option value="5">Fisheries & Aquaculture</option>
							<option value="6">Food Technology</option>
							<option value="7">Gem & Jewellery</option>
							<option value="8">Hotel & Tourism</option>
							<option value="9">Information Communication & Multimedia Technology</option>
							<option value="10">Leather & Footware</option>
							<option value="11">Metal & Light Engineering</option>
							<option value="12">Office Management</option>
							<option value="13">Other</option>
							<option value="14">Personal & Community Development</option>
							<option value="15">printing & Packaging</option>
							<option value="16">Ref & Air-conditioning</option>
							<option value="17">Textile & Garment</option>
							<option value="18">Wood Related</option>
							<option></option>
						</td>
    				</tr>
    				<tr>
    					<td><pF>*Full Time/Part Time:</pF><p1></td>
    					<td>
    						<input type="radio" name="FullPart" value="Full Time"  /> Full Time<br>
    						<input type="radio" name="FullPart" value="Part Time"  /> Part Time
    					</td>
    				</tr>
					<tr>
    					<td><pFont><p>Educational Qualifications: </td>
    				</tr>
					<tr>
    					<td><pF>*O/L:</pF><br><p>Ordinery Level Exam Done <br><p1></p></td>
    					<td>
    						<input type="radio" name="oLevel" value="Yes"  /> Yes<br>
    						<input type="radio" name="oLevel" value="No"  /> No
    					</td>
    				</tr>
					<tr>
    					<td><pF>Other:</pF><br><p>Other Qualifications <br><p1></p></td>
    					<td><textarea rows="4" cols="22" name="Other" form="usrform">Enter text here...</textarea></td>
    				</tr>
    				</tr>
    			</tbody>
    			<tfoot>
    				<tr>
    					<td></td>
    					<td>
    						<button type="submit" value="Submit" name="apply" >Submit</button>
    						
    					</td>
    				</tr>
    			</tfoot>
    			</form>
    		</table>
            </bodyimg>
    	</div>
    </div>
</div>
</bodyimg>
</body>

</html>
<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
