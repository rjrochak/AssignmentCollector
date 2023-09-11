<?php
$connect = mysqli_connect("localhost", "root", "", "assignmentcollector");
session_start();
 $status = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirem_password = $_POST["confirem_password"];

    // email is already exists 
       $exits = "SELECT * from admin where email='$email'";
       $xresult = mysqli_query($connect,$exits);
       $numexist = mysqli_num_rows($xresult);
       if ($numexist)
             {
                   // code...
                   
                   echo '<script>
                          alert(" username is already exists");
                        </script>';


             }
            else
            {

                if ($password !== $confirem_password)
                 {
                    echo "Password and confirm password do not match.";
                 }
                 else
                  {
                    // Hash the password for security
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    
                    // Generate OTP
                    $otp = rand(1000, 9999);
                    
                          $data = "INSERT into admin(first_name,last_name,email,password,otp,status) VALUES('$firstname','$lastname','$email','$hashed_password','$otp','$status')";
                            
                            $insert = mysqli_query($connect, $data);
                            
                            if ($insert) 
                            {

                                include('../email.php');
                                 $mail->send();
                                 session_start();
                                 $_SESSION['v_email'] = $vemail;
                                header("location:otp.php");
                                echo "Registration successful";
                              
            
                            } 
                            else 
                            {
                                echo "Something went wrong with database insertion.";
                            }
                     }

              } 
             
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .error {
            color: red;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>User Registration</title>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form method="post" action="#">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname"  required>
               
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname"  required>
                
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
               
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
               
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirem_password" id="confirm_password" required>
              
            </div>


            <button type="submit" name="register"><a href="adminlogin.php" style="color: white; cursor: pointer;">Log in </a></button>

            <button type="submit" name="register">Register</button>
            
            
           
        </form>
    </div>
</body>
</html>
