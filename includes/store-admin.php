
<!-- <?php
include '../includes/connect.php';
if (isset($_POST['login'])) {

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }

    $sql = "INSERT INTO  login( user_name , password ) 
            VALUES ( '$user_name ','$password')";
    $outcome = mysqli_query($conn, $sql);
    if ($outcome) {

        header("Location:../dashboard.php");
    } else {
        echo "failed";
    
    }
}

