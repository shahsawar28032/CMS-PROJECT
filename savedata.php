<?php
require("connection.php");
if(isset($_POST['saveupdate']))
{
    $search = $_POST['search'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    
    $update = "UPDATE `student` SET `F_NAME`='$fname',`L_NAME`='$lname',`EMAIL`='$email',`PASSWORD`='$password',`GENDER`='$gender',`ROLE`='$role' WHERE ID = '$search'";
    mysqli_query($conn,$update);
    header("location: index.php");
    
}     
?>