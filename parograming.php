<?php
require("connection.php");


if(isset($_POST['save']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password =  ($_POST['password']);
$role = $_POST['role'];
$date = $_POST['date'];
$address = $_POST['address'];
$select   = "SELECT * FROM `student` WHERE `EMAIL` = '$email'";
  $data = mysqli_query($conn,$select);
  if(mysqli_num_rows($data)> 0)
  {
    header("location: register.php?error=Email already registered");
    exit();
  }else{



$sql  = "INSERT INTO `student`(`F_NAME`, `L_NAME`, `EMAIL`, `GENDER`, `PASSWORD`, `ROLE`,`DOB`,`ADDRESS`) VALUES ('$fname','$lname','$email','$gender','$password','$role','$date','$address')";
$result= mysqli_query($conn,$sql)or die("query failed");
header("location: login.php?success=Registered successfully");
exit();
}

}


?>
      