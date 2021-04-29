<?php
include_once 'headerPatientTester.php'
?>
<section class="Patientlogin-form">
<!-- <section class="login-form">
    <div class="login-form-form">
<form id="login" class="input-group" action="Includes/login.inc.php" method="post">
						<input type="text" class="input-field" placeholder="User ID" name="userID">
						<input type="password" class="input-field" placeholder="Enter Password" name="enterPass">
						<input type="checkbox" class="check-box"><span>Remember Password</span>
						<button type="submit" class="submit-btn">Login</button>
					</form>
                    </div>
                    </section> -->
                    <div class="card-body">
    
    <!-- <form> -->
        <form id="loginpatient" class="input-group" action="Includes/loginPatient.inc.php" method="post">
            <div>
                <input type="text" class="input-field" placeholder="Enter Username"  name="patientUsername">
                <input type="password" class="input-field" placeholder="Enter Password"  name="patientPass">
                <button type="submit" class="submit-btn" name ="pasientSubmit" style ="margin :15px">Login Patient</button>
            </div>
<?php

if(isset($_GET["error"])){
 if($_GET["error"] == "emptyinput"){
	 echo"<p>Fill in all fields login</p>";
 }
 else if ($_GET["error"] == "wronglogin")
 {
	echo"<p>Incorrect login informtion</p>";
 }

}
?>

</section>
