<?php
 include_once 'header.php';
 include_once 'signUp.php';
 include_once 'login.php';
?>



<!------ Include the above in your HEAD tag ---------->


				<!-- <h3>Sign In</h3> -->
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<!-- <div class="card-body"> -->
				<!-- <form> -->
					<!-- <form id="login" class="input-group" action="connect.php" method="POST">
						<input type="text" class="input-field" placeholder="User ID" required name="userID">
						<input type="password" class="input-field" placeholder="Enter Password" required name="enterPass">
						<input type="checkbox" class="check-box"><span>Remember Password</span>
						<button type="submit" class="submit-btn">Login</button>
					</form>
					<form id="register" class="input-group" action="connectReg.php" method="POST">
						<input type="text" class="input-field" placeholder="User ID" required name="newuserID">
						<input type="email" class="input-field" placeholder="Email ID" required name="emailID">
						<input type="password" class="input-field" placeholder="Enter Password" required name="newpassID">
						<input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
						<button type="submit" class="submit-btn">Register</button>
					</form> -->
					<!-- <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form> -->
			<!-- </div> -->
			<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("btn");

	function register()
	{
		x.style.left= "-400px";
		y.style.left= "50px";
		z.style.left= "110px";
	}

	function login()
	{
		x.style.left= "50px";
		y.style.left= "450px";
		z.style.left= "0";
	}
</script>
</body>
</html>