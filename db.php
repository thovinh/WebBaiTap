<?php
$servername = "localhost"; // hoặc 127.0.0.1
$username   = "root";      // user MySQL của bạn
$password   = "";          // mật khẩu MySQL (nếu có thì điền)
$dbname     = "web_form";

// Kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
