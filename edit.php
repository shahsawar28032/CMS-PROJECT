<?php include 'header.php'; 
require("connection.php");
// if($_SESSION["role"] == "Normal"){
//     header("location: index.php");
//  }
             
?>

<?php 
$stu=$_GET['idd'];
$sql="SELECT * FROM `student` WHERE ID={$stu}";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
while($row=mysqli_fetch_assoc($result)){
?>
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="" method="post">
    <div class="form-group">
            <label for="">F-Name</label>
            <input type="hidden" name="sid"  value="" />
            <input type="text" name="fname" value="<?php echo $row['F_NAME']; ?>" />
           </div>

           <div class="form-group">
            <label>L-Name</label>
            <input type="text" name="lname" value="<?php echo $row['L_NAME']?>";/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row['EMAIL']?>";/>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $row['PASSWORD']?>";/>
        </div>

        <div class="form-group">
        <label>Gender</label>
        <select name="gender"  value="<?php echo $row['GENDER'];?>">
        <!-- <option value="Select Gender"  >Select Gender</option> -->
           
            <?php if($row['GENDER'] =='Male')
                {
                    echo "<option value='Male'selected>Male</option>
                     <option value='Female'>Female</option>
                     <option value='Other'>Other</option>";
                }
                else if($row['GENDER'] =='Female')
                {
                    echo "<option value='Male'>Male</option>
                     <option value='Female'selected>Female</option>
                     <option value='Other'>Other</option>";
                }else{
                    echo "<option value='Male'>Male</option>
                     <option value='Female'>Female</option>
                     <option value='Other'selected>Other</option>";
                    

                }
                ?>
          
           

          
        </select>
        </div>
        <div class="form-group">
        <label>Role</label>
            <select name="role"  value="<?php echo $row['ROLE'];?>">
               
               <?php if($row['ROLE'] =='Admin')
                {
                    echo "<option value='Admin'selected>Admin</option>
                     <option value='Normal'>Normal</option>";
                }else if($row['ROLE'] =='Normal'){
                    echo "<option value='Admin'>Admin</option>
                     <option value='Normal'selected>Normal</option>";
                    

                }
                ?>  
        </select>
        </div>
      <input class="submit" type="submit" value="Update" name="update"/>
    </form>
    <?php }}?>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['update']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    
    $select = "UPDATE `student` SET `F_NAME`='$fname',`L_NAME`='$lname',`EMAIL`='$email',`PASSWORD`='$password',`GENDER`='$gender',`ROLE`='$role'
    where ID='$stu'";
    mysqli_query($conn,$select);
    header("location: index.php?edit= <script> alert('Data Successfully updated') </script>");
    
}
?>