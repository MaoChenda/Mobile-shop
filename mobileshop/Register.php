<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
    header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {

    $uname = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $upass = strip_tags($_POST['password']);

    $uname = $DBcon->real_escape_string($uname);
    $email = $DBcon->real_escape_string($email);
    $upass = $DBcon->real_escape_string($upass);

    $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

    $check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
    $count=$check_email->num_rows;

    if ($count==0) {

        $query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

        if ($DBcon->query($query)) {
            $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
        }else {
            $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
        }

    } else {


        $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

    }

    $DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mobile Shop Sign Up Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Register.css">

</head>
<body>

<div class="signin-form">

    <div class="container" style="width: 70%; margin: 0 auto; border: 1px solid green">

        <!-------------------part for Shop name----------------------------------------------------------------->
        <div class="shopName">
            <h3 style="color: black">MY<sub style="color: forestgreen">Mobile Store</sub></h3>

        </div>

        <!-------------------part for complete form----------------------------------------------------------------->

<!--        <div class="completeForm">-->

            <form class="form-signin" method="post" id="register-form" style="padding: 30px">

                <?php
                if (isset($msg)) {
                    echo $msg;
                }
                ?>

                <!-------------------complete user name----------------------------------------------------------------->

                <span class="glyphicon glyphicon-envelope" style="color: #39ac6b">
                    <label for="Uname" style="color: black">UserName:</label>
                </span>
                    <input type="text" class="form-control" placeholder="Username" name="username" required style="background-color: inherit" />

                <!-------------------complete email----------------------------------------------------------------->

                <span class="glyphicon glyphicon-user" style="color: #39ac6b" id="check-e">
                    <label for="email" style="color: black">Email:</label>
                </span>
                    <input type="email" class="form-control" placeholder="Email address" name="email" required  style="background-color: inherit" />

                <!-------------------complete password----------------------------------------------------------------->

                <span class="glyphicon glyphicon-lock" style="color: #39ac6b">
                    <label for="password" style="color: black">Password</label>
                </span>
                    <input type="password" class="form-control" placeholder="Password" name="password" required style="background-color: inherit" />

                <!-------------------guide to Condition of use and Privacy notes----------------------------------------------------------------->

                <p style="text-align: center; margin-left: 20px; margin-top: 40px; color: darkslategray; text-decoration: none">By sing up you have accepted in <a href="ConditionOfUse.html"> <ins>Condition of Use</ins></a> and<ins><a href="PrivacyNote.html"> Privacy Notice </a> </ins></p>

                <!-------------------button sign up----------------------------------------------------------------->

                <button type="submit" class="btn btn-default" name="btn-signup" id="rcorners" style="margin-top: 10px; background-color: inherit">
                    <p style="font-size: 20px; line-height: 0; color: white">Sign Up</p>
                </button>

                <!-------------------Guide to login----------------------------------------------------------------->

                <p style="text-align: center; margin-left: 20px; margin-top: 10px; color: darkslategray; text-decoration: none">Already have an account?<a href="loginForm.php" style=" text-decoration: underline"><b> Login Here!</b></a></p>

            </form>

<!--        </div>-->

        <!-------------------part for footer----------------------------------------------------------------->

<!--        <div class="footer">-->
<!--            <p style="text-align: center; line-height: 40px; color: white">Group Mobile Shop Management Sytem @ 2017 All right reserved</p>-->
<!--        </div>-->


    </div>

</div>

</body>
</html>