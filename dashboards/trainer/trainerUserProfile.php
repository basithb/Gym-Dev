<?php
require_once('connection.php');
session_start();

$username=$_SESSION['cust_user'];

  $sql_login="SELECT tbl_trainer.Trainer_firstname, tbl_trainer.Trainer_lastname, tbl_trainer.Trainer_phonenumber, tbl_trainer.Trainer_address, tbl_trainer.Trainer_pin, tbl_login.Password FROM tbl_trainer INNER JOIN tbl_login ON tbl_trainer.Username=tbl_login.Username WHERE tbl_trainer.Username='$username'";

  

  $sql_login_execute=mysqli_query($conn,$sql_login);


  while($row=mysqli_fetch_assoc($sql_login_execute))
  {
        $_SESSION['trainer_phone']=$row['Trainer_phonenumber'];
        // $_SESSION['cust_user']=$row['User_Type'];
        $_SESSION['trainer_fname']=$row['Trainer_firstname'];
        $_SESSION['trainer_lname']=$row['Trainer_lastname'];
        $_SESSION['trainer_address']=$row['Trainer_address'];
        $_SESSION['trainer_pin']=$row['Trainer_pin'];
        $_SESSION['trainer_password']=$row['Password'];
  }

  mysqli_close($conn);
?>