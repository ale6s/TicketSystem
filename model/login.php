<?php
session_start();
require('controller/db.php');


if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND  password = '$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    
    if (mysqli_num_rows($result) > 0 && $row["level"] == 'user') {
        $_SESSION['id']=$row['id'];
        header("Location: view/dashboard.php");
        
        //if statament for admin login
    } elseif (mysqli_num_rows($result) > 0 &&  $row["level"] == 'admin') {
        $_SESSION['id']=$row['id'];
        header("Location: view/dashboard-admin.php");
    } else {
        echo "<h6 class='text-danger'>Sorry, your credentials are not valid, Please try again.</h6>";
    }
}
?>