<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tim_kiem.php" method="post">
        <label for="search">Search</label>
        <input type="text" id="search" name="search">
        <input type="submit" value="OK">
    </form>  
<?php
  function search($value, $array) {
    return in_array($value, $array) ? "Tìm thấy $value trong mảng." : "Không tìm thấy $value.";
}
 
 $array= array (
    "Ram",
    "aaksash",
    "saram",
    "saran"
 );
 $value = $_POST['search'];
 echo (search($value,$array));

?>
</body>
</html>