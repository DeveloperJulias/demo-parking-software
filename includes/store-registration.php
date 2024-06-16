<?php
include '../includes/connect.php';

if (isset($_POST['register'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $user_name = $_POST['username'];
    $create_password = $_POST['createpassword'];
    $confirm_password = $_POST['confirmpassword'];

    if ($create_password !== $confirm_password) {
        die('Passwords do not match');
    }

    $hash_password = password_hash($create_password, PASSWORD_BCRYPT);

    if (!$conn) {
        die("Connection Error: " . mysqli_connect_error());
    }

    $querystore = "INSERT INTO register (first_name, last_name, user_name, email, create_password) VALUES ('$first_name', '$last_name', '$user_name', '$email', '$hash_password')";

    $checkquery = mysqli_query($conn, $querystore);

    if ($checkquery) {
        header('Location: ../index.php');
    } else {
        echo 'Connection Failed';
    }
}
?>
