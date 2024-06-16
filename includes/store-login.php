<?php
session_start(); // Start the session

include '../includes/connect.php';

if (isset($_POST['login'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }

    // Prepare and bind the SQL query with parameters
    $sql = "SELECT * FROM register WHERE user_name = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if (password_verify($password, $row['create_password'])) {
            // Password is correct, store user information in session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            header("Location:../dashboard.php");
            exit();
        } else {
            echo "<span style='color:white ;background-color:orange;padding:1.5em;border-radius:10px;'>Incorrect username or password</span>";
        
        }
    } else {
        echo "Incorrect username or password";
    }
}
?>
