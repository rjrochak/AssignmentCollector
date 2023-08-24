<?php
session_start();
 $status = 0;
   if($_POST){
        extract($_POST); 
        
        $otp = rand(10000,99999);
         //including send_email.php file in this file.
        
        $conn = mysqli_connect("localhost","root","","assignmentcollector"); 
        $data = "INSERT into users(first_name,last_name,mother_name,father_name,address,gender,state,city,dob,pincode,course,email_id,password,otp,status) VALUES('$first_name','$last_name','$mother_name', '$father_name','$address','$gender','$state','$city','$dob','$pincode','$course','$email_id','$password','$otp','$status')";

        $query = mysqli_query($conn, $data);
        if ($query){
          include('resetemail.php');
          $mail->send();
          session_start();
          $_SESSION['v_email'] = $vemail;
          header("location:resetotp.php");
            //  echo "data added successfully";
        } else {
            mysqli_error($query);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
         
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Return to login</a>
                                                <a class="btn btn-primary" onclick="myFunction()">get password</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registration.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        
                </footer>
            </div>
        </div>
        <script src="js/scripts.js"></script>

        <script>
function myFunction() {
  alert("your username and password has been send to your email account");
}
</script>
    </body>
</html>




