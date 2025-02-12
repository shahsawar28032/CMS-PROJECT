<?php require 'header.php'; 
require("connection.php");
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="search" />
        </div>
        <input class="submit" type="submit" name="delete"  value="Delete" />
    </form>
</div>
</div>
</body>
</html>



<?php
if(isset($_POST['delete'])){
$search = $_POST['search'];
$sql = "DELETE FROM `student` WHERE ID ='$search'";
$data=mysqli_query($conn,$sql);
header("location: index.php");
}

?>