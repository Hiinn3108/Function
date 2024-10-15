<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // $i = 1;
    // while($i < 6){
    //     echo "<p>" . $i . "</p>";
    //     $i++;
    // }



    $i = 1; // Khởi tạo biến $i
    $total_c = 0; // Tổng số chẵn
    $total_l = 0; // Tổng số lẻ

    // Vòng lặp while để tính tổng
    while ($i < 10) {
        echo "<p>" . $i . "</p>"; // Hiển thị giá trị của $i

        // Kiểm tra số chẵn hay số lẻ
        if ($i % 2 == 0) {
            $total_c += $i; // Cộng vào tổng số chẵn
        } else {
            $total_l += $i; // Cộng vào tổng số lẻ
        }

        $i++; // Tăng $i lên 1
    }

    // Hiển thị kết quả
    echo "<p>Tổng số chẵn là: " . $total_c . "</p>";
    echo "<p>Tổng số lẻ là: " . $total_l . "</p>";
?>
</body>
</html>

