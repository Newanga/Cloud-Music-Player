<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("Asia/Colombo");

    $con = mysqli_connect("localhost", "root", "", "your cloud music player");

    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>