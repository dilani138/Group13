<!-- |THIS IS search PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_search.php") ?> <!-- |NAVIGATION OF THE PAGE| -->
   
<!-- |CONTENT OF THE PAGE| -->
   
<div class="contianer">
    
	| Thiss is search page | <br/>

	<div class="col-b-1">
		<div class="col-c-1">
			<p>
				** Hi, here you can search about our courses and our branches and where they are situated.
			</p>
		
			<table border= "0" width="50%" align="center" cellspacing="5px">
		
				<form method="post" action= "action page.php" >
				
				<tr>
				<td> <input type= "radio" name= "Course" value= "" checked> </td>
				<td> Course </td>
				<td>
				<select name= "Course" >  
				<option value= "--Select your Course--" > --Select your Course-- </option>
				<option value= "IT" > IT </option>
				<option value= "IS" > IS </option>
				<option value= "CS" > CS </option>
				<option value= "BIT" > BIT </option>
				<option value= "MIT" > MIT </option>
				</td>
				</tr>
				
				<tr>
				<td> <input type= "radio" name= "District" value= "" /> </td>
				<td> District </td>
				<td>
				<select name= "District" >  
				<option value= "--Select your District--" > --Select your District-- </option>
				<option value= "Hambantota" > Hambantota </option>
				<option value= "Matara" > Matara </option>
				<option value= "Galle" > Galle </option>
				<option value= "Colombo" > Colombo </option>
				<option value= "Kaluthara" > Kaluthara </option>
				<option value= "Gampaha" > Gampaha </option>
				<option value= "Rathnapura" > Rathnapura </option>
				<option value= "Badhulla" > Badhulla </option>
				</td>
				</tr>
				
				<tr>
				<td> <input type= "radio" name= "Branches" value= "" /> </td>
				<td> Branches </td>
				<td>
				<select name= "Branches" >  
				<option value= "--Select your Branch--" > --Select your Branch-- </option>
				<option value= "Branch_1" > Branch_1 </option>
				<option value= "Branch_2" > Branch_2 </option>
				<option value= "Branch_3" > Branch_3 </option>
				</td>
				</tr>
				
				<tr> 
				<td></td>
				<td></td>
				<td> 
				<input type= "submit" name= "Search" value= "Search" />
				<input type= "reset" name="Reset all" value="Reset all" /> 
				</td>
				</tr>
				
				
				</form>
			
			</table>
		</div>
	</div>
	
</div>

<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
