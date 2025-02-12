<?php include 'header.php'; 
require("connection.php");
if($_SESSION["role"] == "Normal"){
    header("location: index.php");
 }

?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="search" placeholder="Search..." value=""/>
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php 
if(isset($_POST['showbtn']))
{
    
$search = $_POST['search'];

$sql = "SELECT * FROM `student` WHERE ID = '$search'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){

?>

 
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label for="">L-Name</label>
            <input type="hidden" name="search"  value= "<?php echo $row['ID']; ?>" />
            <input type="text" name="fname" value="<?php echo $row['F_NAME']; ?>" />
        </div>

        <div class="form-group">
            <label for="">F-Name</label>
            <input type="text" name="lname" value="<?php echo $row['L_NAME']; ?>" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $row['EMAIL']; ?>" />
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $row['PASSWORD'];?>" />
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
        <select name="role"  value="<?php echo $row['ROLE']; ?>">
        <!-- <option value="Select Gender"  >Select Gender</option> -->
           
            <?php if($row['ROLE'] =='Admin')
                {
                    echo "<option value='Admin'selected>Admin</option>
                     <option value='Normal'>Normal</option>";
                   }
                else if($row['ROLE'] =='Normal')
                {
                    echo "<option value='Admin'>Admin</option>
                     <option value='Normal'selected>Normal</option>";
                }
                ?>
          </select>
        </div>

        <input class="submit" type="submit" value="Update" name="saveupdate"/>
    </form>
    <?php } 
    }
}


?>


   
</div>
</div>
</body>
</html>
