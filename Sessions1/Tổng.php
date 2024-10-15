<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Số Chẵn và Số Lẻ</title>
</head>
<body>
<?php
    // Biến để lưu tổng số chẵn và số lẻ
    $total_c = 0; // Tổng số chẵn
    $total_l = 0; // Tổng số lẻ

    // Vòng lặp for để tính tổng các số từ 0 đến 5
    for ($i = 0; $i < 6; $i++) {
        if ($i % 2 == 0) {
            // Nếu số là chẵn
            $total_c += $i; // Cộng giá trị của số chẵn vào $total_c
        } else {
            // Nếu số là lẻ
            $total_l += $i; // Cộng giá trị của số lẻ vào $total_l
        }
    }

    // Hiển thị kết quả
    echo "Tổng số chẵn là: " . $total_c . "<br>";
    echo "Tổng số lẻ là: " . $total_l;
?>

</body>
</html>
