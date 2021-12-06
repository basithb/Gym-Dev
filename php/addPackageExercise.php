<?php
require_once('connection.php');
session_start();

$package_exercise =$exercise_id = $usertype ="";


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
    $package_exercise=test_input($_POST["package_exercise"]);
    $package_master_id=test_input($_POST["package_master_id"]);
    // $exercise_id=test_input($_POST["exercise_id"]);
    // $usertype=$_SESSION['User_type'];
    // debug_to_console($usertype);

  }

echo $package_master_id;

 $sql_insert="INSERT INTO tbl_package_child (Exercise_id, Package_master_id) VALUES ('$package_exercise', '$package_master_id')";


 

   

  

  if(mysqli_query($conn,$sql_insert))
  {    $sql_fetch = "SELECT * FROM tbl_package_master";
                        
      
    $result=mysqli_query($conn,$sql_fetch);

    while($rows=$result->fetch_assoc()) { 
       echo "Added Successfully!";
       header("refresh:1; url= ../dashboards/admin/packageInner_dashboard.php?package_id=".$package_master_id);
    }

  }
  else
  {
      echo "$sql_insert";
  } 

  mysqli_close($conn);
?>
