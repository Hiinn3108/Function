<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Thêm sản phẩm mới </h2>
<form action="thêm_san_pham.php" method="post">
    <label for="name">Tên sản phẩm </label>
    <input type="text" id="name" name="name" required>

    <label for="Gia">Giá sản phẩm</label>
    <input type="number" id="Gia" name="Gia" required>
    <input type="submit" value="Thêm sản phẩm">
</form>



<?php
session_start(); // Bắt đầu session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin sản phẩm từ form
    $name = $_POST["name"]; 
    $gia = $_POST["Gia"];   

    // Khởi tạo mảng sản phẩm nếu chưa có
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array();
    }

    // Thêm sản phẩm vào danh sách
    $_SESSION['products'][] = array('name' => $name, 'gia' => $gia);
}

// Hiển thị danh sách sản phẩm
if (isset($_SESSION['products'])) {
    echo "<h2>Danh sách sản phẩm</h2>";
    foreach ($_SESSION['products'] as $product) {
        echo "Tên: " . htmlspecialchars($product['name']) . " - Giá: " . htmlspecialchars($product['gia']) . "<br>";
    }
} else {
    echo "Chưa có sản phẩm nào.";
}
?>

</body>
</html>
