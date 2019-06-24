<?php
    include 'connectdb.php';

    $sql = "CREATE DATABASE ap_18_4";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    
?>