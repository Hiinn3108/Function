<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .square{
        height:20px;
        width:20px;
        float:left;
        border:1px solid gray;
        margin-left:5px;
        margin-bottom:5px;
    }
</style>
</head>
<body>
<?php
// Biến để lưu tổng
$total = 0;

// Vòng lặp for để tính tổng các số từ 0 đến 5
for ($i = 0; $i < 6; $i++) {
    $total += $i; // Cộng giá trị của $i vào $total
}

// Hiển thị kết quả
echo "Tổng các số từ 0 đến 5 là: " . $total;
?>
</body>
</html>