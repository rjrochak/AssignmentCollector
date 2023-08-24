<?php
session_start();
 $status = 0;
   if($_POST){
        extract($_POST); 
        
        $otp = rand(1000,9999);
         //including send_email.php file in this file.
        
        $conn = mysqli_connect("localhost","root","","assignmentcollector"); 
        $data = "INSERT into users(first_name,last_name,mother_name,father_name,address,gender,state,city,dob,pincode,course,email_id,password,otp,status) VALUES('$first_name','$last_name','$mother_name', '$father_name','$address','$gender','$state','$city','$dob','$pincode','$course','$email_id','$password','$otp','$status')";

        $query = mysqli_query($conn, $data);
        if ($query){
          include('email.php');
          $mail->send();
          session_start();
          $_SESSION['v_email'] = $vemail;
          header("location:otp.php");
            //  echo "data added successfully";
        } else {
            mysqli_error($query);
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
    <form action="#" method="POST">
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
                      <input type="text" id="form3Example1m"  class="form-control form-control-lg" name="first_name" Required />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="last_name" Required />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mother_name" Required />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n1" class="form-control form-control-lg" name="father_name" Required/>
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" Required/>
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio"  id="femaleGender" value="female"  name="gender" Required />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio"  id="maleGender" value="male"  name="gender" Required/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" id="otherGender" value="other" name="gender" Required />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                  <label for="state" >Select State:</label>
               <select id="state" name="state" Required onchange="populateCities()">
               <option value="select">Select</option>
       
                </select>

                  </div>
                  <div class="col-md-6 mb-4">

                  <label for="city" >Select City:</label>
    <select id="city" name="city" Required>
        <option value="select">Select</option>
       
    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" id="form3Example9" class="form-control form-control-lg"  name="dob" max="2022-12-31" Required/>
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form3Example90" class="form-control form-control-lg" name="pincode" maxlength="6" minlength="6" Required/>
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>
                
                <div class="form-outline mb-4">
                  <select type="text" id="form3Example99" class="form-control form-control-lg" name="course" Required >
                  <option value="null"  ></option>
                  <option value="IT"  >IT</option>
                      <option value="Arts"   >Arts</option>
                      <option value="Commerce"   >Commerce </option>
                 </select>
                  <label class="form-label" for="form3Example99">Course</label>
                </div>



                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg"  name="email_id" Required/>
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="myInput" class="form-control form-control-lg"  name="password" maxlength="6" minlength="6" Required />
                  
                  <label class="form-label" for="form3Example97">Password</label>
                  <input type="checkbox" onclick="myFunction()" style="float:right; width: 20px; height: 16px; margin-top :2px;"><small style="float:right;">Show Password </small>
                 
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
  // script.js
const stateSelect = document.getElementById('state');
const citySelect = document.getElementById('city');

// Sample data for states and cities (you can replace this with your own data)
const states = [
    
    { name: 'Chhattisgarh', cities: ['Durg', 'Korba', 'Raipur'] },
    { name: 'Madhya Pradesh', cities: ['Bhopal', 'Gwalior', 'Indore'] },
    { name: 'Maharashtra', cities: ['Mumbai', 'Nagpur', 'Pune'] },
    { name: 'Odisha', cities: ['Bhubaneshwar', 'Cuttack', 'Puri'] },
];

// Populate the state dropdown
function populateStates() {
    for (const state of states) {
        const option = document.createElement('option');
        option.value = state.name;
        option.textContent = state.name;
        stateSelect.appendChild(option);
    }
}

// Populate the city dropdown based on the selected state
function populateCities() {
    const selectedState = stateSelect.value;
    
    // Clear existing city options
    citySelect.innerHTML = '<option value="select">Select</option>';
    
    // Find the selected state in the data
    const selectedStateData = states.find(state => state.name === selectedState);
    
    if (selectedStateData) {
        for (const city of selectedStateData.cities) {
            const option = document.createElement('option');
            option.value = city;
            option.textContent = city;
            citySelect.appendChild(option);
        }
    }
}

// Initial population of the state dropdown
populateStates();

// Add an event listener to the state dropdown to populate cities when a state is selected
stateSelect.addEventListener('change', populateCities);

</script>
     
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </form>
  </body>
</html>
 


  