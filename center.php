<br><br><br><br><br><hr>
<div class="CentreMain">
	<div class="Signup">
	 	<form action="includes/process.php" method="post">
			<p>Login Page for Teacher<br> <!-- <input type="button" value="Sign Up" class="stylish_Button"> --> Sign Up<br>It's Free and always will be free<br></p>

			<input type="text" name="firstname" placeholder="Firstname" required/>
			<input type="text" name="lastname" placeholder="Lastname" required/><br><br>
			<input type="text" name="username" placeholder="UserName" required/><br><br>
			<input type="password" name="password" placeholder="Password" required/><br><br>
			<input type="password" name="cpassword" placeholder="ConfirmPassword" required/><br><br>
			<input type="radio" name="gender" value="male" required />Male
			<input type="radio" name="gender" value="female" required />Female<br><br>

			<input type="submit" value="Sign Up!"/>
		 </form>
	</div> 
	<!-- <div style="border-left:1px solid #000;height:500px"></div> -->
	<div class="SignupStudent">
		<form action="includes/process.php" method="post">
			<p>Login Page for Student<br>Sign Up <br>It's Free and always will be free<br></p>

			<input type="text" name="stufirstname" placeholder="Firstname" required/>
			<input type="text" name="stulastname" placeholder="Lastname" required/><br><br>
			<input type="text" name="stuusername" placeholder="UserName" required/><br><br>
			<input type="password" name="stupassword" placeholder="Password" required/><br><br>
			<input type="password" name="stucpassword" placeholder="ConfirmPassword" required/><br><br>
			<input type="radio" name="stugender" value="male" required/>Male
			<input type="radio" name="stugender" value="female" required />Female<br><br>

			<input type="submit" value="Sign Up!"/>
		</form>
	</div> 
</div>