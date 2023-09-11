
<?php
        
        require('../database.php');

        session_start();
        $id = $_SESSION['id'];
        $name = $_SESSION['full_name'];  
 
        if(empty($id)){
            header('location:../login.php');
            exit();
        }


                                   $query = "SELECT * FROM assignments where id='$id'";  
                                    $data = mysqli_query($connect,$query);  
                                    if(mysqli_num_rows($data) != 0){
                                        while($result = mysqli_fetch_assoc($data)){
                                      
                                        $userid =  $result['user_id'];
                                        $title =  $result['title'];
                                        $file =  $result['file'];
                                        $update =  $result['update_at'];

                                        echo $title;
                                       
                                    }
                                }else {
                                    echo "something went wrong";
                                }
         
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>user profile</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style >

       
        .user-profile-card {
            max-width: 400px;
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 10px auto; /* Center horizontally */
            position: absolute;
            top: 45%; /* Center vertically */
            left: 0;
            right: 0;
            transform: translateY(-50%);
            
        }

    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#"> Welcome to <?php echo $name ?></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                              <a class="nav-link" href="studentDashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                         
                            <a class="nav-link" href="userprofile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                My Profile
                            </a>
                             <a class="nav-link" href="myassignment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                MY Assignments 
                            </a>
                            <a class="nav-link" href="assignment.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Assignments Uploade
                            </a>
                             
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                     <div class="user-profile-card">
                         <div class="profile-info">
                            <h6 for="name"> ID:</h6>
                            <p><?php   echo $id;?></p>
                        </div>
                        
                        <div class="profile-info">
                            <h6 for="name">User ID:</h6>
                            <p><?php   echo $userid;?></p>
                        </div>
                        <div class="profile-info">
                            <h6 for="name">Title:</h6>
                            <p><?php   echo $title;?></p>
                        </div>
                        <div class="profile-info">
                            <h6 for="email">File:</h6>
                           
                            <img src="<?php echo $file; ?>" alt="img" width="50px;">
                        </div>
                        <div class="profile-info">
                            <h6 for="phone">Update at:</h6>
                            <p><?php   echo $update;?></p>
                        </div>
                     </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>




                    