
<?php

//$connect = mysqli_connect("localhost", "root", "root", "mobileshop");

$connect = mysqli_connect("localhost","root","root","mobileshop","3306");

if($connect){
    echo "connected!";
}
else echo "disconnect!";

?>

<!DOCTYPE html>

    <html>

        <head>
            <meta charset="utf-8">
            <title>My Store Mobile Shop Online!</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js"></script>
            <link rel="stylesheet" type="text/css" href="mainPage.css">
            <link rel="stylesheet" href="detail.css" type="text/css">

            <!--online link-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </head>

        <body>

        <!---------------------glypicon---------------------------------------------------------------------------->
            <div class="firstLayout">
                <ul>
                    <li><a class="glyphicon glyphicon-user" href="Register.php" style="color: #40bf79"> <span style="color: white"> Registration</span></a></li>
                    <li><a class="glyphicon glyphicon-log-in" href="userLogin.php" style="color: #40bf79"><span style="color: white"> LogIn </span></a></li>
                    <li><a class="glyphicon glyphicon-retweet" href="#" style="color: #40bf79"><span style="color: white"> Compare</span></a></li>
                    <li><a class="glyphicon glyphicon-heart" href="#" style="color: #40bf79"><span style="color: white"> Wishlist</span></a></li>
                    <li><a class="glyphicon glyphicon-align-justify" href="#" style="color: #40bf79"><span style="color: white"> My Account</span></a></li>
                    <li><a class="glyphicon glyphicon-shopping-cart" href="#" style="color: #40bf79"><span style="color: white"> My Cart</span></a></li>
                </ul>
            </div>

        <!------------------------------- ShopName & searchBar------------------------------------------------------->
            <div class="header">
                <div class="shopName">
                    <h3 style="margin-top:15px; margin-left:150px"><b>MY </b> <sub style="color: forestgreen">Mobile Store</sub> </h3>
                </div>

                <div class="SearchPlace">

                    <div class="input-group" style="width: 300px; float:right;">
                        <input type="text" class="form-control" placeholder="search for...">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success">Search</button>
                        </span>
                    </div>

                </div>

            </div>

        <!----------------animation SlideShow------------------------->

            <div class="slideshow">
                <figure>
                    <img src="PictureMobileShop/animationpic/animation1.png" alt="class-header-offline" width="100%" height="370" class="alignnone size-large wp-image-177" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation8.png" alt="class-header-semantics" width="100%" height="370" class="alignnone size-full wp-image-178" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation2.png" alt="class-header-offline" width="100%" height="370" class="alignnone size-large wp-image-177" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation7.png" alt="class-header-device" width="100%" height="370" class="alignnone size-full wp-image-176" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation3.png" alt="class-header-connectivity" width="100%" height="370" class="alignnone size-large wp-image-175" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation6.png" alt="class-header-multimedia" width="100%" height="370" class="alignnone size-large wp-image-174" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation4.png" alt="class-header-device" width="100%" height="370" class="alignnone size-large wp-image-173" />
                </figure>
                <figure>
                    <img src="PictureMobileShop/animationpic/animation5.jpg" alt="class-header-performance" width="100%" height="370" class="alignnone size-large wp-image-172" />
                </figure>
            </div>

        <!---------------Button Home Phone Accessories Contact and About us----------------------------------->

            <div class="navbar">
                <ul>
                    <li><a href="mainPage.php">HOME</a></li>

                    <li class="dropdown"><a href="#" class="dropbtn">PHONE <span class="caret"></span> </a>
                        <div class="dropdown-content">
                            <a href="Asus.php">Asus</a>
                            <a href="Blackberry.php">BlackBerry</a>
                            <a href="Huawei.php">Huawei</a>
                            <a href="HTC.php">HTC</a>
                            <a href="iPhone.php">iPhone</a>
                            <a href="LG.php">LG</a>
                            <a href="Nokia.php">Nokia</a>
                            <a href="Oppo.php">Oppo</a>
                            <a href="Samsung.php">Samsung</a>
                            <a href="Sony.php">Sony</a>
                            <a href="Sugar.php">Sugar</a>
                        </div>
                    </li>

                    <li class="dropdown"><a href="#" class="dropbtn">ACCESSORIES <span class="caret"></span> </a>
                        <div class="dropdown-content">
                            <a href="BluetoothHeadset.php">Blutooth Headset</a>
                            <a href="Charger.php">Charger</a>
                            <a href="Memorycard.php">Memory Card</a>
                            <a href="PowerBank.php">Power Bank</a>
                            <a href="USBCable.php">USB Cable</a>
                        </div>
                    </li>

                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">ABOUT US</a></li>
                </ul>

            </div>

        <!----------------iPhone-------------------------------------------->

            <div class="phoneName" id="IDiphone">
                <a href="iPhone.php">
                    <h5 style="padding: 10px; color: white"><strong>iPhone</strong></h5>
                </a>
            </div>
            <div class="PhoneType" >

                <?php

                $sqlIphone = "SELECT * FROM iPhone WHERE id IN(1,2,3,4,5)";
                $show_result_iphone= $connect->query($sqlIphone);

                while ($row = $show_result_iphone->fetch_assoc())
                {
                    $pathIphone = $row['Picture'];

                    echo '<div class="phone">';

                        echo '<div class="above">';
                             echo '<div class="stock">';
                                 echo '<button>'.$row['Stock'].'</button>';
                             echo '</div>';
                             echo '<div class="rate">';
                                 echo '<div class="glyphicon glyphicon-retweet"></div>';
                                 echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                             echo '</div>';
                        echo '</div>';

                        echo '<div class="container">';
                            echo "<img src=$pathIphone>";
                            echo '<div class="overlay"></div>';
                            echo '<div class="button" data-toggle="modal" data-target="#viewDetail" ><a href="#"> View Detail </a></div>';
                        echo '</div>';

                         echo '<div class="textPhone">';
                             echo '<div class="star">';
                                 echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                 echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                 echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                 echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                 echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                 echo '<div class="name">'.$row['Name'].'</div>';
                             echo '</div>';
                             echo '<div class="buy">';
                                 echo '<div class="price">'.$row['Price'].' </div>';
                                 echo '<div class="glip">';
                                     echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                 echo '</div>';
                             echo '</div>';
                         echo '</div>';

                     echo '</div>';
                }

                ?>
                <!-- Modal for Shoping cart -->
                <div class="modal fade" id="shopingCart" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p>Please Log in here!</p>
                                        <a href="userLogin.php">
                                            <button class="btn btn-success">Log In</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>Are you a new user?</p>
                                        <a href="Register.php">
                                            <button class="btn btn-success">Register</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

