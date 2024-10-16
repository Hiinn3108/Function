<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Số Chẵn/Lẻ</title>
</head>
<body>
<h1>Nhập Số</h1>
<form action="" method="POST">
    <label for="so1">Số:</label>
    <input type="number" id="so1" name="so1" value="<?php echo isset($_POST['so1']) ? $_POST['so1'] : ''; ?>" required>
    <input type="submit" value="Kiểm tra">
</form>

<?php
// Kiểm tra nếu form đã được submit
error_reporting(0) ;
    $so1 = $_POST['so1'];
function check ($a){
    if ($a % 2 == 0) {
        echo "<h2>Số A là số chẵn.</h2>";
    } else {
        echo "<h2>Số A là số lẻ.</h2>";
    }
}

 check($so1);
    

?>
</body>
</html>
