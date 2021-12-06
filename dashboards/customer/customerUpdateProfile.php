<?php
require_once('connection.php');
session_start();
$username= $firstname= $lastname= $phone= $usertype= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $firstname=test_input($_POST["fname"]);
    $lastname=test_input($_POST["lname"]);
    $phone_number=test_input($_POST["phone_no"]);
    $pin_code=test_input($_POST["cust_pincode"]);
    $address=test_input($_POST["cust_address"]);
    $password=test_input($_POST["cust_password"]);
    
  }

  $old_username=$_SESSION['cust_user'];

 
  
$sql_update_login="UPDATE tbl_customer
INNER JOIN tbl_login ON tbl_customer.Username=tbl_login.Username 
SET tbl_customer.Customer_firstname='$firstname',tbl_customer.Customer_lastname='$lastname', tbl_customer.Customer_phonenumber='$phone_number', tbl_customer.Customer_address='$address', tbl_customer.Customer_pin='$pin_code', tbl_login.Password='$password'  
WHERE tbl_customer.Username='$old_username'";


  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Updated Successfully!";
       header("refresh:1; url=userProfile_dashboard.php");

  }

  mysqli_close($conn);
?>