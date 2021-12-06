<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css_practise/style.css">

    <title>Package</title>
</head>

<body>


    <header id="package-section">
        
        <!-- Responsive Navbar -->

        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/1MR Logo.png" alt="1RM Logo">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link text-dark lead" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark lead" href="#">Packages</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Cards -->
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-6">
                        <h3 class="mb-3 pb-3 pt-5 display-4"></h3>
                    </div> -->


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

    </header>













</body>

</html>