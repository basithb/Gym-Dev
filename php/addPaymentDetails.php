<?php
require_once('connection.php');
session_start();

$bookid = $_GET['booking_id'];

$card_id = "";


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
    $card_id=test_input($_POST["card_id"]);
  }

 

  $currentDate=date("Y-m-d");

  

 $sql_insert_login="INSERT INTO tbl_payment (Booking_id, Card_id, Payment_date) VALUES ('$bookid','$card_id','$currentDate')";


 

   

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);

  if($sql_exe_login)
  {
       
    echo "Added Successfully!";
      //  header("refresh:1; url= ../dashboards/customer/packageInner_dashboard.php"."?package_id=".$_POST['package_id']."&view=personalinfo"); 
       header("refresh:1; url= ../dashboards/customer/booking_dashboard.php");


  }
  else
  {
     echo mysqli_error($conn);
  } 

  mysqli_close($conn);
?>

