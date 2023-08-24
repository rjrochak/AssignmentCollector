
<?php
        
        //require("database.php");

        session_start();
        $id = $_SESSION['id'];
        if(empty($id)){
            header('location:login.php');
            exit();
        }
         
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File with User ID, Title, and Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            padding: 8px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload File with User ID, Title, and Data</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="userid">User ID:</label>
                <input type="text" id="userid" name="userid" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="file">Upload File:</label>
                <input type="file" id="file" name="file" required>
            </div>
            <input type="submit" value="Upload">
        </form>
    </div>
</body>
</html>



<?php
require('database.php');
if($_POST){
    $user_id = $_POST['userid'];
    $title = $_POST['title'];

    if (($_FILES['file']['name']!="")){
        // Where the file is going to be stored
            $target_dir = "public/";
            $file = $_FILES['file']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['file']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
            $status = move_uploaded_file($temp_name,$path_filename_ext);
            if($status){
                $insert = mysqli_query($conn,"INSERT into assignments(user_id,title,file) VALUES('$user_id','$title','$path_filename_ext')");
                if($insert){
                   
                   // header('location:index.php');
                  //  echo "Data Saved Successfully";
                }else{
                    echo "something went wrong";
                }
            }else{
                echo $status;
            }

        }
}
?>
