<?php
include_once 'headerReg.php'
?>
<section class= "TCreg-form">
<div class="card-body">
                <form id="Kit_Stock" class="KSinput-group"action="Includes/KSreg.inc.php" method ="post">
                    <input type="text" class="input-field" placeholder="Test Kit Name"  name="kitName">
                    <input type="text" class="input-field" placeholder="Available Stock"  name="availableStock">
                    <input type="text" class="input-field" placeholder="Kit Type"  name="kitType">
                    <button type="submit" class="submit-btn" name="KSsubmit" style="margin: 18px;">Submit</button>
                </form>
</div>

<?php

if(isset($_GET["error"])){
 if($_GET["error"] == "emptyinput"){
	 echo"<p>Fill in all fields </p>";
 }
 else if ($_GET["error"] == "wrongTestKitRegistration")
 {
	echo"<p>Incorrect registration informtion</p>";
 }

}
?>
</section>