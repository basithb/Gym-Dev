<?php
require_once('connection.php');
session_start();

function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  // if($_SERVER["REQUEST_METHOD"]=="POST")
  // {

  //   $user=$_GET["user"];
  // }

$exerciseid=mysqli_real_escape_string($conn,$_GET['exercise']);

$sql_fetch="SELECT * FROM tbl_exercise WHERE Exercise_id='$exerciseid'";
$sql_fetch_details=mysqli_query($conn,$sql_fetch);

$log=mysqli_fetch_assoc($sql_fetch_details);
if($_SESSION['User_type']=="admin")
{
  // echo "i to a";
    if($log['Exercise_status']=='Active')
    {
        $del_login="UPDATE tbl_exercise SET Exercise_status='Inactive' WHERE Exercise_id='$exerciseid'";
        $del_login_exe=mysqli_query($conn,$del_login);
        header('Location: exercise_dashboard.php');
        $_SESSION['status']="Inactive";
    }
    else if ($log['Exercise_status']=='Inactive')
    {
      echo "i to a";
        $del_login="UPDATE tbl_exercise SET Exercise_status='Active' WHERE Exercise_id='$exerciseid'";
        $del_login_exe=mysqli_query($conn,$del_login);
        header('Location: exercise_dashboard.php');
        $_SESSION['status']="Active";
    }
}

// else if($_SESSION['User_type']=="customer")
// {
//     if($password==$log['Password'])
//     {
//         $del_login="UPDATE tbl_login SET Status='Inactive' WHERE Username='$user'";
//         $del_login_exe=mysqli_query($conn,$del_login);
//          header('Location: customer_dashboard.php');
//         $_SESSION['status']="Delete";
//     }
//     else
//     {
//         header('Location: customer_dashboard.php');
//         $_SESSION['status']="Nomatch";
//     }
// }
mysqli_close($conn);
?>