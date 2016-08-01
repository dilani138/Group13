<!-- |THIS IS apply on line PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_apply_on_line.php") ?> <!-- |NAVIGATION OF THE PAGE| -->
   
<!-- |CONTENT OF THE PAGE| -->
   
<div class="contianer">
    <div class="col-b-1">
    	<div class="col-c-1">
    		<h2> On-line Application Form</h2>
    		<p>You can apply for our courses via on-line. Please fill all the fields in this forum and submit. Good luck!! </p>
    		<table border="0" width="50%" align="Center">
    			<thead>
    				<th>
    					<td colspan="2"> On-line Application Form</td>
    				</th>
    			</thead>
    			<form action="" method="post">
    			<tbody>
    				<tr>
    					<td>First Name:</td>
    					<td><input type="text" name="FN" required /></td>
    				</tr>
    				<tr>
    					<td>Last Name:</td>
    					<td><input type="text" name="LN" required /></td>
    				</tr>
    				<tr>
    					<td>Birth Day:</td>
    					<td><input type="text" name="BD" required /></td>
    				</tr>
    				<tr>
    					<td>Gender:</td>
    					<td>
    						<input type="radio" name="gender" value="male" required /> Male
    						<input type="radio" name="gender" value="female" required /> Female
    					</td>
    				</tr>
    				<tr>
    					<td>NIC No:</td>
    					<td><input type="text" name="NIC" required /></td>
    				</tr>
    				<tr>
    					<td>Address:</td>
    					<td><input type="text" name="ADD" required /></td>
    				</tr>
    				<tr>
    					<td>E-mail:</td>
    					<td><input type="text" name="EMAIL" required /></td>
    				</tr>
    				<tr>
    					<td>Contact No:</td>
    					<td><input type="text" name="TELE" required /></td>
    				</tr>
    				<tr>
    					<td>Academic Qualification:</td>
    					<td><textarea name="ACADEMIC" required></textarea></td>
    				</tr>
    				<tr>
    					<td>Course you are interested:</td>
    					<td>
    					<select name="COURSE" required>
							<option>######</option>
							<option>ddddd</option>
							<option>eeeee</option>
						</td>
    				</tr>
    				<tr>
    					<td>District:</td>
    					<td>
    					<select name="DIST" required>
							<option>######</option>
							<option>ddddd</option>
							<option>eeeee</option>
						</td>
    				</tr>
    				<tr>
    					<td>Center:</td>
    					<td>
    					<select name="CENT" required>
							<option>######</option>
							<option>ddddd</option>
							<option>eeeee</option>
						</td>
    				</tr>
    			</tbody>
    			<tfoot>
    				<tr>
    					<td></td>
    					<td>
    						<input type="submit" name="SUBMIT" value="Submit" />
    						<input type="reset" name="RESET" value="Cancel" />
    					</td>
    				</tr>
    			</tfoot>
    			</form>
    		</table>
    	</div>
    </div>
</div>

<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
