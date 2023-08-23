<?php
session_start();
$session_otp = $_SESSION['otp'];
$connect = mysqli_connect("localhost", "root", "", "seschool");
if($_POST){
extract($_POST);// $_POST['otp']
if($session_otp==$otp){
$update = "UPDATE register SET status = '1' WHERE otp='$otp'";   
$update_query= mysqli_query($connect,$update);
if($update_query){
    header("location:login.php"); 
}

}else{
    echo '<script>'.'alert("incorrect otp try it again")'.'</script>'; 
}
// $select = "SELECT * from register WHERE otp = '$otp'";
// $query= mysqli_query($connect,$select);
// if(mysqli_num_rows($query) !== 0){
//     while($data = mysqli_fetch_assoc($query))
//     {
//         $id = $data['id'];
//         $status_from_table = $data['status'];
//     }
// }
// else{
//     echo '<script>'.'alert("incorrect otp try it again")'.'</script>';  
        
// }
// $update = "UPDATE register SET status = '1' WHERE id='$id'";
// $update_query= mysqli_query($connect,$update);
 
// if($update_query){
//     header("location:login.php");
//     }else{
//         echo '<script>'.'alert("incorrect otp try it again")'.'</script>';
//     }


}

// elseif($status_from_table==0){
//     echo '<script>'.'alert("incorrect otp try it again")'.'</script>';
//    }
// else{
//     echo '<script>'.'alert("incorrect otp try it again")'.'</script>';  
        
// }

// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- <h1>Register Now</h1>

    <form action="" method=POST>
        <lable for=""> Name :</lable>
        <input type="text" name="name" id="">
        <br><br>
        <label for="">Email : </label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="">Password : </label>
        <input type="password" name="password" id="">
        <br>
        <br>
        <input type="submit" value="Register Now" name="submit">
    </form> --> 

    <!-- register Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Verify OTP</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            
                        <form action="" method="POST">
                            <div class="form-group">
                                    <input type="text" name="otp" class="form-control border-0 p-4" placeholder="enter one time password" required="required" />
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="btn btn-dark btn-block border-0 py-3" >Verify OTP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register End -->

</body>

</html><!DOCTYPE html>
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
                                                <a class="btn btn-primary" href="#">Reset Password</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
