
<?php
 include_once 'headerhomepatient.php';
?>




<!DOCTYPE html>
<html lang="en">
    <style>
        ::placeholder
{
    color: whitesmoke;
    opacity: 1;
}
    </style>

                <div class="row">
                    <div class="col-2">
                        <h1>Welcome V-Senses!<br>Covid-19 Tracking Live Data</h1>
                        <p>
                            It’s going to disappear. One day, it’s like a miracle, it will disappear and let your
                            medical senses guide you.
                        </p>
                        
                    </div>
                    <div class="col-2">
                        <div class="data-container">
                        
                        <table class="table table-dark">
                                <h2>Your Data</h2>
                                <form action="" method="POST">
                            <input type="text" class="btn" name="patientUsername" placeholder="Enter Username">
                            <input type="submit" class="btn" name = "search" value="Search">
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
                                    $query = "SELECT * FROM patientrecord WHERE patientUsername = '$Pusername' ";
                                    $query_run = mysqli_query($connection, $query);
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
            <!-- <div class="row">
                <div class="col-4">
                    <img src="product/air-max-90-x-denham-infrared-release-date.jpg">
                    <h4>Nike Air Max 90 x Denham Infrared</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>IDR 1.249.000</p>
                </div>
                <div class="col-4">
                    <img src="product/nikestussy.jpg">
                    <h4>Nike Benassi x Stussy - White </h4>
                    <div class=" rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 799.000</p>

                </div>
                <div class="col-4">
                    <img src="product/nike-x-stussy-apparel-collection-release-date.jpg">
                    <h4>Nike x Stussy Tee - Green</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 899.000</p>

                </div>

                <div class="col-4">
                    <img src="product/nike-x-undercover-apparel-collection.jpg">
                    <h4>Nike x Undercover Hoodie - White</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>IDR 899.000</p>
                </div>
            </div>
            <h2 class="title">Latest Products</h2>
            <div class="row">
                <div class="col-4">
                    <img src="product/air-jordan-1-zoom-paris-saint-germain-release-date-.jpg">
                    <h4>Nike Air Jordan 1 High Zoom x PSG </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>IDR 2.249.000</p>
                </div>
                <div class="col-4">
                    <img src="product/sb-dunk-low-pro-chicago-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Chicago </h4>
                    <div class=" rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 5.799.000</p>

                </div>
                <div class="col-4">
                    <img src="product/air_jordan_1_la_to_chicago_1609946325_84678de6_progressive.jpg">
                    <h4>Nike Air Jordan 1 LA To Chicago</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 3.899.000</p>

                </div>

                <div class="col-4">
                    <img src="product/sb-dunk-low-strangelove-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Stangelove</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>IDR 2.399.000</p>
                </div>
                <div class="col-4">
                    <img src="product/air-jordan-1-zoom-paris-saint-germain-release-date-.jpg">
                    <h4>Nike Air Jordan 1 High Zoom x PSG </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>IDR 2.249.000</p>
                </div>
                <div class="col-4">
                    <img src="product/sb-dunk-low-pro-chicago-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Chicago </h4>
                    <div class=" rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 5.799.000</p>

                </div>
                <div class="col-4">
                    <img src="product/air_jordan_1_la_to_chicago_1609946325_84678de6_progressive.jpg">
                    <h4>Nike Air Jordan 1 LA To Chicago</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 3.899.000</p>

                </div>

                <div class="col-4">
                    <img src="product/sb-dunk-low-strangelove-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Stangelove</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>IDR 2.399.000</p>
                </div>
                <div class="col-4">
                    <img src="product/air-jordan-1-zoom-paris-saint-germain-release-date-.jpg">
                    <h4>Nike Air Jordan 1 High Zoom x PSG </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>IDR 2.249.000</p>
                </div>
                <div class="col-4">
                    <img src="product/sb-dunk-low-pro-chicago-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Chicago </h4>
                    <div class=" rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 5.799.000</p>

                </div>
                <div class="col-4">
                    <img src="product/air_jordan_1_la_to_chicago_1609946325_84678de6_progressive.jpg">
                    <h4>Nike Air Jordan 1 LA To Chicago</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 3.899.000</p>

                </div>

                <div class="col-4">
                    <img src="product/sb-dunk-low-strangelove-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Stangelove</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>IDR 2.399.000</p>
                </div>
                <div class="col-4">
                    <img src="product/air-jordan-1-zoom-paris-saint-germain-release-date-.jpg">
                    <h4>Nike Air Jordan 1 High Zoom x PSG </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>IDR 2.249.000</p>
                </div>
                <div class="col-4">
                    <img src="product/sb-dunk-low-pro-chicago-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Chicago </h4>
                    <div class=" rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 5.799.000</p>

                </div>
                <div class="col-4">
                    <img src="product/air_jordan_1_la_to_chicago_1609946325_84678de6_progressive.jpg">
                    <h4>Nike Air Jordan 1 LA To Chicago</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <p>IDR 3.899.000</p>

                </div>

                <div class="col-4">
                    <img src="product/sb-dunk-low-strangelove-release-date.jpg">
                    <h4>Nike SB Dunk Low Pro Stangelove</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <p>IDR 2.399.000</p>
                </div>
            </div> -->
        </div>
        <!-- Special Offer -->
        <!-- <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="product/air-jordan-1-zoom-paris-saint-germain-release-date--removebg.png" offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively Release on Yutaka!</p>
                        <h1>Nike Air Jordan 1 High Zoom Air Comfort x Paris-Saint-Germain</h1>
                        <small>Air Jordan 1 Zoom Air Comfort x Paris Saint-Germain for a sophisticated look. Adding
                            a
                            new chapter to the history of iconic silhouettes, this version uses a soft suede with a
                            microfibre lining and upgraded full-length Zoom cushioning underfoot. Building on a
                            long-time partnership with Jordan Brand, this colorway features hues and details
                            inspired by
                            the historic French FC.⁠</small>

                        <a href="" class="btn">Get It Now!!!</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- testimoni -->

                    <!-- footer  -->




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
include_once 'footerhome.php';
?>


</html>




?>