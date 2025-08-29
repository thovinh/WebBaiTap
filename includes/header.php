<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Bài Tập</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Gắn file CSS -->
    <style>
            .user-box {
    position: absolute;
    top: 10px;
    right: 20px;
    background: #fff; /* Nền trắng */
    color: #2563eb; /* Chữ màu xanh dương */
    padding: 8px 12px;
    border-radius: 20px; /* Bo tròn hơn */
    font-size: 14px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Thêm bóng đổ nhẹ */
    transition: all 0.3s ease;
    }

    .user-box:hover {
    transform: translateY(-2px); /* Nhấc nhẹ lên khi di chuột */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); /* Bóng đổ đậm hơn */
    }

    .user-box a {
    color: #2563eb; /* Đổi màu chữ cho liên kết */
    margin-left: 10px;
    text-decoration: none;
    font-weight: bold;
    }

    .user-box a:hover {
    color: #1d4ed8; /* Màu đậm hơn khi di chuột */
    }
    </style>
</head>
<body>

<div class="header">
    <div class="banner">
        <img src="images/banner.jpg" alt="Banner"> <!-- Đường dẫn hình ảnh -->
    </div>

    <div class="info">
        <p><b>Họ tên:</b> Võ Hồng Thịnh</p>
        <p><b>Khoa:</b> Công nghệ Thông tin</p>
        <p><b>Lớp:</b> CNTT</p>
        <p><b>Khóa:</b> K63</p>
    </div>

    <div class="search">
        <input type="text" placeholder="Tìm kiếm...">
        <button>Tìm</button>
    </div>
    <!-- Hiển thị user đang đăng nhập -->
    <div class="user-box">
        <?php if (isset($_SESSION['user'])): ?>
            👤 Xin chào, <b><?php echo $_SESSION['user']; ?></b>
            <a href="auth/logout.php">Đăng xuất</a>
        <?php else: ?>
            <a href="auth/auth.php">Đăng nhập / Đăng ký</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
