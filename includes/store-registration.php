<?php
include '../includes/connect.php';
if(isset($_POST['register'])){
    $user_name = $_POST['user_name'];
    $email_addres=$_POST['email_address'];
    $password = $_POST['password'];
    $confirm_password=$_POST['confirm_password'];
   
    if(!$conn){
        die("connectionERROR" .mysqli_connect_error());
    }

$mysql = "INSERT INTO login (user_name,email,password,confirm_password) VALUES
('$user_name','$email_address','$password','$confirm_password')";


$result= mysqli_query($conn,$mysql);
if($result){
    header("Location:../dashboard.php");
}else{
    echo "failed";
}
}
