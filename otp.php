
<?php
 require("database.php");
 session_start();
 $vemail = $_SESSION['v_email'];
 if($_POST){
    extract($_POST);
    $data =  "SELECT * from users where(otp='$otp')";
    $query = mysqli_query($conn, $data);
    if(mysqli_num_rows($query)!=0){
        $result = mysqli_fetch_assoc($query);
        $id = $result['id'];
        $status = 1;
        $result1 = "UPDATE users SET status='$status' where id='$id'";
        $query1 = mysqli_query($conn, $result1);
        if($query1){
            
            header('location:login.php');
        }else{
            echo "something went wrong";
        }
       
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #BEADFA;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form input[type="text"] {
            width: 90%;
            height: 25px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form button {
            display: block;
            width: 96%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container" align="center">
        <h2>OTP Verification</h2>
        <form action="" method="POST">
            <input type="text" name="otp" placeholder="Enter your otp" required>
            <button type="submit">Submit</button>
        </form>

     
    </div>
</body>
</html>

<!-- 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mobile = $_POST["mobile"];
            $otp = rand(100000, 999999);
            echo "Your OTP is: " . $otp;
        } -->