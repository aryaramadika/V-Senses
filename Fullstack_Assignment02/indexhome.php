<?php
 include_once 'headerhome.php';
 include_once 'Includes/dbh.inc.php';
 

 
?>



<!DOCTYPE html>
<html lang="en">

                <div class="row">
                    <div class="col-2">
                        <h1>Test Centre Manager <br> Welcome to <br>V-Senses!<br>Covid-19 Tracking Live Data</h1>
                        <p>
                            It’s going to disappear. One day, it’s like a miracle, it will disappear and let your
                            medical senses guide you
                        </p>
                        <a href="" class="btn">Explore it now.</a>
                    </div>
                    <div class="col-2">
                        <div class="data-container">
                            <!-- <div class="stats-container">
                                <h4>Cases</h4>
                                <h3 id="cases"></h3>
                                <h4>Deaths</h4>
                                <h3 id="deaths"></h3>
                                <h4>% of Deaths</h4>
                                <h3 id="percent"></h3>

                            </div>
                            <div class="location-container">
                                <h4>Country</h4>
                                <h3 id="country">Indonesia</h3>
                                <h4>Population</h4>
                                <h3 id="population"></h3>
                                <h4>Last Updated</h4>
                                <h3 id="update"></h3>

                            </div> -->

                            <!-- <img src="logo/Covid-19 19 Maret.jpg"> -->
                            <table class="table table-dark">
                                <h2>Patient data</h2>
                                <thead>
                                    <tr>
                                        <th scope="col">#id</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Symptomps</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="data">
                                    </tr>
                                </tbody>
                            </table>
                            <a href="" class="btn">See More Patient.</a>
                            <table class="table table-striped table-dark ">
                                <h2>Test Centre</h2>
                                <thead >
                                    <tr>
                                        <th scope="col">#id</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Address</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr id="data">
                                        <th>                                        
                                            <?php
                                            $sql = "SELECT * FROM testcentre ;";
                                            $result = mysqli_query($conn,$sql);
                                            $resultcheck =  mysqli_num_rows($result);

                                            if($resultcheck > 0){
                                                while ($row = mysqli_fetch_assoc($result)){
                                                    echo $row['ID']."<br>"."<br>";
                                                }
                                            }
                                            
                                            
                                            ?>
                                        </th>

                                        <th>
                                        <?php
                                            $sql = "SELECT * FROM testcentre ;";
                                            $result = mysqli_query($conn,$sql);
                                            $resultcheck =  mysqli_num_rows($result);

                                            if($resultcheck > 0){
                                                while ($row = mysqli_fetch_assoc($result)){
                                                    echo $row['TSname']."<br>"."<br>";
                                                }
                                            }
                                            
                                            
                                            ?>

                                        </th>


                                        <th>
                                            <?php
                                            $sql = "SELECT * FROM testcentre ;";
                                            $result = mysqli_query($conn,$sql);
                                            $resultcheck =  mysqli_num_rows($result);

                                            if($resultcheck > 0){
                                                while ($row = mysqli_fetch_assoc($result)){
                                                    echo $row['TSaddress']."<br>"."<br>";
                                                }
                                            }
                                            
                                            
                                            ?>

                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="viewtestcentre.php" class="btn">See More Test Centre.</a>
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
                    <h2 class="title">Covid - 19 Data Statistic</h2>
                    <div class="row">
                        <h3 id="date">Date Time</h3>
                        <!-- <form autocomplete="off">
                            <input type="text" name="srch" id="srch" required list="countries"
                                placeholder="Enter a name of Country">
                            <datalist>
                                <option value="World">World</option>
                                <option value="World">World</option>
                            </datalist>
                            <button>Search</button>
                        </form> -->
                        <h2 id="name-country">Indonesia</h2>
                        <div class="content">
                            <div class="box confirmed">
                                <p>confirmed</p>
                                <h3>0</h3>
                                <i class="fa fa-long-arrow-up">0</i>
                            </div>
                            <div class="box deaths">
                                <p>deaths</p>
                                <h3>0</h3>
                                <i class="fa fa-long-arrow-up">0</i>
                            </div>
                            <div class="box recovered">
                                <p>recovered</p>
                                <h3>0</h3>
                                <i class="fa fa-long-arrow-up">0</i>
                            </div>
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

    

</html>
<?php
include_once 'footerhome.php';







