<?php
include 'config.php';

$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
if (mysqli_num_rows($check) > 0) {
    echo json_encode(["status" => false, "message" => "Email sudah digunakan"]);
} else {
    $insert = mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')");
    if ($insert) {
        echo json_encode(["status" => true, "message" => "Register berhasil"]);
    } else {
        echo json_encode(["status" => false, "message" => "Gagal register"]);
    }
}
?>
