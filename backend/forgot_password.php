<?php
include 'config.php';

$email = $_POST['email'];

$check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
if (mysqli_num_rows($check) > 0) {
    echo json_encode([
        "status" => true,
        "message" => "Permintaan reset telah dikirim ke email (simulasi)."
    ]);
} else {
    echo json_encode([
        "status" => false,
        "message" => "Email tidak ditemukan."
    ]);
}
?>
