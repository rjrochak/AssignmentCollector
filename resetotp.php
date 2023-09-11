<?php
 require("database.php");
 session_start();
 $vemail = $_SESSION['v_email'];
 if($_POST){
    extract($_POST);
    $data =  "SELECT * from users where(otp='$otp')";
    $query = mysqli_query($connect, $data);
    if(mysqli_num_rows($query)!=0){
        $result = mysqli_fetch_assoc($query);
        $id = $result['id'];
        $status = 1;
        $result1 = "UPDATE users SET status='$status' where id='$id'";
        $query1 = mysqli_query($connect, $result1);
        if($query1){
            header('location:resetpassword.php');
        }else{
            alert( "something went wrong");
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
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: #007BFF;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        
        h1 {
            font-size: 24px;
        }
        
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container" align="center">
        <h1>OTP Verification</h1>
        <p>Enter the OTP sent to your Email address.</p>
        <form action="verify.php" method="post">
            <input type="text" name="otp" placeholder="Enter OTP" required>
            <br>
            <button type="submit">Verify OTP</button>
        </form>
    </div>
</body>
</html>
