<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
    header("Location: mainPage.php");
    exit;
}

if (isset($_POST['btn-login'])) {

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $email = $DBcon->real_escape_string($email);
    $password = $DBcon->real_escape_string($password);

    $query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
    $row=$query->fetch_array();

    $count = $query->num_rows; // if email/password are correct returns must be 1 row

    if (password_verify($password, $row['password']) && $count==1) {
        $_SESSION['userSession'] = $row['user_id'];
        header("Location: mainpage.php");
    } else {
        $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
    }
    $DBcon->close();
}
?>
<!DOCTYPE html> <!--PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>user Log in Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="loginForm.css">
</head>
<body>

<div class="signin-form">

    <div class="container" style="width: 70%; margin: 0 auto; border: 1px solid green">

        <!-------------------Place for shop name----------------------------------------------------------------->
        <div class="shopName">
            <h3 style="color: black">MY<sub style="color: forestgreen">Mobile Store</sub></h3>

        </div>

        <!-------------------Place for completion----------------------------------------------------------------->

        <form class="form-signin" method="post" id="login-form" style="padding: 30px">

            <?php
            if(isset($msg)){
                echo $msg;
            }
            ?>

            <!-------------------complete email----------------------------------------------------------------->
            <div class="form-group">

                    <span class="glyphicon glyphicon-envelope" style="color: #39ac6b">
                        <label for="email" style="color: black">Email:</label>
                    </span>
                <input type="email" class="form-control" placeholder="Email address" name="email" required style="background-color: inherit" />
                <span id="check-e"></span>
            </div>

            <!-------------------complete password---------------------------------------------------------------->
            <div class="form-group">
                    <span class="glyphicon glyphicon-lock" style="color: #39ac6b">
                        <label for="password" style="color: black">Password:</label>
                    </span>
                <input type="password" class="form-control" placeholder="Password" name="password" required style="background-color: inherit"/>
            </div>

            <!-------------------check box"remember me'----------------------------------------------------------------->
            <label for="rememberMe"></label>
            <input type="checkbox" id="rememberMe"> Remember Me<br> <br> <br>

            <!-------------------guide to forget password----------------------------------------------------------------->
            <p style=" cursor: pointer; color: #2aabd2;margin-left: 200px">Forget Password?</p>

            <!-------------------button log in----------------------------------------------------------------->
            <div class="form-group" >
                <button type="submit" class="btn btn-success" name="btn-login" id="rcorners">
                    <!--                        <p style="font-size: 20px; line-height: 0; color: black">Log in</p>-->
                    Log In
                </button>
            </div>

            <!-------------------guide to sign up form----------------------------------------------------------------->
            <p style="text-align: center; margin-top: 10px; color: darkslategray; text-decoration: none">New to our store?<a href="Register.php" style="text-decoration: underline"><b>Sign up here!</b></a></p>

        </form>

    </div>

</div>

</body>
</html>