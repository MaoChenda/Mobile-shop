<?php
include 'Home.php';

$server="localhost";
$username="root";
$password="root";
$db="mobileshop";
$tbname="asus";
$SubjectErr="";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
	echo "Connected Error";
	die(mysqli_error($con));
		
}
else{
	if(!isset($_POST["subject"])){
//		$SubjectErr="You Must Select Model Of Phone !";
		echo $SubjectErr;
	}
	else{	
		$tbname=$_POST["subject"];
		
		$sql="INSERT INTO $tbname(Stock,Name,Price)
		VALUES
			('$_POST[stock]','$_POST[name]','$_POST[price]')";

		if (!mysqli_query($con,$sql)){//must con before sql
		  die('Error: ' . mysqli_error($con));
		  }
		 else echo "1 record added";
	}
}
	
	?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert To Database</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Pages</title>

    <!-- Styles -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="adminpage.css">
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 ">

            <div class="profile-sidebar">
                <div class="user-profile">
                    <img class="img-responsive  img-circle " src="logoPic/profile.png">
                </div>

                <div class="user-name">
                    <b><?php echo $userRow['username']; ?></b>
                </div>

                <div class="user-email">
                    <?php echo $userRow['email']; ?>
                </div>
                <hr>

                <div class="user-menu">
                    <ul class="nav">
                        <li class="view">
                            <a href="Admin_update.php">
                                <i class="glyphicon glyphicon-plus"></i>
                                &nbsp; &nbsp; &nbsp; View Categories
                            </a>
                        </li>
                        <li class="addUpdateDelete">
                            <a href="#">
                                <i class="glyphicon glyphicon-edit"></i>
                                &nbsp; &nbsp; &nbsp; Add/Delete/Update Mobile Categories
                            </a>
                        </li>
                        <li class="customerOrder">
                            <a href="#">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                &nbsp;&nbsp;&nbsp;Customer Ordered
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    &#169; Mobile Shop 2017
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="left-side">
             <div class="form">
                        <form class="form-group" method="post" >
                     <br>
                     <br>
                     <label for="subject"> Phone Categories :</label><br>
                            <select class="form-control"  name="subject" id="subject">
                             <option <?php if($subject =="Asus" ) echo "selected" ; ?> value="asus">Asus</option>
                             <option <?php if($subject =="Black Berry" ) echo "selected" ; ?>value="blackberry">Black Berry</option>
                             <option <?php if ($subject =="Bluetooth Headset" ) echo "selected" ; ?> value="blutoothheadset">Bluetooth Headset</option>
                             <option <?php if($subject =="Charger" ) echo 'selected' ; ?> value="charger">Charger</option>
                             <option <?php if($subject =="HTC" ) echo 'selected' ; ?> value="htc">HTC</option>
                             <option <?php if($subject =="Huawei" ) echo 'selected' ; ?> value="huawei">Huawei</option>
                             <option <?php if($subject =="iPhone" ) echo 'selected' ; ?> value="iphone">iPhone</option>
                             <option <?php if($subject =="LG" ) echo 'selected' ; ?> value="lg">LG</option>
                             <option <?php if($subject =="Memory Card" ) echo 'selected' ; ?> value="memorycard">Memory Card</option>
                             <option <?php if($subject =="Nokia" ) echo 'selected' ; ?>value="nokia">Nokia</option>
                             <option <?php if($subject =="Oppo" ) echo 'selected' ; ?>value="oppo">Oppo</option>
                             <option <?php if($subject =="Power Bank" ) echo 'selected' ; ?>value="powebank">Power Bank</option>
                             <option <?php if($subject =="Samsung" ) echo 'selected' ; ?> value="samsung">Samsung</option>
                             <option <?php if($subject =="Sony" ) echo 'selected' ; ?> value="sony">Sony</option>
                             <option <?php if($subject =="Sugar" ) echo 'selected' ; ?>value="sugar">Sugar</option>
                             <option <?php if($subject =="USB Cable" ) echo 'selected' ; ?>value="usbcable">USB Cable</option>
                             <option <?php if($subject =="User" ) echo 'selected' ; ?> value="tbl_users">User</option>
                            </select> <br>
  
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"> <br>
            
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control"> <br>
             				<label for="stock">Stock</label>
                            <input type="text" name="stock" id="stock" class="form-control"> <br>
                            <label for="addBy">Add by(Admin)</label>
                            <select class="form-control" name="addBy" id="addBy">
                                <option>Mao Chenda</option>
                                <option>Peng Sony</option>
                                <option>Chea Panha</option>
                                <option>Long ika</option>
                            </select> <br>
                            <label for="CreateBy">Create By</label>
                            <input type="text" name="CreateBy" id="CreateBy" class="form-control"> <br>
                            
            
                            
            
                            <div class="text-right">
                                <input type="submit" value="Submit" class="btn btn-success">
                            </div>
            
                        </form>
                    </div>
        </div>
     </div>
 </div>
 
</body>
</html>