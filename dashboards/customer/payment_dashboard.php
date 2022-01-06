<?php
session_start();
require_once('connection.php');
$currentUser=$_SESSION['cust_user'];

$query = "SELECT Customer_id FROM tbl_customer WHERE Username='$currentUser'" ;

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);

$customerid=$row['Customer_id'];

$bookid = $_GET['booking_id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!-- Import these statement when you're using modals -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <!-- Import till here :) -->

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
                    <a href="javascript:;" class="simple-text"> <img src="" alt=""> </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="userProfile_dashboard.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="package_dashboard.php">
                            <i class="nc-icon nc-app"></i>
                            <p>Packages</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="booking_dashboard.php">
                            <i class="nc-icon nc-check-2"></i>
                            <p>Bookings</p>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="card_dashboard.php">
                            <i class="nc-icon nc-credit-card"></i>
                            <p>Add Card</p>
                        </a>
                    </li>

                    <li class="nav-item active active-pro">
                        <a class="">
                            <div class="container">
                                <button type="reset" onclick="location.href='logout.php'"
                                    class="btn btn-danger btn-fill btn-block">
                                    Log Out
                                </button>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">Add Card</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <!-- <a href="#" class="nav-link">
                  <i class="nc-icon nc-zoom-split"></i>
                  <span class="d-lg-block">&nbsp;Search</span>
                </a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payment</h4>
                        </div>
                        <div class="card-body">
                        <form action="../../php/addPaymentDetails.php?booking_id=<?php echo $bookid; ?>" method="POST">
                              <div class="form-group">
                                <label for="">Choose your Card</label>

                                <div class="form-group">
                                <input name="booking_id" type="hidden" value="<?php echo $_GET['booking_id']?>">
                             
                                <!-- <input name="card_id" type="hidden" value="<?php echo $_GET['card_id']?>"> -->
                             
                                <select name="card_id" class="form-control" style="border-left-color: white;"
                                  id="exampleinput" required>
                                  <option disabled-selected hidden>Select Card</option>
                                  <?php

                                    $sql_fetch = "SELECT * FROM tbl_card WHERE Customer_id='$customerid'";

                                    $result=mysqli_query($conn,$sql_fetch);
                                    while($rows=$result->fetch_assoc()) { 
                                        //  $cardid = $rows['Card_id'];
                                        ?>
            
                                        

                                    ?>

                                  <option value="<?php echo $rows['Card_id'];?>">
                                  <?php print_r($rows['Card_number']); echo " "; print_r($rows['Card_name']);?> 
                                  
                                  </option>
                                  <?php
                    }
                    ?>
                                </select>
                              </div>
                              </div>


                              <div class="form-group">

                                <div class="text-center">
                                  <button type="submit" class="btn btn btn-md my-3 mx-2">
                                    Proceed
                                  </button>
                                </div>

                              </div>
                            </form>

                        </div>
                    </div>
                </div>

               

            </div>
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