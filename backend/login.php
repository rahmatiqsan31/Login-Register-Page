<?php
include 'config.php';

$email    = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
if (mysqli_num_rows($query) > 0) {
    $user = mysqli_fetch_assoc($query);
    echo json_encode(["status" => true, "message" => "Login berhasil", "user" => $user]);
} else {
    echo json_encode(["status" => false, "message" => "Login gagal"]);
}
?>
