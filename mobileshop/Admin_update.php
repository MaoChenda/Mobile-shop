<?php
include 'Home.php';

$server="localhost";
$username="root";
$password="root";
$db="mobileshop";
$tbname="asus";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
	echo "Connected Error";
	die(mysqli_error($con));
		
}
else{
	
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <title>Admin Pages</title>-->

    <!-- Styles -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="adminpage.css">

</head>

<body>
    <div class="container-fluid" style="margin-top: 50px">
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

                <!--categories of chosing phone table type-->
                <div class="row categories">
                   <div class="col-lg-4">
                    <form class="form-group" style="padding: 20px" method="post">
                           <label for="show">Phones Categories</label>


   	<select name="select" >
                         <option <?php if($select =="Asus" ) echo "selected" ; ?> value="asus">Asus</option>
                         <option <?php if($select =="Black Berry" ) echo "selected" ; ?>value="blackberry">Black Berry</option>
                         <option <?php if ($select =="Bluetooth Headset" ) echo "selected" ; ?> value="blutoothheadset">Bluetooth Headset</option>
                         <option <?php if($select =="Charger" ) echo 'selected' ; ?> value="charger">Charger</option>
                         <option <?php if($select =="HTC" ) echo 'selected' ; ?> value="htc">HTC</option>
                         <option <?php if($select =="Huawei" ) echo 'selected' ; ?> value="huawei">Huawei</option>
                         <option <?php if($select =="iPhone" ) echo 'selected' ; ?> value="iphone">iPhone</option>
                         <option <?php if($select =="LG" ) echo 'selected' ; ?> value="lg">LG</option>
                         <option <?php if($select =="Memory Card" ) echo 'selected' ; ?> value="memorycard">Memory Card</option>
                         <option <?php if($select =="Nokia" ) echo 'selected' ; ?>value="nokia">Nokia</option>
                         <option <?php if($select =="Oppo" ) echo 'selected' ; ?>value="oppo">Oppo</option>
                         <option <?php if($select =="Power Bank" ) echo 'selected' ; ?>value="powebank">Power Bank</option>
                         <option <?php if($select =="Samsung" ) echo 'selected' ; ?> value="samsung">Samsung</option>
                         <option <?php if($select =="Sony" ) echo 'selected' ; ?> value="sony">Sony</option>
                         <option <?php if($select =="Sugar" ) echo 'selected' ; ?>value="sugar">Sugar</option>
                         <option <?php if($select =="USB Cable" ) echo 'selected' ; ?>value="usbcable">USB Cable</option>
                         <option <?php if($select =="User" ) echo 'selected' ; ?> value="tbl_users">User</option>
      </select> 
 		 <input type="submit" name="submit" value="View">  
	</form>
    <?php
	if(isset($_POST["select"]) && isset($_POST["submit"])){
	
		$tbname=$_POST["select"];
		$query="select *from $tbname";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result) >0){
			
	
	?>
       </div>
                </div>

                <!--button for add update delete-->
                <div class="buttonChoice">
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="Admin_insert.php">
                                <div class="btn btn-info">Insert</div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <div class="btn btn-success">Update</div>
                        </div>
                        <div class="col-lg-2">
                            <div class="btn btn-danger">Delete</div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="input-group" style="width: 300px; float:right;">
                                <input type="text" class="form-control" placeholder="search for...">
                                <span class="input-group-btn">
                            	<button type="button" class="btn btn-success">Search</button>
                      			</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!--food name type-->
                <div class="nameType">
                <?php
                   echo " <h3>".$_POST["select"]."</h3>";
					?>
                </div>

                <!--table food-->
                <div class="table-responsive" style="padding: 20px; margin-top: -40px">
                    <table class="table table-striped" >
                     <thead>
                        <tr>
                        <th>ID </th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Add By</th>
                        <th>Create_at</th>
                        <th>Update_at</th>
                        </tr>
                    </thead>
                     
                    <tbody>
                      <tr>
                      <?php
    
                    while($row=mysqli_fetch_assoc($result))
                        {   ?>
                    <td>
                    <?php
                        echo $row['ID'];
                    ?>
                    </td>
                    <td>
                    <?php
                        echo $row['Name'];
                    ?>
                    </td>
                      <td>
                    <?php
                        echo $row['Price'];
                    ?>
                    </td>
                    <td>
                    <?php
                        echo $row['Stock'];
                    ?>
                    </td>
                    <td>
                    <?php
                        echo $row['Add_By'];
                    ?>
                    </td>
                    <td>
                    <?php
                        echo $row['Create_By'];
                    ?>
                    </td>
                    <td>
                    <?php
                        echo $row['Add_By'];
                    ?>
                    </td>
                    </tr>
                    <?php
							 }
						   }
					

					}
					else{
						$tbname="asus";
					}
			}
					?>

                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
</body>

</html>