<?php
require_once('connection.php');
session_start();



$card_name =$card_number = $card_cvv = $expiry_date = $usertype ="";


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
    $card_name=test_input($_POST["card_name"]);
    $card_number=test_input($_POST["card_number"]);
    $card_cvv=test_input($_POST["card_cvv"]);
    $expiry_date=test_input($_POST["expiry_date"]);
    $usertype=$_SESSION['User_type'];
    debug_to_console($usertype);

  }

  $currentUser=$_SESSION['cust_user'];

  $query = "SELECT Customer_id FROM tbl_customer WHERE Username='$currentUser'" ;
      
  $result=mysqli_query($conn,$query);


  $row=mysqli_fetch_assoc($result);

  $customerid=$row['Customer_id'];

  $currentDate=date("Y-m-d");

  

 $sql_insert_login="INSERT INTO tbl_card (Card_number,Card_name,Expiry_date,Customer_id) VALUES ('$card_number','$card_name','$expiry_date','$customerid')";


 

   

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

