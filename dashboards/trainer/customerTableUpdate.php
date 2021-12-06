<?php
require_once('connection.php');
session_start();

// function test_input($data)
//   {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
//   if($_SERVER["REQUEST_METHOD"]=="POST")
//   {

//     $password=test_input($_POST["Password"]);
//   }

$user=mysqli_real_escape_string($conn,$_GET['user']);

$sql_fetch="SELECT * FROM tbl_login WHERE Username='$username'";
$sql_fetch_details=mysqli_query($conn,$sql_fetch);

$log=mysqli_fetch_assoc($sql_fetch_details);

if($_SESSION['User_type']=="admin")
{
    if($log['Status']=='Active')
    {
        $del_login="UPDATE tbl_login SET Status='Inactive' WHERE Username='$username'";
        $del_login_exe=mysqli_query($conn,$del_login);
        header('Location: customer_dashboard.php');
        $_SESSION['Status']="Inactive";
    }
    else
    {
        $del_login="UPDATE tbl_login SET Status='Active' WHERE Username='$username'";
        $del_login_exe=mysqli_query($conn,$del_login);
        header('Location: customer_dashboard.php');
        $_SESSION['Status']="Active";
    }
}

else if($_SESSION['User_type']=="customer")
{
    if($password==$log['Password'])
    {
        $del_login="UPDATE tbl_login SET Status='Inactive' WHERE Username='$username'";
        $del_login_exe=mysqli_query($conn,$del_login);
         header('Location: customer_dashboard.php');
        $_SESSION['Status']="Inactive";
    }
    else
    {
        header('Location: Personal.php');
        $_SESSION['Status']="Active";
    }
}
mysqli_close($conn);
?>
