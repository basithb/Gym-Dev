<?php
require_once('connection.php');
session_start();

$exercise_name = $category_name =$category_id = $usertype ="";


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
    $package_name=test_input($_POST["package_name"]);
    $package_description=test_input($_POST["package_description"]);
    $package_img=addslashes(file_get_contents($_FILES["package_img"]["tmp_name"]));
    // $package_trainer_id=test_input($_POST["package_trainer_id"]);
    $package_trainer=test_input($_POST["package_trainer"]);
    $package_price=test_input($_POST["package_price"]);
    $usertype=$_SESSION['User_type'];
    debug_to_console($usertype);

  }


 $sql_insert_login="INSERT INTO tbl_package_master (Package_name , Package_description, Package_img, Trainer_id, Package_price) VALUES ('$package_name', '$package_description', '$package_img' , '$package_trainer', '$package_price')";
 
 

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);


  // If user type is admin then 
  // if($_SESSION['User_type']=="admin")
  if($sql_exe_login)
  {
       echo "Added Successfully!";
       header("refresh:1; url= ../dashboards/admin/package_dashboard.php");

  }
  else
  {
      echo "$sql_insert_login";
  } 

  mysqli_close($conn);
?>
