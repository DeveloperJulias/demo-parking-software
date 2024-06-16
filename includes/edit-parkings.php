
<?php
include '../includes/connect.php';

if (isset($_POST['edit'])) {
    $fullname = $_POST['fullname'];
    $vehiclebrand = $_POST['vehiclebrand'];
    $number_plate = $_POST['number_plate'];
    $parking_lot = $_POST['parking_lot'];
    $color = $_POST['color'];
    $parking_lot = $_POST['parking_lot'];
    $parking_space = $_POST['parking_space'];
    $duration = $_POST['duration'];
    $service_provider = $_POST['service_provider'];


    // var_dump($customer, $email, $phone, $vname, $vplate, $vtype, $vcolor, $gender);
    if (!$conn) {
        die("connectionERROR:"  . mysqli_connect_error());
    }
    $my_edit = $_POST['customer'];

    $edit = "UPDATE parking_details SET customer_id='$fullname',vehicle_plate_number='$number_plate',
    vehicle_name='$vname', vehicle_color=' $color ',parking_lot='$parking_lot', parking_space='$parking_space', duration='$duration ', 
    parking_attendant='$service_provider' WHERE id='$my_edit'";
    

    $editresult = mysqli_query($conn, $edit);

    $result= mysqli_query($conn,"$customer");
        if (!$result) {
    
echo "success";
    header('Location:../customer.php');
} else {
    echo "failed";
}






}



