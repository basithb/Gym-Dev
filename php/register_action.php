<?php
require_once('connection.php');
session_start();



 $usertype=$firstname= $lastname= $phone= $address= $pincode= $email= $password= "";
 
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  { 
    $firstname=test_input($_POST["first_name"]);
    $lastname=test_input($_POST["last_name"]);
    $address=test_input($_POST["address"]);
    $pincode=test_input($_POST["pin_code"]);
    $phone=test_input($_POST["phone_number"]);
    $email=test_input($_POST["email"]);
    $password=test_input($_POST["password"]);
    
   
    $usertype=test_input($_POST["usertype"]);
  }

  if($usertype=="Customer")
  {
        $sql_insert_login="INSERT INTO tbl_login (Username, Password , User_Type, Status) VALUES ('$email', '$password', 'customer', 'Active')";

         $sql_insert_customer="INSERT INTO tbl_customer (Username,Customer_firstname,Customer_lastname,Customer_phonenumber,Customer_address,Customer_pin) VALUES ('$email', '$firstname', '$lastname','$phone','$address','$pincode')";

        $sql_get_login="SELECT Username FROM tbl_login WHERE Username='$email'";

        if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
  {
    echo "User already exists! ";
    exit;
  }


  else
  {
    if(mysqli_query($conn,$sql_insert_login))
    {

        if(mysqli_query($conn,$sql_insert_customer))
        {
          
          echo "Registered Successfully! ";
          header("Location:../index.php");
            exit;
        }

        else
        {
            echo "mysqli_error($conn)";
        }
    }
  }



  }

//   else if($usertype=="Trainer"){
//     $sql_insert_login="INSERT INTO tbl_login (Username, Password , User_Type) VALUES ('$email', '$password', 'trainer')";

//     $sql_insert_customer="INSERT INTO tbl_trainer (Username,Trainer_firstname,Trainer_lastname,Trainer_phonenumber,Trainer_address,Trainer_pin) VALUES ('$email', '$firstname', '$lastname','$phone','$address','$pincode')";

//    $sql_get_login="SELECT Username FROM tbl_login WHERE Username='$email'";

//    if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
// {
// echo "User already exists! ";
// exit;
// }


// else
// {
// if(mysqli_query($conn,$sql_insert_login))
// {

//    if(mysqli_query($conn,$sql_insert_customer))
//    {
//        echo "Registered Successfully! ";
//        exit;
//    }

//    else
//    {
//        echo "mysqli_error($conn)";
//    }
// }
// }




//   }

  mysqli_close($conn)
?>
