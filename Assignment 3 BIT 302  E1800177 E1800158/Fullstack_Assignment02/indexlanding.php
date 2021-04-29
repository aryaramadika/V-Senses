<?php
 include_once 'headerlanding.php';
 include_once 'Includes/dbh.inc.php';
 

 
?>



<!DOCTYPE html>
<html lang="en">

                <div class="row" id="home">
                    <div class="col-2">
                        <h1>Welcome to <br> V-Senses!<br>Covid-19 Tracking Live Data</h1>
                        <p>
                        V-sense Covid Testing Information System is an application that is easy to understand, 
                        user-friendly, and provides a fast, safe, precise service to assist the government in tracking covid-19 test results.
                        </p>
                        <a href="index.php" class="btn">Login/Register as Test Centre Manager</a>
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
                                <h2>Login as patient</h2>
                                    <p>
                                    Log in as a patient to find out your personal history of the covid-19 test results.
                                    </p>

                            <a href="indexPatientLogin.php" class="btn" >Click To Login as patient</a>
                            <table class="table table-striped table-dark ">
                                <h2>Login as Tester</h2>
                                    <p>
                                    Log in as an Tester to be able to record a new test or a new patient
                                    </p>

                            </table>
                            <a href="testerLogin.php" class="btn">Click To Login as Tester</a>
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
            <div class="categories" id="covid">
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







