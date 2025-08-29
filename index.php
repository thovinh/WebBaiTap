<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Bài Tập</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Gắn file CSS -->
</head>
<body>

    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <div class="content">
        <div class="sidebar">
            <ul>
                <li><a href="#" onclick="loadContent('bai/bai1.php')">Bài 1</a></li>
                <li><a href="#" onclick="loadContent('bai/bai2.php')">Bài 2</a></li>
                <li><a href="#" onclick="loadContent('bai/bai3.php')">Bài 3</a></li>
                <li><a href="#" onclick="loadContent('bai/bai4.php')">Bài 4</a></li>
                <li><a href="#" onclick="loadContent('bai/bai5.php')">Bài 5</a></li>
                <li><a href="#" onclick="loadContent('bai/bai6.php')">Bài 6</a></li>
                <li><a href="#" onclick="loadContent('bai/bai7.php')">Bài 7</a></li>
                <li><a href="#" onclick="loadContent('bai/bai8.php')">Bài 8</a></li>
                <li><a href="#" onclick="loadContent('bai/bai9.php')">Bài 9</a></li>
                <li><a href="#" onclick="loadContent('bai/bai10.php')">Bài 10</a></li>

            </ul>
        </div>

       <div class="main">
            <iframe id="contentFrame" src="https://freetuts.net/hoc-php" 
                    style="width:100%; height:80vh; border:none;">
            </iframe>
        </div>

    </div>

    <?php include("includes/footer.php"); ?>

    <script>
        function loadContent(url) {
            document.getElementById('contentFrame').src = url;
        }
    </script>

</body>
</html>
