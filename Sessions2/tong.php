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
        <input type="number" id="so1" name="so1" required>
        <br><br>

        <label for="so2">Số 2:</label>
        <input type="number" id="so2" name="so2" required>
        <br><br>

        <input type="submit" value="Tính Tổng">
    </form>

    <?php
    // Hàm tính tổng không có tham số
    function tinhTong() {
        // Lấy giá trị từ $_POST
        $so1 = $_POST['so1'];  // Số thứ nhất
        $so2 = $_POST['so2'];  // Số thứ hai
        
        return $so1 + $so2;  // Trả về tổng của hai số
    }

    // Kiểm tra nếu có dữ liệu gửi đến
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tính tổng bằng cách gọi hàm
        $tong = tinhTong();

        // Hiển thị kết quả tính tổng
        echo "<h2>Tổng của hai số là: $tong</h2>";
    }
    ?>
</body>
</html>
