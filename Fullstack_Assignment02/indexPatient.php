<?php
 include_once 'headerPatient.php';
 include_once 'registerPatient.php';
?>
                
                
			</div>
			<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
		</div>
        <!-- <div class="rec-card" id="reccard">
            <div class="rec-body">
            <form id="record-patient" class="rec-patient">
                <input type="text" class="input-field" placeholder="Patient Name" required name="kitName">
                <input type="text" class="input-field" placeholder="Symptoms" required name="kitID">
                <input type="text" class="input-field" placeholder="TestID" required name="availableStock">
                <input type="text" class="input-field" placeholder="Test Date" required name="kitType">            
                <span id="resultText">Result:</span>
                <input type="radio" class="resultCheckBox" required name="kitType"><span id="checkPositive">Positive</span>
                <input type="radio" class="resultCheckBox" required name="kitType"><span id="checkNegative">Negative</span>
                <input type="text" class="input-resultDate" placeholder="Result Date" required name="kitType">
                <div class="status-dropdown">
                    <button class="statsdropbtn">Status</button>
                    <div class="stat-content">
                        <a href="#">Infected</a>
                        <a href="#">Returnee</a>
                        <a href="#">Suspected</a>
                        <a href="#">Close Contact</a>
                        <a href="#">Quarantined</a>
                    </div>
                </div>
                <button type="submit" onclick="moveLeft()" class="Reqsubmit-btn">Submit Record</button>
            </form>
        </div>
        </div> -->
	</div>
</div>
<script>
    var x = document.getElementById("Test_Centre");
    var y = document.getElementById("Tester");
    var w = document.getElementById("Kit_Stock");
    var z = document.getElementById("Regbtn");
    var r= document.getElementById("reccard");

    function Test_Centre()
    {
        x.style.left= "50px";
        y.style.left= "450px";
        w.style.left= "400px";
        z.style.left= "0";
    }

    function Tester()
    {
        x.style.left= "-400px";
        y.style.left= "50px";
        w.style.left= "600px";
        z.style.left= "120px";
    }

    
    function Kit_Stock()
    {
        x.style.left="-800px";
        y.style.left="-800px";
        w.style.left="50px";
        z.style.left="240px";
    }


</script>
<script>
    var r= document.getElementById('reccard');
    function moveRight(){
        r.style.left='450px';
    }

    function moveLeft(){
        r.style.left='0';
    }

    

</script>
</body>
</html>