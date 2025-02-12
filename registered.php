<?php
require("connection.php");
require("parograming.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstraplinks/bootstrap.min.css">
</head>
<body>
    <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              The best offer <br />
              <span class="text-primary">for your business</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p>
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form action="parograming.php" method="post">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <!-- first name  -->
                    <div class="col-md-6 mb-1">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="fname" id="form3Example1" class="form-control" placeholder="enter your first name"/>
                        <label class="form-label" for="form3Example1">First name</label>
                      </div>
                    </div>
                    <!-- last name  -->
                    <div class="col-md-6 mb-1">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="lname" id="form3Example2" class="form-control" placeholder="enter your last name" />
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div>


                   <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-1">
                    <input type="email" name="email" id="form3Example3" class="form-control" placeholder="enter your email"/>
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>

                   <!-- error  -->
          <?php if(isset($_GET["error"])){ ?>
               
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error: </strong> <?php echo $_GET["error"]; ?>
                 </div>
                 <?php } ?>

  
                  <!-- Password input -->
                  <div data-mdb-input-init class="form-outline mb-1">
                    <input type="password" name="password" id="form3Example4" class="form-control" placeholder="enter your password"/>
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
  

                  <!-- input gender  -->
                  <div data-mdb-input-init class="form-outline mb-1">
                  <select name="gender" value  id="form3Example4" class="form-control form-control">
                    <option value="not selected" selected disabled>Select Gender</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                    <option value="Other" >Other</option>
                </select>
                <label class="form-label" for="form3Example4">Gender</label>
                </div>

                 <!-- input role  -->
                 <div data-mdb-input-init class="form-outline mb-1">
                  <select name="role" value  id="form3Example4" class="form-control form-control">
                    <option value="not selected" selected disabled class="">Select Role</option>
                    <option value="Admin" >Admin</option>
                    <option value="Normal" >Normal</option>
                    
                </select>
                <label class="form-label" for="form3Example4">Gender</label>
                </div>

                <!-- date of birth  -->
                <div data-mdb-input-init class="form-outline mb-1">
                  <input type="date" name="date" id="form3Example4" class="form-control" placeholder="enter your password"/>
                  <label class="form-label" for="form3Example4">Date of Birth</label>
                </div>

                <!-- address  -->
                <div data-mdb-input-init class="form-outline mb-1">
                  <textarea name="address" id="form3Example4" class="form-control" placeholder="Address"></textarea>
                  <label class="form-label" for="form3Example4">Address</label>
                </div>

   <!-- Submit button -->
   <!-- <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-1 btn-xl">
    Sign up
  </button> -->
  <div class="col-lg-8 my-3 mx-auto">
    <div class="d-grid gap-2">
        <input type="submit" name="save" value="Sign Up" class="btn btn-primary" >
    </div>
  </div>

                  <!-- Checkbox -->
                  <!-- <div class="form-check d-flex justify-content-center mb-1">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div> -->
              <div class="text-center">
                    <strong><p>Already have an account<a href="login.html">Login</a></p></strong>
                  </div>
                  <!-- Submit button -->
                 
  
                  <!-- Register buttons -->
                  <!-- <div class="text-center">
                    <p>or sign up with:</p>
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
                  </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
    <script src="bootstrap.min.js"></script>
</body>
</html>