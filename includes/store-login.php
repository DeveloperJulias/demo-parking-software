<?php
session_start(); // Start the session

include '../includes/connect.php';

if (isset($_POST['login'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }

    // Insecure SQL query (vulnerable to SQL injection)
    $sql = "SELECT * FROM register WHERE user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if (password_verify($password, $row['create_password'])) {
            // Password is correct, store user information in session variables
            $_SESSION['user_name'] = $row['user_name'];
            header("Location: ../dashboard.php");
            exit();
        } else {
            header("Location: ../index.php?error=Incorrect username or password");
            exit();
        }
    } else {
        header("Location: ../index.php?error=Incorrect username or password");
        exit();
    }
}
?>
