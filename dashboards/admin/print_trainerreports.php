<?php
require_once('connection.php');
session_start();


$sql_fetch_cust="SELECT * FROM tbl_customer";

$sql_exe_cust=mysqli_query($conn,$sql_fetch_cust);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Reports</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
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

    <center>

        <div class="content">
            <img src="../../img/1MR Logo.png" alt="1RM Logo" class="img-fluid">

            <div class="container-fluid">
          <div class="col-md-13">
            <div class="card border-secondary table-plain-bg">
              <div class="card-header">
                <h4 class="card-title pb-2">Trainer Report</h4>
                
              </div>

              <div class="card-body table-full-width table-responsive">
                <table class="table table-hover">
                  <thead>
                    <th>Trainer ID</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Pin</th>

                  </thead>

                  <tbody>
                    <?php
                          while($row=mysqli_fetch_array($sql_exe_cust))
                          { 
                            $username=$row['Username'];
                            $sql_fetch_log="SELECT * FROM tbl_trainer ";
                            $sql_exe_log=mysqli_query($conn,$sql_fetch_log);

                            while($row=mysqli_fetch_array($sql_exe_log))
                            {
                            ?>

                    <tr>
                      <th scope="row">
                        <?php print_r($row['Trainer_id']);?>
                      </th>
                      <td>
                        <?php print_r($row['Username']);?>
                      </td>
                      <td>
                        <?php print_r($row['Trainer_firstname']);?>
                      </td>
                      <td>
                        <?php print_r($row['Trainer_lastname']);?>
                      </td>
                      <td>
                        <?php print_r($row['Trainer_phonenumber']);?>
                      </td>
                      <td>
                        <?php print_r($row['Trainer_address']);?>
                      </td>
                      <td>
                        <?php print_r($row['Trainer_pin']);?>
                      </td>








              </div>
            </div>
          </div>

          </tr>

          <?php
                          }
                        }
                        ?>
          </tbody>
          </table>
        </div>



            <script>

                print();
            </script>











    </center>






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