<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<?php
include 'inc/header.php';
Session::CheckLogin();
?>



<?php
 $logMsg = Session::get('logMsg');
                if (isset($logMsg)) {
                  echo $logMsg;
                }
                $msg = Session::get('msg');
                if (isset($msg)) {
                  echo $msg;
                }
                Session::set("msg", NULL);
                Session::set("logMsg", NULL);

 ?>

<div class="card ">
        <div class="card-header">
          <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>User login</h3>
        </div>
        <div class="card-body">
            <div style="width:450px; margin:0px auto">
            <form class="" action="" method="post">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-success">Login</button>
                </div>
            </form>
          </div>
        </div>
      </div>

  <?php
  include 'include/footer.php';

  ?>
 
<script src="js/bootsrap.js"></script>
<script src="js/custom.js"></script>
<script src="js/popper.js"></script>
</body>
</html>