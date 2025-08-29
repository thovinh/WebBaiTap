<?php
session_start();
include("../db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username=? OR email=?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashedPassword);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user'] = $username;
            header("Location: ../index.php");
        } else {
            echo "❌ Sai mật khẩu. <a href='auth.php'>Thử lại</a>";
        }
    } else {
        echo "❌ Không tìm thấy tài khoản. <a href='auth.php'>Thử lại</a>";
    }
}
?>
