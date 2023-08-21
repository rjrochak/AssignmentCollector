<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Hello, world!</title>
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
  <body style="backgroud-image:url('public/bgimg.jpg') !important;">
    <form action="#" method="POST">
  <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="public/pex7.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:100% !important; " />
      </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="firsname"required />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lastname" required />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mname" required />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="fname" required />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" required />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio"  id="femaleGender" value="female"  name="gender" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio"  id="maleGender" value="male"  name="gender"/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" id="otherGender" value="other" name="gender" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select" name="state" required>
                      <option value="select state" >State</option>
                      <option value="chh"  >chh</option>
                      <option value="3">Option 2</option>
                      <option value="4"  >Option 3</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select" name="city" required>
                      <option value="select city"  >City</option>
                      <option value="raipur"   >Raipur</option>
                      <option value="3"   >Option 2</option>
                      <option value="4"   >Option 3</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" id="form3Example9" class="form-control form-control-lg"  name="dateofbirth" required />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form3Example90" class="form-control form-control-lg" name="pncode" required />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>
<!-- 
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" name="course" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div> -->
                  <div class="form-outline mb-4">
                  <select type="text" id="form3Example99" class="form-control form-control-lg" name="course" required >
                      <option value="null"  >seclect</option>
                      <option value="IT"  >IT</option>
                      <option value="Arts"   >Arts</option>
                      <option value="Commerce"   >Commerce </option>
                 </select>
                  <label class="form-label" for="form3Example99">Course</label>
                </div>



                <div class="form-outline mb-4">
                  <input type="email" id="form3Example97" class="form-control form-control-lg"  name="email" required />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="d-flex justify-content-end pt-3">

                  <button type="reset" class="btn btn-light btn-lg"> <a class="text-muted" href="login.php"> I have  Already Registered ! </a></button> 
                 
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button> 
                  <input type="submit" name="submit" value="register" class="btn btn-warning btn-lg ms-2">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </form>
  </body>
</html>
 


  <?php
    if ($_POST) {
        //fetch data 
       extract($_POST);

        //database connection 
       $conn = mysqli_connect("localhost","root","","assignmentcollector");

        //inser query (insert into tablename )
       $data = "INSERT into users(first_name,last_name,mother_name,father_name,address,gender,state,city,dob,pincode,course,email_id) VALUES('$firsname','$lastname','$mname', '$fname','$address','$gender','$state','$city','$dateofbirth','$pncode','$course','$email')";

        //run both query 
       $query = mysqli_query($conn, $data);


        //check status 
       if ($query) {

          // Display SweetAlert success message
            //   echo '<script>
            //     Swal.fire({
            //         title: "Success!",
            //         text: "Data is added successfully",
            //         icon: "success",
            //         confirmButtonText: "OK"
            //     });
            // </script>';
        echo "success ";

       }
       else
       {
         echo "ooppps something went wrong ! ";
       }
       if ($query) {
         // code...

            echo '<script>
                Swal.fire({
                    title: "Success!",
                    text: "Data is added successfully",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            </script>';
       }
       // header('location:login.php');

    }


    ?>