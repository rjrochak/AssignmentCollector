<?php
$connect = mysqli_connect("localhost", "root", "", "assignmentcollector");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $full_name = $_POST["full_name"];
    $father_name = $_POST["father_name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];
    $password = $_POST["password"];
    $confirem_password = $_POST["confirem_password"];

    // email is already exists 
       $exits = "SELECT * from users where email='$email'";
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

        // Validate and sanitize user inputs here.
        
        // Check if passwords match
        if ($password !== $confirem_password) {
            echo "Password and confirm password do not match.";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Generate OTP
            $otp = rand(1000, 9999);
            
            // File upload handling
            if ($_FILES['file']['name'] != "") {
                $target_dir = "public/uploads/";
                $file = $_FILES['file']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['file']['tmp_name'];
                $path_filename_ext = $target_dir . $filename . "." . $ext;  
                if (move_uploaded_file($temp_name, $path_filename_ext)) 
                {
                    $data = "INSERT INTO users(full_name, father_name, gender, dob, email, phone, course,addres, pincode, password, otp, status,file) VALUES ('$full_name', '$father_name', '$gender', '$dob', '$email', '$phone', '$course', '$address', '$pincode', '$hashed_password', '$otp', 0, '$path_filename_ext')";
                    
                    $insert = mysqli_query($connect, $data);
                    
                    if ($insert) {

                         include('email.php');
                         $mail->send();
                         session_start();
                         $_SESSION['v_email'] = $vemail;
                        header("location:otp.php");
                        echo "Registration successful";
                      
    
                    } else {
                        echo "Something went wrong with database insertion.";
                    }
                } else {
                    echo "File upload failed.";
                }
            } else {
                echo "File not selected.";
            }
            mysqli_error($query);
        }
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Student registration</title>
    <style>
          .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
    </style>
  </head>
  <body  >
 <form action="#" method="POST" enctype="multipart/form-data">
  <section class="h-100 bg-dark" >
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="public/pex7.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:100% !important; width:100% !important;" />
      </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">Full_name</label>
                      <input type="text" id="form3Example1m"  class="form-control form-control-lg" name="full_name" Required />
                      
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1n">Father_name</label>
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="father_name" Required />
                      
                    </div>
                  </div>
                </div>

                 <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Gender: </h6>
                    <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="femaleGender">Female</label>
                    <input class="form-check-input" type="radio"  id="femaleGender" value="female"  name="gender" Required />
                   
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="maleGender">Male</label>
                    <input class="form-check-input" type="radio"  id="maleGender" value="male"  name="gender" Required/>
                   
                  </div>

                  <div class="form-check form-check-inline mb-0">
                     <label class="form-check-label" for="otherGender">Other</label>
                    <input class="form-check-input" type="radio" id="otherGender" value="other" name="gender" Required />
                   
                  </div>

                </div>
                 <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example9">DOB</label>
                  <input type="date" id="form3Example9" class="form-control form-control-lg"  name="dob" max="2022-12-31" Required/>
                 
                </div>

                 <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Email</label>
                  <input type="text" id="form3Example97" class="form-control form-control-lg"  name="email" Required/>
                  
                </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example90">Phone</label>
                  <input type="number" id="form3Example90" class="form-control form-control-lg" name="phone" maxlength="6" minlength="6" Required/>
                  
                </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example99">Course</label>
                  <select type="text" id="form3Example99" class="form-control form-control-lg" name="course" Required >
                  <option value="null"  ></option>
                  <option value="IT"  >IT</option>
                      <option value="Arts"   >Arts</option>
                      <option value="Commerce"   >Commerce </option>
                 </select>
                  
                </div>

                 <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example8">Address</label>
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" Required/>
                 
                </div>

                 <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example90">Pincode</label>
                  <input type="number" id="form3Example90" class="form-control form-control-lg" name="pincode" maxlength="6" minlength="6" Required/>
                  
                </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example90">password</label>
                  <input type="password" id="myInput" class="form-control form-control-lg"  name="password" Required />   
                                
                </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example90">Confire_password</label> 
                  <input type="password" id="myInput" class="form-control form-control-lg"  name="confirem_password" Required />
                                  
                </div>
                <div class="mb-3">
                    <label class="form-label" for="formFile">Upload Photo</label>
                    <input class="form-control" type="file" id="formFile" name="file" required>
                </div>

                <div class="d-flex justify-content-end pt-3">
                <button type="reset" class="btn btn-light btn-lg"> <a class="text-muted" href="login.php"> I have  Already Registered ! </a></button> &nbsp;
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button> 
                  <input type="submit" name="submitform " value="Sign Up" class="btn btn-warning btn-lg ms-2" >
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </form>
  </body>
</html>
 


  