<?php
require_once('connection.php');
session_start();

$category_name = $usertype ="";

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
    $category_name=test_input($_POST["category_name"]);
    $usertype=$_SESSION['User_type'];
    debug_to_console($usertype);

  }

  $sql_insert_login="INSERT INTO tbl_category (Category_name) VALUES ('$category_name')";
 
/* 
  $sql_insert_login="INSERT INTO tbl_feedback (Username, User_type,Rating, details) VALUES ('a','a','1','abs')";  */

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);

  if($sql_exe_login)
  {
       $_SESSION['success']="Added Category Successfully!";
       header('Location: ../dashboards/admin/category_dashboard.php');
      //  header("url= ../dashboards/admin/category_dashboard.php");
  }
  else
  {
    $_SESSION['error']="Added Category Successfully!";
    header('Location: ../dashboards/admin/category_dashboard.php');
  } 

  mysqli_close($conn);
?>
