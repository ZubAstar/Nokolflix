<?php
session_start();
error_reporting(0);
include('DBconnect.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT `email`,`password` FROM admin WHERE email=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'adminSubscriptionControl.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NokolFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signInStyle.css">
    <link rel="stylesheet" href="css/indexStyle.css">
</head>
<style>
.h1 {
        margin-top:00px;
        font: 50px;
        color: white;
        background: black;
    }</style>
<body>
    <!--Navbar start-->
    <div class="h1">
    <h1> Welcome To Admin </h1>
    </div>

     <!--Sign In page-->
     <div class="body-sign">
        
        <div class="sign-in-container">
            <h2 class="head">Admin Login</h2>
            <form class="login" action="adminSubscriptionControl.php" method="post">
              <input class="inp" type="email" name="email" placeholder="Email Address" required>
              <input class="inp" type="password" name="password" placeholder="Password" required>
              <button type="submit" class="sbtn btn btn-outline-danger">Log In</button>
            </form>
            
          </div>
        </div>
    <!--Navbar end-->
    <div class="container-fluid">

       

        <!--Footer-->
        <footer class="mt-2 mb-4">
            <h3><a href="">Question? Contacts</a></h3>
            <div class="row mb-4 mt-2">
                <div class="col-4">
                    <a href="">FAQ</a> <br>
                    <a href="">Investor Relations</a><br>
                    <a href="">Privacy</a> <br>
                    <a href="">Speed Test</a> <br>
                </div>
                <div class="col-4">
                    <a href="">Help Center</a> <br>
                    <a href="">Jobs</a> <br>
                    <a href="">Cookie Preferences</a> <br>
                    <a href="">Legal Notices</a> <br>
                </div>
                <div class="col-4">
                    <a href="">Only on NokolFlix</a> <br>
                    <a href="">Account</a> <br>
                    <a href="">Terms of Us</a> <br>
                    <a href="">Contact Us</a> <br>
                </div>
            </div>
            <p>NokolFlix Bangladesh</p>
        </footer>
        <!--Footer End-->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>