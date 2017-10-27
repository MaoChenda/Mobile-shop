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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Pages</title>

    <!-- Styles -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="adminpage.css">

</head>

<body>
    <!--food name type-->
    <div class="nameType">
        <h3>Samsung</h3>
    </div>

    <!--table food-->
    <div class="table-responsive" style="padding: 20px; margin-top: -40px">
        <table class="table table-striped" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Add By</th>
                <th>Create_at</th>
                <th>Update_at</th>
            </tr>
            </thead>

            <tbody>

            <?php

            $sqlIphone = "SELECT * FROM samsung";
            $show_result_iphone= $connect->query($sqlIphone);

            while ($row = $show_result_iphone->fetch_assoc()) {
                echo '<tr >';
                echo '<td > '.$row['ID'].'</td >';
                echo '<td > '.$row['Name'].' </td >';
                echo '<td > '.$row['Stock'].' </td >';
                echo '<td > '.$row['Price'].' </td >';
                echo '<td > Mao Chenda </td >';
                echo '<td > 2017 / 06 / 23</td >';
                echo '<td > 2017 / 06 / 24</td >';
                echo '</tr >';
            }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>
