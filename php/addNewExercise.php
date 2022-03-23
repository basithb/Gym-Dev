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
    $exercise_name=test_input($_POST["exercise_name"]);
    $category_id=test_input($_POST["category_id"]);
    // $usertype=$_SESSION['User_type'];
    // debug_to_console($usertype);

  }



 $sql_insert_login="INSERT INTO tbl_exercise (Exercise_name, Category_id, Exercise_status) VALUES ('$exercise_name','$category_id', 'Active')";


 

   

  $sql_exe_login=mysqli_query($conn,$sql_insert_login);

  if($sql_exe_login)
  {
       echo "Added Successfully!";
       if($_SESSION['User_type']=="admin"){
        header("refresh:1; url= ../dashboards/admin/exercise_dashboard.php");
       }
       
       else if($_SESSION['User_type']=="trainer"){
        header("refresh:1; url= ../dashboards/trainer/exercise_dashboard.php");
       }

  }
  else
  {
      echo "$sql_insert_login";
  } 

  mysqli_close($conn);
?>
