<div id="header">
	<div class="head-text">
		<p class="img1">Portal4U<br>A place where U can Upload and Download </p>
	</div>

	<div class="head-form">
		<form action="includes/process.php" method="post">
			<label for="usernamelogin">User Name</label>
			<input 	type="text" name="usernamelogin" required/>

			<label for="passwordlogin">Password</label>
			<input type="password" name="passwordlogin" required/><br>

			<input type="radio" name="Selection" value="Teacher" required/>Teacher
			<input type="radio" name="Selection" value="Student" required/>Student

			<input type="submit"/>
			<br>
			<label>Forget Password?</label>
		</form>
	</div>		
</div>
