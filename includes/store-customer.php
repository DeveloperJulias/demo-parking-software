
<?php

include '../includes/connect.php';
if (isset($_POST['save'])) {

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }

    $sql = "INSERT INTO customers ( fullname, phone, email ) 
    VALUES ( '$fullname ','$phone ','$email ')";

    $outcome = mysqli_query($conn, $sql);
    if ($outcome) {

        header('Location:../customer.php');
        
    } else {
        echo "failed";
    }
}
