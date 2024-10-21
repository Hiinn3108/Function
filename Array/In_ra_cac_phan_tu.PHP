<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $mobile = array("HTC", "Nokia", "SungSung", "LG", "Blackberry");

    // In ra 3 phần tử đầu tiên
    for ($i = 0; $i < 5; $i++) {
        echo "Phần tử thứ " . ($i + 1) . ": " . $mobile[$i] . "<br>";
    }
?>
</body>
</html>
