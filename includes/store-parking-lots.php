
<?php

include '../includes/connect.php';
if (isset($_POST['save'])) {

    $parkinglot = $_POST['parkinglot'];
    $maxparkingspace = $_POST['capacity'];


    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }

    $sql = "INSERT INTO parking_lots ( parking_lot, max_parking_space )  VALUES ( '$parkinglot ','$maxparkingspace ')";
    $outcome = mysqli_query($conn, $sql);

    if ($outcome) {

        header('Location:../parking-lots.php');
    } else {
        echo "failed";
    }
}
