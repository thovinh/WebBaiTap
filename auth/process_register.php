<?php
session_start();
include("../db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $fullname = trim($_POST['fullname']);
    $company  = trim($_POST['company']);

    // Kiểm tra email tồn tại chưa
    $check = $conn->prepare("SELECT id FROM users WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "❌ Email đã được đăng ký. <a href='auth.php'>Thử lại</a>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, fullname, company) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $email, $hashedPassword, $fullname, $company);

        if ($stmt->execute()) {
            $_SESSION['user'] = $username;
            header("Location: ../index.php");
        } else {
            echo "❌ Lỗi đăng ký: " . $conn->error;
        }
    }
}
?>
