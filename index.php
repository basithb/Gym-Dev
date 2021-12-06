<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">



    
    <title>1MR | 1 More Rep</title>
</head>

<body>

    <!-- Start Here -->





    <!-- Responsive Navbar -->

    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="img/1MR Logo.png" alt="1RM Logo" class="img-fluid">

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
                        <a class="nav-link text-dark lead" href="package.php">Packages</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Home Section -->

    <header id="home-section">
        <div class="light-overlay">
            <div class="home-inner container">
                <div class="row">

                    <div class="col-lg-8 d-none d-lg-block">
                        <h1 class="display-4 text-white">
                            <strong>Achieve</strong> your fitness goals
                        </h1>

                        <p class="display-6 pt-1 lead text-white">We strive to keep you fit & healthy with a range of
                            multiple exercises.</p>
                        <p class="text-white">Don't have an account?</p>


                        <!-- Registration Modal Trigger -->
                        <button class="btn btn-success" data-toggle="modal" data-target="#registrationModal">Get Started
                            Today!</button>

                        <!-- Registration Modal -->
                        <div class="modal" id="registrationModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Registration</h5>
                                        <button class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <form action='php/register_action.php' method='POST'>


                                        <div class="modal-body">


                                            <!-- TEXT FIELD GROUPS -->

                                            <div class="form-group">
                                                <input type="radio" name="usertype" value="Customer" checked />&nbsp;
                                                Customer &nbsp;
                                                <!-- <input type="radio" name="usertype" value="Trainer" />&nbsp; Trainer
                                                &nbsp; -->
                                            </div>


                                            <div class='form-group'>
                                                <label for="first_name">First Name</label>
                                                <input class="form-control" type="text" name="first_name"
                                                    placeholder="Enter Your First Name">
                                            </div>

                                            <div class='form-group'>
                                                <label for="last_name">Last Name</label>
                                                <input class="form-control" type="text" name="last_name"
                                                    placeholder="Enter Your Last Name">
                                            </div>

                                            <div class='form-group'>
                                                <label for="phone_number">Phone Number</label>
                                                <input class="form-control" type="text" name="phone_number"
                                                    placeholder="Enter Your Phone Number">
                                            </div>

                                            <div class='form-group'>
                                                <label for="address">Address</label>
                                                <input class="form-control" type="text" name="address"
                                                    placeholder="Enter Your Address">
                                            </div>

                                            <div class='form-group'>
                                                <label for="pin_code">Pin Code</label>
                                                <input class="form-control" type="text" name="pin_code"
                                                    placeholder="Enter Pin Code">
                                            </div>

                                            <div class='form-group'>
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Enter Your Email ID">
                                                <small class='form-text text-muted'>Your email will not be
                                                    shared</small>
                                            </div>

                                            <div class='form-group'>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password"
                                                    placeholder="Enter Your Password">
                                            </div>
                                            
                                            <div class='form-group'>
                                                <button type="submit" class="btn btn-outline-success btn-block" 
                                                 >Submit</button>
                                            </div>
                                        </div>

                                        
 

                                    </form>




                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-4">
                        <div class="card bg-secondary text-center border border-white card-form">
                            <div class="card-body">
                                <h3 class="text-white">Welcome Back!</h3>
                                <p></p>

                                <form action='php/login_action.php' method='POST'>

                                    <div class="form-group">
                                        <input name="email" class="form-control form-control-lg" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-lg"
                                            placeholder="Password">
                                    </div>
<!-- 
                                    <div class="form-group">
                                                <button type="submit" class="btn btn-outline-light btn-block" 
                                                 >Login</button>
                                            </div> -->

                                    <input type="submit" value="Login" class="btn btn-outline-light btn-block">
                                </form>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
        </div>
    </header>










    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <script>
        // Get current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>