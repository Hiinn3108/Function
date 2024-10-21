<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Mảng Với Màu Đỏ và Cỡ Chữ 30px</title>
</head>
<body>
<?php
    $mobile = array("HTC", "Nokia", "Samsung");

    // Duyệt qua các phần tử bằng vòng lặp for
    for ($i = 0; $i < count($mobile); $i++) {
        echo "<p style='color: red; font-size: 30px;'>" . $mobile[$i] . "</p>";
    }
?>
</body>
</html>
