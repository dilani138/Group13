<div class="container">
    <?php
        include("../../includes/main/header.php");
        include("../../includes/navigations/nav_active_apply_on_line.php");
    ?>
</div>

<div class="content">
    <div class="col-b-1">
        <table border ="0" width ="60%" align ="center" >
		
<!--Application form...................................................................................................-->
		
			<tr>
				<th><img src = "application/Applicationform.jpg" align ="left" ></th>
		
			</tr>
			

<!--full name...................................................................................................-->
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/fullName.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><input type="text" class="input-field" name="field1" value="" size ="45%" >
							</th>
						</tr>
					</table>
				</th>
			</th>
<!--gender...................................................................................................-->
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/gender.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><input type="radio" name="gender" value="male">Male<br>
																<input type="radio" name="gender" value="female">Female<br>
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--date of birth..................................................................................................-->		
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/dateofbirth.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required"></span></span><input type="date" class="input-field" name="field3" value="" size="45%"> 
						</tr>
					</table>
				</th>
			</th>
			
<!--NIC number..................................................................................................-->			
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/nic.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><input type="text" class="input-field" name="field1" value="" size ="45%" >
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--address..................................................................................................-->			
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/address.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><input type="text" class="input-field" name="field1" value="" size ="45%" rows="5" >
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--email..................................................................................................-->						
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/email.jpg" align="head" align ="left-side" >
							</th>
							<th>
								</span></span><input type="email" class="input-field" name="field2" value="" size="45%">
							</th>
						</tr>
					</table>
				</th>
			</th>

<!--contact number..................................................................................................-->	
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/contact.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<input type="text" class="input-field" name="field3" value="" size="45%">
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--Acadamic qualification..................................................................................................-->	
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/acadamic.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><textarea></textarea>

							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--professional Qualification..................................................................................................-->		
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/profetional.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><input type="textarea" class="input-field" name="field1" value="" size ="45%" rows="5" >
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--district of interest...................................................................................................-->
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/distrect.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><select name="field4" class="select-field"><br><br/>
																<option Course_value="Galle">Galle</option>
																<option Course_value="Mathara">Mathara</option>
																<option Course_value="Colombo">Colombo</option>
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--center of interest...................................................................................................-->
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/center.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><select name="field4" class="select-field"><br><br/>
																<option Course_value="#####">######</option>
																<option Course_value="ddddd">ddddd</option>
																<option Course_value="eeeee">eeeee</option>
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--tread of interest...................................................................................................-->
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<img src = "application/treadofinterest.jpg" align="head" align ="left-side" >
							</th>
							<th>
								<span class="required">  </span><select name="field4" class="select-field"><br><br/>
																<option Course_value="Appointment">Appointment</option>
																<option Course_value="Interview">Interview</option>
																<option Course_value="Regarding a post">Regarding a post</option>
							</th>
						</tr>
					</table>
				</th>
			</th>
			
<!--submit.............................................................................................................................-->			
			<tr>
				<th>
					<table>
						<tr>
							<th>
								<button type="submit" value="Submit"><img src = "application/su.png" align="head" align ="left-side" ></button>
							</th>
						</tr>
					</table>
				</th>
			</th>

		</table>
    </div>
</div>

 <?php
        include("../../includes/main/footer.php");
?>