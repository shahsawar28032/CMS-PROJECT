<?php include 'header.php'; 
include("connection.php");
 if($_SESSION["role"] == "Normal"){
    header("location: index.php");
 }

?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>F-Name</label>
            <input type="text" name="fname" />
        </div>

        <div class="form-group">
            <label>L-Name</label>
            <input type="text" name="lname" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" />
        </div>
                   <!-- error  -->
                   <?php if(isset($_GET["error"])){ ?>
               
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error: </strong> <?php echo $_GET["error"]; ?>
                 </div>
                 <?php } ?>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" />
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender" value>
                <option value="not selected" selected disabled>Select Gender</option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
                <option value="Other" >Other</option>
            </select>
        </div>
        
        <div class="form-group">
        <label>Role</label>
            <select name="role" value>
                <option value="not selected" selected disabled>Select Role</option>
                <option value="Admin" >Admin</option>
                <option value="Normal" >Normal</option>
               
            </select>
        </div>

        <div class="form-group">
            <label>Birth Date</label>
            <input type="date" name="date" />
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" />
        </div>
       
        <input class="submit" type="submit" value="Save" name="save"/>
    </form>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['save']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = ($_POST['password']);
$gender = $_POST['gender'];
$role = $_POST['role'];
$date = $_POST['date'];
$address = $_POST['address'];

$select   = "SELECT * FROM `student` WHERE `EMAIL` = '$email'";
  $data = mysqli_query($conn,$select);
  if(mysqli_num_rows($data)> 0)
  {
    header("location: add.php?error=Email already registered");
  }else{
$sql  = "INSERT INTO `student`(`F_NAME`, `L_NAME`, `EMAIL`,`PASSWORD`, `GENDER`, `ROLE`,`DOB`,`ADDRESS`) VALUES ('$fname','$lname','$email',
'$password','$gender','$role','$date','$address')";
$result= mysqli_query($conn,$sql)or die("query failed");
//header("location: http://localhost/html_crud/index.php");
header("location: index.php?add= <script> alert('Data Successfully inserted') </script>");

mysqli_close($conn);
  }
}
?>