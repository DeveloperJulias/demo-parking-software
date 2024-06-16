<?php
date_default_timezone_set('Africa/Kampala');

$conn = mysqli_connect('localhost', 'root', '', 'safe_park_software');
if(!$conn){
    echo mysqli_error($conn);
}