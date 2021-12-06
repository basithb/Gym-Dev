<?php
require_once('trainerUserProfile.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="black" data-image="img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                        Logo
                    </a>
                </div>
                <ul class="nav">

                    <li class="nav-item active">
                        <a class="nav-link active" href="userProfile_dashboard.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p> User Profile</p>
                        </a>
                    </li>


                    <li class="nav-item">
              <a class="nav-link" href="customer_dashboard.php">
                <i class="nc-icon nc-satisfied"></i>
                <p>Customers</p>
              </a>
            </li>

                    <li>
                        <a class="nav-link" href="package_dashboard.php">
                            <i class="nc-icon nc-app"></i>
                            <p>Packages</p>
                        </a>
                    </li>

                    <li>
              <a class="nav-link" href="exercise_dashboard.php">
                <i class="nc-icon nc-notes"></i>
                <p>Exercises</p>
              </a>
            </li>
            
                

                    <li>
                        <a class="nav-link" href="booking_dashboard.php">
                            <i class="nc-icon nc-check-2"></i>
                            <p>Bookings</p>
                        </a>
                    </li>



                    <li class="nav-item active active-pro">
                        <a class="nav-link active text-center" href="../index.html">

                            <p>Log Out</p>
                        </a>
                    </li>

                </ul>

            </div>
        </div>

        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">

                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">User Profile</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>

            <!-- End Navbar -->


            <div class="content">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form action='trainerUpdateProfile.php' method='POST'>



                                        <div class="row">

                                            <div class='form-group ml-3'>
                                                <label for="first_name">First Name</label>
                                                <input class="form-control" type="text" name="fname" 
                                                    placeholder="Enter Your First Name" value="<?php print_r($_SESSION['trainer_fname']);?>">
                                            </div>

                                            <div class='form-group ml-3'>
                                                <label for="last_name">Last Name</label>
                                                <input class="form-control" type="text" name="lname" 
                                                    placeholder="Enter Your Last Name" value="<?php print_r($_SESSION['trainer_lname']);?>">
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class='form-group ml-3'>
                                                <label for="phone_number">Phone Number</label>
                                                <input class="form-control" type="text" name="phone_no"
                                                    placeholder="Enter Your Phone Number" value="<?php print_r($_SESSION['trainer_phone']);?>" >
                                            </div>

                                            <div class='form-group ml-3'>
                                                <label for="pin_code">Pin Code</label>
                                                <input class="form-control" type="text" name="trainer_pincode"
                                                    placeholder="Enter Pin Code" value="<?php print_r($_SESSION['trainer_pin']);?>">
                                            </div>

                                        </div>


                                        <div class='form-group'>
                                            <label for="address">Address</label>
                                            <input class="form-control" type="text" name="trainer_address"
                                                placeholder="Enter Your Address" value="<?php print_r($_SESSION['trainer_address']);?>">
                                        </div>

                                        


                                        <div class="row">

                                            <div class='form-group ml-3'>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="trainer_password"
                                                    placeholder="Enter Your New Password" value="<?php print_r($_SESSION['trainer_password']);?>">
                                            </div>

                                            <div class='form-group ml-3'>
                                                <label for="password">Confirm Password</label>
                                                <input class="form-control" type="password" name="password"
                                                    placeholder="Confirm Your Password" >
                                            </div>

                                        </div>



                                        <div class='form-group text-center pt-1'>
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray"
                                                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.vecteezy.com%2Fsystem%2Fresources%2Fpreviews%2F000%2F550%2F731%2Foriginal%2Fuser-icon-vector.jpg&f=1&nofb=1"
                                                alt="...">
                                            <h5 class="title">*Name of the User*</h5>
                                        </a>
                                        <p class="description">
                                            *User Email*
                                        </p>
                                    </div>

                                    </p>
                                </div>


                            </div>
                        </div> -->


                    </div>



                </div>
            </div>






            <footer class="footer">
                <!-- <div class="container-fluid">
                    <nav>
                        
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">One More Rep</a>
                        </p>
                    </nav>
                </div> -->
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>