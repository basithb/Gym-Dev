<?php
require_once('connection.php');
session_start();

$username=$_SESSION['cust_user'];

  $sql_login="SELECT tbl_customer.Customer_firstname, tbl_customer.Customer_lastname, tbl_customer.Customer_phonenumber, tbl_customer.Customer_address, tbl_customer.Customer_pin, tbl_login.Password FROM tbl_customer INNER JOIN tbl_login ON tbl_customer.Username=tbl_login.Username WHERE tbl_customer.Username='$username'";

  

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
        $_SESSION['cust_phone']=$row['Customer_phonenumber'];
        // $_SESSION['cust_user']=$row['User_Type'];
        $_SESSION['cust_fname']=$row['Customer_firstname'];
        $_SESSION['cust_lname']=$row['Customer_lastname'];
        $_SESSION['cust_address']=$row['Customer_address'];
        $_SESSION['cust_pin']=$row['Customer_pin'];
        $_SESSION['cust_password']=$row['Password'];
  }

  mysqli_close($conn);
?>