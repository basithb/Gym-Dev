<?php
require_once('connection.php');
session_start();

$slot_time_start= $slot_time_end = $usertype ="";

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
    $slot_time_start=test_input($_POST["slot_time_start"]);
    $slot_time_end=test_input($_POST["slot_time_end"]);
    $usertype=$_SESSION['User_type'];
    debug_to_console($usertype);

  }

  $sql_insert_login="INSERT INTO tbl_slot (Slot_time_start, Slot_time_end, Slot_status) VALUES ('$slot_time_start', '$slot_time_end', 'Active')";
 
/* 
  $sql_insert_login="INSERT INTO tbl_feedback (Username, User_type,Rating, details) VALUES ('a','a','1','abs')";  */

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);

  if($sql_exe_login)
  {
       echo "Added Successfully!";
       header("refresh:1; url= ../dashboards/admin/slot_dashboard.php");

  }
  else
  {
      echo "$sql_insert_login";
  } 

  mysqli_close($conn);
?>
