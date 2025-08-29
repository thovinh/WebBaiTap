<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1 - Tính tổng số nguyên tố</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-align: center;
        }
        h2 {
            color: #007BFF;
        }
        .result {
            font-size: 20px;
            margin-top: 15px;
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bài 1: Tính tổng số nguyên tố từ 1 đến 100</h2>
        <?php
        // Hàm kiểm tra số nguyên tố
        function isPrime($n) {
            if ($n < 2) return false;
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) return false;
            }
            return true;
        }

        // Tính tổng các số nguyên tố từ 1 đến 100
        $sum = 0;
        $primes = [];
        for ($i = 1; $i <= 100; $i++) {
            if (isPrime($i)) {
                $sum += $i;
                $primes[] = $i;
            }
        }

        echo "<p>Các số nguyên tố từ 1 đến 100 là:</p>";
        echo "<p>" . implode(", ", $primes) . "</p>";
        echo "<div class='result'>Tổng = <strong>$sum</strong></div>";
        ?>
    </div>
</body>
</html>
