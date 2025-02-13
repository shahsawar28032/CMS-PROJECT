<?php  require("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/my.css">
    <!-- <link rel="stylesheet" href="../bootstrap.min.css"> -->
</head>
<body>
             <style>
              .pagination {
                display: flex;
                list-style: none;
                padding: 0;
                justify-content: center;
                margin-top: 20px;
                }
             .pagination li {
                margin: 0 5px;
              }
             .pagination a {
                text-decoration: none;
                padding: 6px 12px;
                background-color: #007BFF;
                color: white;
                border-radius: 4px;
              }
              .pagination a:hover {
                background-color: #0056b3;
              }
              .pagination .active a{
                background-color: #0076b3;
                font-weight: bold;
              }
             
 </style>
    

<?php
include 'header.php';
?>


<?php if(isset($_GET['ssll'])){ 
  echo  $_GET['ssll'];} ?>


<?php if(isset($_GET['edit'])){ 
  echo  $_GET['edit'];} ?>

<?php if(isset($_GET['editid'])){ 
  echo  $_GET['editid'];} ?>

<?php if(isset($_GET['deleteid'])){ 
  echo  $_GET['deleteid'];} ?>

<?php if(isset($_GET['add'])){ 
  echo  $_GET['add'];} ?>
 




<div id="main-content">
    <h2>All Records</h2>
  <?php  


     $limit = 3;
  
   if(isset($_GET['page'])){
     $page  = $_GET['page'];
   }else{
     $page= 1;
   }
   $offset= ($page - 1) * $limit;   
if($_SESSION["role"]=="Admin"){
$sql = "SELECT * FROM student LIMIT {$offset},{$limit}";
}elseif($_SESSION["role"]=="Normal"){
  $sql = "SELECT * FROM student where ID ={$_SESSION['stu_idd']} LIMIT {$offset},{$limit}";
}
$result= mysqli_query($conn,$sql)or die("query failed");
   if(mysqli_num_rows($result)> 0){

  ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Role</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php
        while($row=mysqli_fetch_assoc($result)){  ?>
            <tr>
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['F_NAME'] . " ". $row['L_NAME']; ?></td>
                <td><?php echo $row['EMAIL']?></td>
                <td><?php echo $row['PASSWORD']?></td>
                <td><?php echo $row['GENDER']?></td>
                <td><?php echo $row['ROLE']?></td>

                <td>
                    <a href="edit.php?idd=<?php echo $row['ID']?>">Edit</a>
                       <a href="inline_delete.php?idd=<?php echo $row['ID']?>" onclick="return add()">Delete</a>
                </td>
                <script>
function add()
{
    return confirm ("Are you sure you wana delete this record");
}
</script>     
            </tr>
            <?php } ?>

          
            
        </tbody>
    </table>
     <?php }//else{
        //echo "no record found";     
   // }  -->
   // mysqli_close($conn);
    ?>


<?php 

$sql1 = "SELECT * FROM student";
$result1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)> 0){  
  $total_record = mysqli_num_rows($result1);
//limit= 3;
  $total_page = ceil($total_record/$limit);

  echo "<ul class='pagination'>";
  if($page > 1){
    echo '<li><a href="index.php?page='.($page - 1).'">prev</a></li>';
  }
  
  for($i = 1; $i<=$total_page; $i++){
  if($i == $page){
    $active = "active";
  }else{
     $active ="";
  }                               

   echo '<li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
  }
  if($total_page > $page){
    echo '<li><a href="index.php?page='.($page + 1).'">Next</a></li>';
  }
  
  echo "</ul>";
}
?>






</body>
</html> 
