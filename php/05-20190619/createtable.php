<?php
    include 'connectdb.php';
    $sql = "CREATE TABLE users(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    email varchar(100),
    password varchar(50),
    unique (email)
)";

if(mysqli_query($conn,$sql)){
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

?>