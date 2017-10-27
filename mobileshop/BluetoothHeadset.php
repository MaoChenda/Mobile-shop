
<?php

$connect = mysqli_connect("localhost", "root", "root", "mobileshop");

if($connect){
    echo "connected!";
}
else echo "disconnect!";

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Here is Bluetooth Headset Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Samsung.css">
</head>

<body>

<!---------------------glypicon---------------------------------------------------------------------------->
<div class="firstLayout">
    <ul>
        <li><a class="glyphicon glyphicon-user" href="#" style="color: #40bf79"> <span style="color: white"> Registration</span></a></li>
        <li><a class="glyphicon glyphicon-log-in" href="#" style="color: #40bf79"><span style="color: white"> LogIn </span></a></li>
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

        <button type="button" class="btn btn-success" >Search</button>
        <input type="search" placeholder="Search here...">

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

<div class="PhoneType" style="height: 1100px">

    <?php

    $sqlBluetoothHeadset = "SELECT * FROM bluetoothheadset";
    $show_result_BluetoothHeadset= $connect->query($sqlBluetoothHeadset);

    while ($row = $show_result_BluetoothHeadset->fetch_assoc())
    {
        $pathBluetoothHeadset = $row['Picture'];

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
                    echo "<img src=$pathBluetoothHeadset>";
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
                            echo '<div class="glyphicon glyphicon-shopping-cart"></div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

            echo '</div>';

    }

    ?>
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
