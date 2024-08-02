<?php
session_start();

include("php/config.php");

// Check if session is not valid, redirect to login page
if(!isset($_SESSION['valid'])) {
  header("Location: index.php");
  exit(); // Exit script after redirection
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styles2.css">
    <!-- <link rel="stylesheet" href="Styles/styles.css"> -->

    <!--favicon-->
    <link rel="shorcut icon" href="Images/favicon3.png" size="128x128" />
    <title>Home_Form</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
        <a href="home.php" class="logo-logo"><strong>Travel.</strong></a>
        </div>
        <div class="right-links">

            <?php

                $id = $_SESSION['id'];

                $query = mysqli_query($con,"SELECT * FROM users WHERE Id = $id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_id = $result['Id'];
                }
            
                echo "<button class='btn1'><a href='edit.php?Id=$res_id'>Change Profile</a></button>";
            
            ?>

            <a href="php/logout.php"><button class="btn1">Log Out</button></a>
            <a href="home.php"><button class="btn1">Back to Site</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b> <?php echo $res_Uname    ?> </b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your Email is <b><?php echo $res_Email    ?></b>,</p>
                </div>
                <div class="box">
                    <p>And you are <b> <?php echo $res_Age    ?> </b>years old</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>