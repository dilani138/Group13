<!-- |THIS IS skill directory PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_skill_directory.php") ?> <!-- |NAVIGATION OF THE PAGE| -->
   
<!-- |CONTENT OF THE PAGE| -->
   
<div class="contianer">
	| This is login page | <br/>

	<div class="col-b-1">
		<div class="col-c-1">
			<h3> Login here </h3>
			<form method="post" action="../php/login.php">
				<table>
					<tr>
						<td>Login:</td>
						<td><input type="text" name="un"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pw"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login" name="lg"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
