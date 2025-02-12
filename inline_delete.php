<?php
include("connection.php");

$stu = $_GET['idd'];
$sql = "DELETE FROM `student` WHERE ID ='$stu'";
$data=mysqli_query($conn,$sql);
header("location: index.php");


?>