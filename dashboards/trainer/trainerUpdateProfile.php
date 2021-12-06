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
    $pin_code=test_input($_POST["trainer_pincode"]);
    $address=test_input($_POST["trainer_address"]);
    $password=test_input($_POST["trainer_password"]);
    
  }

  $old_username=$_SESSION['cust_user'];

 
  
$sql_update_login="UPDATE tbl_trainer
INNER JOIN tbl_login ON tbl_trainer.Username=tbl_login.Username 
SET tbl_trainer.Trainer_firstname='$firstname',tbl_trainer.Trainer_lastname='$lastname', tbl_trainer.Trainer_phonenumber='$phone_number', tbl_trainer.Trainer_address='$address', tbl_trainer.Trainer_pin='$pin_code', tbl_login.Password='$password'  
WHERE tbl_trainer.Username='$old_username'";


  $sql_exe_login=mysqli_query($conn,$sql_update_login);

  if($sql_exe_login)
  {
       echo "Updated Successfully!";
       header("refresh:1; url=userProfile_dashboard.php");

  }

  mysqli_close($conn);
?>