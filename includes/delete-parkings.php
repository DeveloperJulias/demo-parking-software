<?php

include '../includes/connect.php';

// ...........delete......
if (isset($_REQUEST['delete'])) {
    
    $fullname = $_POST['fullname'];
    $vehiclebrand = $_POST['vehiclebrand'];
    $number_plate = $_POST['number_plate'];
    $parking_lot = $_POST['parking_lot'];
    $color = $_POST['color'];
    $parking_lot = $_POST['parking_lot'];
    $parking_space = $_POST['parking_space'];
    $duration = $_POST['duration'];
    $service_provider = $_POST['service_provider'];

    $current_timestamp = date('Y-m-d H:i:s');

    $deleteparking = $_POST['deletefullname'];

    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }

    $sql = "UPDATE parking_details SET deleted_at ='$current_timestamp' WHERE id='$deleteparking'";

    $outcome = mysqli_query($conn, $sql);
    if ($outcome) {
        // echo "now okay";
        header('Location:../staffs.php');
    } else {
        echo "failed";
    }
}
