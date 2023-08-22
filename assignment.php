<!DOCTYPE html>
<html>
<head>
    <title>Upload File with User ID</title>
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
            background-color: lightgoldenrodyellow;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 40%;
            height: 60vh;

        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;

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
        <h2>Upload File with User ID</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="userid">User ID:</label>
                <input type="text" id="userid" name="userid" required>
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
