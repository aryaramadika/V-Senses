
<?php
 include_once 'headerhome.php';
 include_once 'Includes/dbh.inc.php';

 
?>



<!DOCTYPE html>
<html lang="en">

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-recommendation">
            <ul class="nav sc-fjdhpX ulRecommend">
                <li class="sc-cSHVUG liRecommend">
                    <a class="default sc-hMqMXs category" href="/sneakers">SNEAKERS</a>
                    <a class="isActive sc-hMqMXs category" href="/streetwear">SANDALS</a>
                    <a class="default sc-hMqMXs category" href="/luxury">THRIFT</a>
                </li>
            </ul>
        </div> -->

        <?php 
        if (isset($_SESSION["usersName"])){
            echo "<li><a href='Index.php'</li>";
        }
        
        ?>

            <!-- Featured  Categories -->
            <div class="categories">
                <div class="small-container">
                    <h2 class="title" style="margin: -30px auto -30px">Generate Test Data</h2>
                    <div class="row">
                    <section class="Patientlogin-form" style="margin-left: 704px; margin-top: 74px; margin-bottom: -70px;">
                    <div class="card-body">
    
    <!-- <form> -->
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
                    <table class="table table-dark">
                                
                                <form action="" method="POST">
                            <input type="text" class="btn" name="patientUsername" placeholder="Enter Patien Username" style="margin-right: 813px; margin-top: 15px;">
                            <input type="submit" class="btn" name = "search" value="Search" style="margin-right: 445px; margin-bottom: 21px; margin-top: -81px;">
                        </form>
                                <thead>
                                    <tr>
                                    <th scope="col">#id</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Username </th>
                                        <th scope="col">Symptomps</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Status</th>
                                    </tr> 
                                </thead>
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "fullstack_assignment02");
                                if(!$connection)
                                    {
                                        die("connection failed: ". mysqli_connect_error());
                                    }

                                if(isset($_POST['search']))
                                {
                                    $Pusername = $_POST['patientUsername'];
                                    $query = "SELECT * FROM patientrecord WHERE patientUsername = '$Pusername' ";                                    $query_run = mysqli_query($connection, $query);
                                    if (!$query_run) {
                                        printf("Error: %s\n", mysqli_error($connection));
                                        exit();
                                    }
                                    while($row = mysqli_fetch_array($query_run))
                                    {
                                        ?>
                                        
                                    <tr>
                                                                               
                                    <td><?php echo $row['ID']; ?></td>
                                            
                                       

                                        
                                            <td><?php echo $row['patientName']; ?></td>
                                                
    
                                            
    
                                            
                                            <td><?php echo $row['patientUsername']; ?></td>
                                                
    
                                            
                                            <td><?php echo $row['symptoms']; ?></td>
                                             
    
                                            
                                            <td><?php echo $row['types']; ?></td>                                         
                                            
                                            <td><?php echo $row['statusPatient']; ?></td> 
                                        
                                        

                                    </tr>
                                
                                        <?php
                                    }
                                
                                }
                                ?>
                                
                                
                            </table>


                            <a href="indexhome.php" class="btn">Back to home.</a>

                        </div>
                        <div class="chart">

                        </div>

                        <!-- <div class="col-3">
                            <img src="image/ads1.jpg" height="445px">
                            <h4>SNEAKERS</h4>
                        </div>
                        <div class="col-3">
                            <img src="image/shirts1.png" height="445px">
                            <h4>T-SHIRTS</h4>
                        </div>
                        <div class="col-3">
                            <img src="image/denim2.jpg" height="445px">
                            <h4>OUTERS</h4> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured  products -->
        <div class="small-container">
            <h2 class="title"></h2>



    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Js/js.js">
        // var MenuItems = document.getElementById("MenuItems");
        // function menutoggle() {
        //     if (MenuItems.style.maxHeight == "0px") {
        //         MenuItems.style.maxHeight = "200px";
        //         MenuItems.style.marginTop = "35px";
        //     }
        //     else {
        //         MenuItems.style.maxHeight = "0px";
        //     }

        // }

    </script>


<?php

?>


</html>

<?php
$connection = mysqli_connect("localhost", "root", "", "fullstack_assignment02");
if(!$connection)
    {
        die("connection failed: ". mysqli_connect_error());
    }

if (isset($_POST["stockUpdate"])){
    $kitName=$_POST["Kname"];
    $updateStock= $_POST["updateStock"];
    $query = "UPDATE kitstock SET availableStock='$updateStock' where kitName = '$kitName' ";
    $query_run=mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type = "text/javascript">alert("Stock has been Updated")</script>';
        
    }
    else{
        echo '<script type = "text/javascript">alert("Stock has not been updated")</script>';
    }
} 
?>                    

<?php