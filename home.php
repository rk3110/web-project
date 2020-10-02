<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'quizdbase');
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
      body
{
    font-size: 20px;
    font-family: 'Arial';
    padding: auto;
    margin-top: 10px;
    background-color: black;
    background-image: url('bg.jpg');
     background-size: 1400px 680px;
    opacity: 120%;
}
    </style>
    
</head>
<body>
    
<div class="m-auto d-block" style="float: right;">
    <a href="logout.php" class="btn btn-danger m-auto">Sign Out</a>
</div>
<br>

    
</body>
</html>