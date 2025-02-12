<?php
include("connection.php");
session_start();

if(!isset($_SESSION['email'])){
    header("location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crud Application</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <style>
     #header p{
         color: white;
         font-weight: bolder;
         text-decoration: underline;
        }
        </style>



<div id="wrapper">
        <div id="header">
            <h1>CRUD APPLICATION</h1>
            <p>Hi! Welcome, Mr. <?Php echo $_SESSION["name"]; ?></p>
        </div>
        <div id="menu">

          <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <?php 
                if($_SESSION["role"] == "Admin"){
                 ?>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
                    <a href="update.php">Update</a>
                </li>
                <li>
                    <a href="delete.php">Delete</a>
                </li>
                <?php
                }
                ?>
            </ul>


               <!-- logout out  -->

               <div id="logout">
            <ul>
                
                <li>
                    <a href="logout.php">log out</a>
                </li>
            </ul>
        </div>
        </div>
        <!-- logout end -->


 
            
        </body>
        </html>