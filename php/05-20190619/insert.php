<?php 
    include 'connectdb.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password=$_POST["password"];
    $sql = "INSERT INTO users(name,email,password) values ('$name','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo " <br> Insert successfully";
        header ('Refresh:5; URL=showtable.php');
    } else {
        echo "Error Insert" . mysqli_error($conn);
    }
?>