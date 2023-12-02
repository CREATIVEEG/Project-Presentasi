<?php

$conn = mysqli_connect("localhost","root","root","kj_frozen");

function registrasi($data){
    global $conn;

    $username = trim(strtolower(stripslashes($data['username'])));
    $email = trim(strtolower(stripslashes($data['email'])));
    $password = trim(mysqli_real_escape_string($conn, $data['password']));

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah terdaftar!'); window.location.href='register.html';</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES('','$username','$email','$password')");

    return mysqli_affected_rows($conn);

}
?>