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

          <!-- <li>
                <a class="nav-link active" href="userProfile_dashboard.html">
                    <i class="nc-icon nc-circle-09"></i>
                    <p> User Profile</p>
                </a>
            </li> -->

          <li class="nav-item">
            <a class="nav-link active" href="userProfile_dashboard.php">
              <i class="nc-icon nc-circle-09"></i>
              <p> User Profile</p>
            </a>
          </li>

          <li>
            <a class="nav-link" href="customer_dashboard.php">
              <i class="nc-icon nc-satisfied"></i>
              <p>Customers</p>
            </a>
          </li>




          <li class="nav-item active">
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
            <a class="nav-link active text-center" href="../index.php">

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
          <a class="navbar-brand" href="#pablo">Package</a>
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

          <!-- Cards -->
          <section class="pt-2 pb-5">
            <div class="container">
              <div class="row">
                <!-- <div class="col-6">
                              <h3 class="mb-3 pb-3 pt-5 display-4"></h3>
                          </div> -->


                <!-- Add Package Modal Trigger -->
                <button class="btn btn-success ml-4" data-toggle="modal" data-target="#packageModal">
                  Add Package
                </button>

                <!-- Add Package Modal -->
                <div class="modal" id="packageModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add Package</h5>
                        <button class="close" data-dismiss="modal">
                          &times;
                        </button>
                      </div>

                      <form action="../../php/addNewPackage.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                          <!-- TEXT FIELD GROUPS -->

                          <div class="form-group ml-2 mr-3">
                            <label for="package_name">Package Name</label>
                            <input class="form-control" type="text" name="package_name"
                              placeholder="Enter Category Name" />
                          </div>

                          <div class="form-group ml-2 mr-3">
                            <label for="package_description">Package Description</label>
                            <input class="form-control" type="text" name="package_description"
                              placeholder="Enter Description" />
                          </div>

                          <div class="form-group ml-2 mr-3">
                            <label for="package_image">
                              Package Image
                            </label>
                            <input accept="image/*" onchange="loadFile(event)" id="package_image" type="file"
                              class="form-control" aria-label="category name" name="package_img"
                              accept=".jpg, .png, .jpeg" required>

                          </div>

                          <div class="form-group ml-2 mr-3">
                            <label for="package_trainerfirstname">Trainer Name</label>
                            <input class="form-control" type="text" name="package_trainerfirstname"
                              placeholder="Enter Trainer Name" />
                          </div>

                          <div class="form-group ml-2 mr-3">
                            <label for="package_price">Package Price</label>
                            <input class="form-control" type="text" name="package_price"
                              placeholder="Enter Package Price" />
                          </div>



                          <div class="form-group">
                            <div class="text-center">
                              <button type="submit" class="btn btn-outline-success">
                                Submit
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-12 pt-5">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <?php 
                                require_once('connection.php');
                                
                                $sql_fetch = "SELECT * FROM tbl_package_master";
      
                                $result=mysqli_query($conn,$sql_fetch);
      
                                  while($rows=$result->fetch_assoc()) { ?>


                        <!-- Card  -->
                        <div class="col-md-4 mb-3">
                          <div class="card">

                            <div class="card-body">
                              <a href="">
                                <p class="font-icon-detail text-right">
                                  <i class="nc-icon nc-simple-remove"></i>

                                </p>
                              </a>
                            </div>
                            <img height="231" alt="100%x280"
                              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['Package_img']); ?>" />
                            <div class="card-body">
                              <h4 class="card-title">
                                <?php print_r($rows['Package_name']);?>
                              </h4>
                              <p class="card-text">
                                <?php print_r($rows['Package_description']);?>
                              </p>
                              <a class="btn btn"
                                href="<?php ?>packageInner_dashboard.php?package_id=<?php echo $rows['Package_master_id'];?>&view=personalinfo">Know
                                More</a>


                            </div>
                          </div>
                        </div>
                        <?php
                                
                                // }
                              }
                                ?>
                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </section>
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