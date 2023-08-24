<?php
require("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentLogin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="img/style.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style type="text/css">
              .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
        .gradient-form {
        height: 100vh !important;
        }
        }
        @media (min-width: 769px) {
        .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
        }
        }
    </style>

</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo.jpg"
                    style="width: 185px;" alt="logo">
                 
                </div>

                <form action="" method="POST">
                  <p>Please login to your account</p>

                  

                   <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Enter your Email" name="email"/>
                    <!-- <label class="form-label" for="form2Example11">Enter your email</label> -->
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" placeholder="Enter your password" name="pwd"/>
                    <!-- <label class="form-label" for="form2Example22">Password</label> -->
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                
                   <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"> 
               

                      <a class="text-muted" href="password.php"> <p class="mb-0 me-2">Forgot password?</p></a>
                   
                  </div>


                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="registration.php" class="btn btn-outline-danger">Create new</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="js/bootsrap.js"></script>
<script src="js/custom.js"></script>
<script src="js/popper.js"></script>
</body>
</html>


 <?php
        if($_POST){
            extract($_POST);
            $query = mysqli_query($conn,"SELECT * from admin where email='$email' and password='$password'");
            if(mysqli_num_rows($query)!= 0){
                $result = mysqli_fetch_assoc($query);
                session_start();
                $_SESSION['id'] = $result['id'];
                header('location:otp.php');
                // echo "ok"; 

            }else{
                echo "invalid email and password";
            }
        }
    ?>



  