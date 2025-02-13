<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstraplinks/bootstrap.min.css">
</head>
<style>

  .form{
    margin-top: 30%;
  }
  .form-label{
    font-weight: bold;
    font-size: 1.1rem;
  }
  .heading{
    font-weight: bolder;
    font-size: 2rem;
  }
</style>
<body>
  <div class="container-fluid justify-content-center">
    <div class="row justify-content-center align-item-center ">
      <div class="col-4  ">


    <form class="form" action=""method="post">
      <!-- heading  -->
      <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label heading" for="form2Example1">Create Your Account</label>
      </div>
      <?php if(isset($_GET["success"])){ ?>
               
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong></strong> <?php echo $_GET["success"]; ?>
                
               </div>
               <p style="color: blue; font-weight:bolder">Here Conform Yourself</p>
   
             <?php } ?>

        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" name="email" id="form2Example1" class="form-control form-control-lg"placeholder="Email address or Username" />
          <label class="form-label" for="form2Example1">Email address</label>
        </div>
      <!-- errs  -->
      <?php if(isset($_GET["errors"])){ ?>
               
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error: </strong> <?php echo $_GET["errors"]; ?>
                 
               </div>
   
             <?php } ?>
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" name="password" id="form2Example2" class="form-control form-control-lg" placeholder="Enter your password" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> <strong>Remember me </strong></label>
            </div>
          </div>
      
          <div class="col">
            <!-- Simple link -->
            <a href="#!"><strong>Forgot password?</strong></a>
          </div>
        </div>
      
        <!-- Submit button -->
        <input type="submit"name="login" value="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-4 btn-lg btn-block mb-4 t-b">
      
        <!-- Register buttons -->
        <div class="text-center">
          <strong><p>Create Account<a href="register.php">Register</a></p></strong>
         <strong><p>or sign up with:</p></strong> 
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
      
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
      <script src="bootstrap.min.js"></script>

</body>
</html>

<!-- php code start  -->

<?php
                          if(isset($_POST['login'])){
                            include "connection.php";
                            if(empty($_POST['email']) || empty($_POST['password'])){
                            echo "<div class='row justify-content-center'>
                                 <div class='alert alert-danger col-4'>All Fields must be entered.</div>
                                </div>";
                          
                            }else{
                              $email = ( $_POST['email']);
                              $password = $_POST['password'];

                              $sql = "SELECT  ID, F_NAME, EMAIL, PASSWORD, ROLE FROM student WHERE EMAIL = '{$email}' AND PASSWORD = '{$password}'";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");

                              if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                  session_start();
                                  $_SESSION["stu_idd"] = $row['ID'];
                                  $_SESSION["name"] = $row['F_NAME'];
                                  $_SESSION["email"] = $row['EMAIL'];
                                  $_SESSION["role"] = $row['ROLE'];

                                  header("Location: index.php?ssll= <script> alert('Your are successfully login in our project .') </script>");
                                }

                              }else{
                                header("location: login.php?errors=user name or password are incorrect");
                             
                            }
                     }}
                        ?>