<?php include("../includes/new_main_header.php");?>

<div class= "container" >


		
	
	
	<div class= "content" >
		<div class= "content_spec">
	
		<div class= "para_01">
		<h1> WELCOME </h1>
		<p class= "p1">
		Hi, here you can search about our courses and our branches and where they are situated.
		</p>
		
			<table class= "table1" border= "0" width= "350px" height= "150px" >
		
				<form method="post" action= "action page.php" >
				
				<tr>
				<td> <input type= "radio" name= "Course" value= "" checked> </td>
				<td> Course </td>
				<td align= "right" >
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
				<td align= "right" >
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
				<td align= "right" >
				<select name= "Branches" >  
				<option value= "--Select your Branch--" > --Select your Branch-- </option>
				<option value= "Branch_1" > Branch_1 </option>
				<option value= "Branch_2" > Branch_2 </option>
				<option value= "Branch_3" > Branch_3 </option>
				</td>
				</tr>
				
				<tr> 
				<td colspan= "3"align= "right"  > 
				<input type= "submit" name= "Search" value= "Search" />
				<input type= "reset" name="Reset all" value="Reset all" /> 
				</td>
				</tr>
				
				
				</form>
			
			</table>
			
		</div>	
		</div>
	</div>
	
	
	
	
	
</div>

</body>

</html>

