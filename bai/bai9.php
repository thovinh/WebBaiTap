
<!DOCTYPE html>
<html>
<head>
    <title>Bài 9 - Đổi giây sang giờ:phút:giây</title>
</head>
<body>
    <form method="post">
        Nhập số giây: <input type="number" name="seconds" required>
        <input type="submit" value="Chuyển đổi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $seconds = intval($_POST["seconds"]);

        // Tính giờ, phút, giây
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $secs = $seconds % 60;

        // Định dạng về 2 chữ số
        $result = sprintf("%02d:%02d:%02d", $hours, $minutes, $secs);

        echo "<h3>Kết quả: $result</h3>";
    }
    ?>
</body>
</html>