<!--                Modal for view detail-->

                <div class="modal fade" id="viewDetail" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <?php

                                    $sqlPhoneDetail = "SELECT * FROM phone_detail WHERE id IN(1)";
                                    $show_result_phone_detail = $connect ->query($sqlPhoneDetail);

                                    while ($row = $show_result_phone_detail -> fetch_assoc())
                                    {
                                        $pathPhoneDetail = $row['Picture'];
                                    echo '<fieldset>';
                                        echo '<legend>'.$row['Name'].'</legend>';

                                        echo '<div class="mainDetial">';
                                            echo '<div class="mainDetialPicture">';
                                                echo "<img src=$pathPhoneDetail>";
                                            echo '</div>';

                                            echo '<div class="mainDetialText">';
                                                echo '<table>';
                                                    echo '<tr>';
                                                        echo '<td><b>BrandName: &nbsp;</b></td>';
                                                        echo '<td>'.$row['Name'].'</td>';
                                                    echo '</tr>';
                                                    echo '<tr>';
                                                        echo '<td><b>Price: </b></td>';
                                                        echo '<td style="color: red">'.$row['Price'].'</td>';
                                                    echo '</tr>';
                                                    echo '<tr>';
                                                        echo '<td><b>Memory:</b></td>';
                                                        echo '<td>'.$row['Memory'].'</td>';
                                                    echo '</tr>';
                                                    echo '<tr>';
                                                        echo '<td><b>Sim:</b></td>';
                                                        echo '<td>'.$row['Sim'].'</td>';
                                                    echo '</tr>';
                                                    echo '<tr>';
                                                        echo '<td><b>Warranty:</b></td>';
                                                        echo '<td>'.$row['Warranty'].'</td>';
                                                    echo '</tr>';
                                                    echo '<tr>';
                                                        echo '<td><b>Color:</b></td>';
                                                        echo '<td>'.$row['Color'].'</td>';
                                                    echo '</tr>';
                                                echo '</table>';
                                            echo '</div>';
                                        echo '</div>';

                                        echo '<div class="productSpecific">';
                                            echo '<h3>Product Specification</h3>';
                                        echo '</div>';

                                        echo '<div class="detailSpecific">';
                                            echo '<table border="1px solid #39ac6b" cellspacing="0" width="100%" >';

//                                                <!--Network-->
                                                echo '<tr>';
                                                    echo '<td rowspan="5">Network</td>';
                                                    echo '<td>Technology</td>';
                                                    echo '<td>'.$row['Technology'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>3G Bands</td>';
                                                    echo '<td>'.$row['3G_Bands'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>4G Bands</td>';
                                                    echo '<td>'.$row['4G_Bands'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Speed</td>';
                                                    echo '<td>'.$row['Speed'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>GPRS</td>';
                                                    echo '<td>'.$row['GPRS'].'</td>';
                                                echo '</tr>';


//                                                <!--Launch-->
                                                echo '<tr>';
                                                    echo '<td rowspan="2" style="background-color: white">Launch</td>';
                                                    echo '<td>Announced</td>';
                                                    echo '<td>'.$row['Announced'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Status</td>';
                                                    echo '<td>'.$row['Status'].'</td>';
                                                echo '</tr>';

//                                                <!--Body-->
                                                echo '<tr>';
                                                    echo '<td rowspan="3" style="background-color: white">Body</td>';
                                                    echo '<td>Dimensions</td>';
                                                    echo '<td>'.$row['Dimensions'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Weight</td>';
                                                    echo '<td>'.$row['Weight'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>SIM</td>';
                                                    echo '<td>'.$row['Sim'].'</td>';
                                                echo '</tr>';

//                                                <!--Plateform-->
                                                echo '<tr>';
                                                    echo '<td rowspan="4">Platform</td>';
                                                    echo '<td>OS</td>';
                                                    echo '<td>'.$row['OS'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Chipset</td>';
                                                    echo '<td>'.$row['Chipset'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>CPU</td>';
                                                    echo '<td>'.$row['CPU'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>GPU</td>';
                                                    echo '<td>'.$row['GPU'].'</td>';
                                                echo '</tr>';

//                                                <!--Camera-->
                                                echo '<tr>';
                                                    echo '<td rowspan="4">Camera</td>';
                                                    echo '<td>Primary</td>';
                                                    echo '<td>'.$row['Primary_camera'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Features</td>';
                                                    echo '<td>'.$row['Features'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Video</td>';
                                                    echo '<td>'.$row['Video'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Secondary</td>';
                                                    echo '<td>'.$row['Secondary'].'</td>';
                                                echo '</tr>';

//                                                <!--Battery-->
                                                echo '<tr>';
                                                    echo '<td rowspan="3">Battery</td>';
                                                    echo '<td>Stand-by</td>';
                                                    echo '<td>'.$row['Stand_by'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Talk time</td>';
                                                    echo '<td>'.$row['Talk_time'].'</td>';
                                                echo '</tr>';
                                                echo '<tr>';
                                                    echo '<td>Music play</td>';
                                                    echo '<td>'.$row['Music_play'].'</td>';
                                                echo '</tr>';


                                            echo '</table>';
                                        echo '</div>';

                                    echo '</fieldset>';
                                    }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        <!----------------Samsung-------------------------------------------->

            <div class="phoneName" id="IDsamsung">
                <a href="Samsung.php">
                    <h5 style="padding: 10px; color: white"><strong>Samsung</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlSamsung = "SELECT * FROM samsung WHERE id IN(1,2,3,4,5)";
                $show_result_samsung= $connect->query($sqlSamsung);

                while ($row = $show_result_samsung->fetch_assoc())
                {
                    $pathSamsung = $row['Picture'];

                    echo '<div class="phone">';

                        echo '<div class="above">';
                            echo '<div class="stock">';
                                echo '<button>'.$row['Stock'].'</button>';
                            echo '</div>';
                            echo '<div class="rate">';
                                echo '<div class="glyphicon glyphicon-retweet"></div>';
                                echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                            echo '</div>';
                        echo '</div>';

                        echo '<div class="container">';
                            echo "<img src=$pathSamsung>";
                            echo '<div class="overlay"></div>';
                            echo '<div class="button" data-toggle="modal" data-target="#viewDetail"><a href="#"> View Detail </a></div>';
                        echo '</div>';

                        echo '<div class="textPhone">';
                            echo '<div class="star">';
                                echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                echo '<div class="name">'.$row['Name'].'</div>';
                            echo '</div>';
                            echo '<div class="buy">';
                                echo '<div class="price">'.$row['Price'].' </div>';
                                echo '<div class="glip">';
                                    echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                    echo '</div>';

                }

                ?>
            </div>

            <!----------------LG-------------------------------------------->

            <div class="phoneName" id="IDlg">
                <a href="LG.php">
                    <h5 style="padding: 10px; color: white"><strong>LG</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlLG = "SELECT * FROM lg WHERE id IN(1,2,3,4,5)";
                $show_result_LG= $connect->query($sqlLG);

                while ($row = $show_result_LG->fetch_assoc())
                {
                    $pathLG = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathLG>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                    echo '</div>';

                }

                ?>
            </div>

            <!----------------Sugar-------------------------------------------->

            <div class="phoneName" id="IDsugar">
                <a href="Sugar.php">
                    <h5 style="padding: 10px; color: white"><strong>Sugar</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlSugar = "SELECT * FROM sugar WHERE id IN(1,2,3,4,5)";
                $show_result_Sugar= $connect->query($sqlSugar);

                while ($row = $show_result_Sugar->fetch_assoc())
                {
                    $pathSugar = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathSugar>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                    echo '</div>';

                }

                ?>
            </div>

            <!----------------Asus-------------------------------------------->

            <div class="phoneName" id="IDasus">
                <a href="Asus.php">
                    <h5 style="padding: 10px; color: white"><strong>Asus</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlAsus = "SELECT * FROM asus WHERE id IN(1,2,3,4,5) ";
                $show_result_Asus= $connect->query($sqlAsus);

                while ($row = $show_result_Asus->fetch_assoc())
                {
                    $pathAsus = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathAsus>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!----------------Oppo-------------------------------------------->

            <div class="phoneName" id="IDoppo">
                <a href="Oppo.php">
                    <h5 style="padding: 10px; color: white"><strong>Oppo</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlOppo = "SELECT * FROM oppo WHERE id IN(1,2,3,4,5) ";
                $show_result_Oppo= $connect->query($sqlOppo);

                while ($row = $show_result_Oppo->fetch_assoc())
                {
                    $pathOppo = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathOppo>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';
                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!----------------HTC-------------------------------------------->

            <div class="phoneName" id="IDhtc">
                <a href="HTC.php">
                    <h5 style="padding: 10px; color: white"><strong>HTC</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlHTC = "SELECT * FROM htc WHERE id IN(1,2,3,4,5) ";
                $show_result_HTC= $connect->query($sqlHTC);

                while ($row = $show_result_HTC->fetch_assoc())
                {
                    $pathHTC = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathHTC>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!----------------Sony-------------------------------------------->

            <div class="phoneName" id="IDsony">
                <a href="Sony.php">
                    <h5 style="padding: 10px; color: white"><strong>Sony</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlSony = "SELECT * FROM sony WHERE id IN(1,2,3,4,5) ";
                $show_result_Sony= $connect->query($sqlSony);

                while ($row = $show_result_Sony->fetch_assoc())
                {
                    $pathSony = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathSony>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!----------------BlackBerry-------------------------------------------->

            <div class="phoneName" id="IDblackberry">
                <a href="Blackberry.php">
                    <h5 style="padding: 10px; color: white"><strong>Blackberry</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlBlackberry = "SELECT * FROM blackberry WHERE id IN(1,2,3,4,5) ";
                $show_result_Blackberry= $connect->query($sqlBlackberry);

                while ($row = $show_result_Blackberry->fetch_assoc())
                {
                    $pathBlackberry = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathBlackberry>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!----------------Nokia-------------------------------------------->

            <div class="phoneName" id="IDnokia">
                <a href="Nokia.php">
                    <h5 style="padding: 10px; color: white"><strong>Nokia</strong></h5>
                </a>
            </div>
            <div class="PhoneType">

                <?php

                $sqlNokia = "SELECT * FROM nokia WHERE id IN(1,2,3,4,5) ";
                $show_result_Nokia= $connect->query($sqlNokia);

                while ($row = $show_result_Nokia->fetch_assoc())
                {
                    $pathNokia = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathNokia>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!----------------Huawei-------------------------------------------->

            <div class="phoneName" id="IDhuawei">
                <a href="Huawei.php">
                    <h5 style="padding: 10px; color: white"><strong>Huawei</strong></h5>
                </a>
            </div>
            <div class="PhoneType" >

                <?php

                $sqlHuawei = "SELECT * FROM huawei  WHERE id IN(1,2,3,4,5) ";
                $show_result_Huawei= $connect->query($sqlHuawei);

                while ($row = $show_result_Huawei->fetch_assoc())
                {
                    $pathHuawei = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathHuawei>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                    echo '</div>';

                }

                ?>
            </div>

            <!----------------Memory Card-------------------------------------------->

            <div class="phoneName" id="IDmemorycard">
                <a href="Memorycard.php">
                    <h5 style="padding: 10px; color: white"><strong>Memory Card</strong></h5>
                </a>
            </div>
            <div class="PhoneType" >

                <?php

                $sqlMemorycard = "SELECT * FROM memorycard WHERE id IN(1,2,3,4,5)  ";
                $show_result_Memorycard= $connect->query($sqlMemorycard);

                while ($row = $show_result_Memorycard->fetch_assoc())
                {
                    $pathMemorycard = $row['Picture'];

                        echo '<div class="phone">';

                            echo '<div class="above">';
                                echo '<div class="stock">';
                                    echo '<button>'.$row['Stock'].'</button>';
                                echo '</div>';
                                echo '<div class="rate">';
                                    echo '<div class="glyphicon glyphicon-retweet"></div>';
                                    echo '<div class="glyphicon glyphicon-heart-empty"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="container">';
                                echo "<img src=$pathMemorycard>";
                                echo '<div class="overlay"></div>';
                                echo '<div class="button"><a href="#"> View Detail </a></div>';
                            echo '</div>';

                            echo '<div class="textPhone">';
                                echo '<div class="star">';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="glyphicon glyphicon-star-empty"></div>';
                                    echo '<div class="name">'.$row['Name'].'</div>';
                                echo '</div>';
                                echo '<div class="buy">';
                                    echo '<div class="price">'.$row['Price'].' </div>';
                                    echo '<div class="glip">';
                                        echo '<div class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#shopingCart"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';

                }

                ?>
            </div>

            <!-----------------Special Offer & Best Seller----------------------------->
            <div class="underPhoneCategory">
                <div class="bestSeller">
                    <div class="head">
                        <p style="padding: 10px"><strong>BEST SELLER</strong></p>
                    </div>
                    <div class="picture">
                        <img src="pictures/iPhone7-plus-rose-gold-32GB.png" style="width: 120px; height: 170px; margin-left:5px; margin-top: 5px">
                    </div>
                    <div class="text">
                        <p style="text-align: center; margin-top: 30px">iPhone7plus-rose</p>
                        <p style="text-align: center">(Nano-Sim)</p>
                        <p style="text-align: center; color: red">$810</p>
                        <button type="button" class="btn btn-sm btn-success">View More</button>
                    </div>
                </div>

                <div class="specialOffer">
                    <div class="head">
                        <p style="padding: 10px"><strong>SPECIAL OFFER</strong></p>
                    </div>
                    <div class="picture">
                        <img src="pictures/samsung-galaxy-A5.png" style="width: 120px; height: 170px; margin-left: 20px; margin-top: 15px">
                    </div>
                    <div class="text">
                        <p style="text-align: center; margin-top: 30px">Sony-xperia-xa1-ultra-2017</p>
                        <p style="text-align: center">(Nano-Sim)</p>
                        <p style="text-align: center; color: red; font-size: 20px"><del style="font-size: 15px">$450</del>   $400</p>
                        <!--<p style="text-align: center; color: red; font-size: 10px">$400</p>-->

                        <button type="button" class="btn btn-success btn-sm" style="border-radius: 10px">View More</button>
                    </div>
                </div>
            </div>

            <!-----------------Pagination Part----------------------------->
            <div class="ta">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#IDasus">Asus</a>
                    <a href="#IDblackberry">Blackberry</a>
                    <a href="#IDhtc">HTC</a>
                    <a href="#IDhuawei">Huawei</a>
                    <a href="#IDiphone">iPhone</a>
                    <a href="#IDlg">LG</a>
                    <a href="#IDnokia">Nokia</a>
                    <a href="#IDoppo">Oppo</a>
                    <a href="#IDmemorycard">Memorycard</a>
                    <a href="#IDsony">Sony</a>
                    <a href="#IDsugar">Sugar</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>

            <!------------------Follow Contact & My Account--------------------------->
            <div class="nextTofinish">

                <div class="contactUs">
                    <h4>CONTACT US</h4>
                    <p class="glyphicon glyphicon-envelope"> my.mobilestore@gmail.com</p><br>
                    <p class="glyphicon glyphicon-earphone"> 855 70 123 456</p> <br>
                    <p class="glyphicon glyphicon-earphone"> 855 78 456 123</p> <br>
                    <p class="glyphicon glyphicon-map-marker"> #khan ToulKork, Phnom Penh</p> <br>

                </div>

                <div class="myAccount">
                    <h4>MY ACCOUNT</h4>
                    <p class="glyphicon glyphicon-lock"> LogIn</p> <br>
                    <p class="glyphicon glyphicon-retweet"> Compare</p> <br>
                    <p class="glyphicon glyphicon-heart"> Wishlist</p> <br>
                    <p class="glyphicon glyphicon-shopping-cart"> MyCart</p> <br>

                </div>

            </div>

            <div class="social-section">

                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-skype"></a>
                <a href="#" class="fa fa-yahoo"></a>

            </div>

            <!--------------------------Footer------------------------------------------------->
            <div class="footer">
                <p style="text-align: center; color: white">Designed by Group Mobile Shop Management System</p>
                <p style="text-align: center; color: white">@ 2017 All right reserved</p>
            </div>
    </body>
</html>
