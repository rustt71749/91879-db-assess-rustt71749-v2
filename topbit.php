<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start();
    include("config.php");
    include("functions.php"); // include data sanatising
    
    // Connect to database
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,
    DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
         exit;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Food Reviews">
    <meta name="keywords" content="Food, Food Reviews, Reviews, Funky">
    <meta name="author" content="Trent Rust">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food Reviews</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/foodstyle.css"> 
    
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="banner">
             
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Click here to go to the Home Page">
            <img class="img-circle" src="Images/burger%20logo.png" width="136" height="151" alt="disco ball logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>The Bodacious Burger</h1>
        </div>
        
        <div class="box nav">
            <p></p>
        </div>
        
        <div class="box navtwo">
            <p></p>
        </div>
        
        <div class="box navthree">
            <p></p>
        </div>
        
        

            