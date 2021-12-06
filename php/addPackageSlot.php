<?php
require_once('connection.php');
session_start();

$package_slot =$slot_id = $usertype ="";


function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $package_slot=test_input($_POST["package_slot"]);
    $booking_id=test_input($_POST["booking_id"]);
    $package_master_id=test_input($_POST["package_master_id"]);
    // $customer_id=test_input($_POST["customer_id"]);
    

    // $exercise_id=test_input($_POST["exercise_id"]);
    $usertype=$_SESSION['User_type'];
    debug_to_console($usertype);

  }



 $sql_insert_login="INSERT INTO tbl_booking (Booking_id, Slot_id, Package_master_id) VALUES ('$booking_id','$package_slot','$package_master_id')";


 

   

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);

  if($sql_exe_login)
  {
       
    echo "Added Successfully!";
       header("refresh:1; url= ../dashboards/customer/packageInner2_dashboard.php");

  }
  else
  {
      echo "$sql_insert_login";
  } 

  mysqli_close($conn);
?>
