<?php 
    include 'connectdb.php';
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select users.email,users.password from users where users.email='$email' and users.password='$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count==1){

        echo "<br> Login Sucess";
        header ('Refresh:5; URL=showtable.php');
    }
    else{
        echo "<br> Login Failed";
        header ('Refresh:5; URL=loginform.php');
    }
     
?>