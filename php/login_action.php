<?php
require_once('connection.php');
session_start();

$username= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=test_input($_POST["email"]);
    $password=test_input($_POST["password"]);

  }

  $sql_login_check="SELECT * FROM tbl_login WHERE Username='$username'";
  $sql_login_details=mysqli_query($conn,$sql_login_check);



  while($row=mysqli_fetch_assoc($sql_login_details))
  {
    if($username==$row['Username'] && $password==$row['Password'])
    {
        echo "Successfully logged in!";

        if($row['User_Type'] =='customer')
        {
          // $_SESSION['username']=$username;
        header("Location: ../dashboards/customer/userProfile_dashboard.php"); } // this should re-direct to the customer dashboard in the future
      
        
        else if($row['User_Type'] =='trainer')
        {
        header("Location: ../dashboards/trainer/userProfile_dashboard.php"); }

        else{
        header("Location: ../dashboards/admin/customer_dashboard.php");
        }

        $_SESSION['cust_user']=$row['Username']; 
        $_SESSION['User_type']=$row['User_Type'];
        $_SESSION['Status']=$row['Status'];
        exit;
    }

    else
    {
        echo "Incorrect Username or Password! ";
        exit;
    }
  }