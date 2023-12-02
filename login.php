<?php

session_start();

require 'functions.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'" );

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){

            $_SESSION["login"] = true;

            echo "<script>alert('anda berhasil masuk'); window.location.href='homepage.php';</script>";
        } else{
            echo "<script>alert('username atau password salah!'); window.location.href='register.php';</script>";
        }
    }

}

?>