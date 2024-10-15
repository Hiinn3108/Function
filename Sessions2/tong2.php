<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Hai Số</title>
</head>
<body>
<h1>Nhập Hai Số</h1>
    <form action="" method="POST">
        <label for="so1">Số 1:</label>
        <input type="number" id="so1" name="so1" value="<?php echo isset($_POST['so1']) ? $_POST['so1'] : ''; ?>" required>
        <br><br>

        <label for="so2">Số 2:</label>
        <input type="number" id="so2" name="so2" value="<?php echo isset($_POST['so2']) ? $_POST['so2'] : ''; ?>" required>
        <br><br>

        <input type="submit" value="Tính Tổng">
    </form>

    <?php
    // Định nghĩa hàm tính tổng với 2 tham số

    error_reporting(0) ;

    function tinhTong($so1, $so2) {
        return $so1 + $so2;
    }
        // Lấy giá trị từ form
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];

        // Gọi hàm tinhTong() để tính tổng
        $tong = tinhTong($so1, $so2);

        // Hiển thị kết quả
        echo "<h2>Tổng của $so1 và $so2 là: $tong</h2>";
    
    ?>
</body>
</html>
