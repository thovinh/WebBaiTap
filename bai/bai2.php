<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2 - Tính Tổng Chuỗi</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Gắn file CSS -->
</head>
<body>
    <div class="container">
        <h1>Bài 2 - Tính Tổng Chuỗi</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="n">Nhập giá trị n:</label>
                <input type="number" id="n" name="n" required>
            </div>
            <button type="submit">Tính Tổng</button>
        </form>

        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $n = isset($_POST['n']) ? (int)$_POST['n'] : 0;

                // a. Tính tổng chuỗi T = 1/2 + 2/3 + 3/4 + … n/n+1
                $T1 = 0;
                $i = 1;

                while ($i <= $n) {
                    $T1 += $i / ($i + 1);
                    $i++;
                }

                echo "<p>Tổng chuỗi T1 = 1/2 + 2/3 + 3/4 + ... + n/(n+1) là: " . $T1 . "</p>";

                // b. Tính tổng chuỗi T = 1/2 + 1/4 + 1/6 + … 1/n+2 với điều kiện e = 1/n+2 > 0.0001
                $T2 = 0;
                $n2 = 0;

                while (true) {
                    $e = 1 / ($n2 + 2);
                    if ($e <= 0.0001) {
                        break;
                    }
                    $T2 += $e;
                    $n2 += 2;
                }

                echo "<p>Tổng chuỗi T2 = 1/2 + 1/4 + 1/6 + ... với điều kiện e > 0.0001 là: " . $T2 . "</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>