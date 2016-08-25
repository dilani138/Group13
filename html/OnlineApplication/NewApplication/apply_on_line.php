<!-- |THIS IS apply on line PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_apply_on_line.php") ?> <!-- |NAVIGATION OF THE PAGE| -->
   
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
		
		</style> 
	</head>
<body>
<div class="contianer">
    <div class="col-b-1" width="50%">
    	<div class="col-c-1">
    		<td> You can apply for our courses via on-line.<br>Please fill all the fields in this form and submit. Good luck!! </td><br>
    		<h2> On-line Application Form </h2>
			<table border="0" width="50%">
    			<thead>
    				<th>
    					<td colspan="2"> </td>
    				</th>
    			</thead>
    			<form action="" method="post">
    			<tbody>
    				<tr>
    					<td><pF>*Initials:</pF><br><p>Put your initials here <br><p1></p></td>
    					<td><input type="text" name="FN"  required /></td>
    				</tr>
    				<tr>
    					<td><pF>*Last Name:</pF><br><p>Put your surname here <br><p1></p></td>
    					<td><input type="text" name="LN" required /></td>
    				</tr>
					<tr>
    					<td><pF>*NIC No:</pF><br><p>Type your NIC No <br><p1></p></td>
    					<td><input type="text" name="NIC" required /></td>
    				</tr>
    				<tr>
    					<td><pF>*Date Of Birth</pF><br><p>Type your Birth Day <br><p1></p></td>
    					<td><input type="text" name="BD" required /></td>
    				</tr>
    				<tr>
    					<td><pF>*Gender:</pF><p1></td>
    					<td>
    						<input type="radio" name="gender" value="male" required /> Male<br>
    						<input type="radio" name="gender" value="female" required /> Female
    					</td>
    				</tr>
    				<tr>
    					<td><pF>*Address 1:</pF><br><p>Address 1 here <br><p1></p></td>
    					<td><input type="text" name="ADD1" required /></td>
    				</tr>
					<tr>
    					<td><pF>Address 2:</pF><br><p>Address 2 here <br><p1></p></td>
    					<td><input type="text" name="ADD2" /></td>
    				</tr>
    				<tr>
    					<td><pF>*City:</pF><br><p>Type your city here <br><p1></p></td>
    					<td><input type="text" name="EMAIL" required /></td>
    				</tr>
					<tr>
    					<td><pF>District:</pF><br><p>Type your District here <br><p1></p></td>
    					<td><input type="text" name="EMAIL" /></td>
    				</tr>
    				<tr>
    					<td><pF>*Home Phone:</pF><br><p>Type your home number <br><p1></p></td>
    					<td><input type="text" name="TELE" required /></td>
    				</tr>
					<tr>
    					<td><pF>*Mobile:</pF><br><p>Type your mobile number <br><p1></p></td>
    					<td><input type="text" name="TELE" required /></td>
    				</tr>
					<tr>
    					<td><pF>*E-mail:</pF><br><pOrg>Please add correct email <br><p1></p2></td>
    					<td><input type="text" name="TELE" required /></td>
    				</tr>
					
					<!--course Details................-->
					
					<tr>
    					<td><pFont><p>Course Details</p1></td>
    				</tr>
    				<tr>
    					<td><pF>*Trade:</pF><br><p>Select your Favarite Trade <br><p1></p></td>
    					<td>
    					<select name="COURSE" required>
							<option>Agriculture Plantation & Livestock</option>
							<option>Automobile Repair & Maintenance</option>
							<option>Building & Construction</option>
							<option>Electrical,Electronic & Telecommunication</option>
							<option>Fisheries & Aquaculture</option>
							<option>Food Technology</option>
							<option>Gem & Jewellery</option>
							<option>Hotel & Tourism</option>
							<option>Information Communication & Multimedia Technology</option>
							<option>Leather & Footware</option>
							<option>Metal & Light Engineering</option>
							<option>Office Management</option>
							<option>Other</option>
							<option>Personal & Community Development</option>
							<option>printing & Packaging</option>
							<option>Ref & Air-conditioning</option>
							<option>Textile & Garment</option>
							<option>Wood Related</option>
							<option></option>
						</td>
    				</tr>
    				<tr>
    					<td><pF>*Full Time/Part Time:</pF><p1></td>
    					<td>
    						<input type="radio" name="Full Time/Part Time" value="Full Time" required /> Full Time<br>
    						<input type="radio" name="Full Time/Part Time" value="Part Time" required /> Part Time
    					</td>
    				</tr>
					<tr>
    					<td><pFont><p>Educational Qualifications: </td>
    				</tr>
					<tr>
    					<td><pF>*O/L:</pF><br><p>Ordinery Level Exam Done <br><p1></p></td>
    					<td>
    						<input type="radio" name="o/l" value="Yes" required /> Yes<br>
    						<input type="radio" name="o/l" value="No" required /> No
    					</td>
    				</tr>
					<tr>
    					<td><pF>Other:</pF><br><p>Your Other Qualifications <br><p1></p></td>
    					<td><textarea rows="4" cols="22" name="comment" form="usrform">Enter text here...</textarea></td>
    				</tr>
    				</tr>
    			</tbody>
    			<tfoot>
    				<tr>
    					<td></td>
    					<td>
    						<button class="button">Submit</button>
    						<button class="button">Cancel</button>
    					</td>
    				</tr>
    			</tfoot>
    			</form>
    		</table>
    	</div>
    </div>
</div>
</body>
</html>
<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
