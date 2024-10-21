<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên mới</title>
    
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Đảm bảo chiều cao body là 100% viewport */
            margin: 0;
            padding: 0;
            background-color: #E6E6FA; /* Màu nền */
        }

        .container {
            background-color: #F5F5DC;
            text-align: center;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
        }
    </style>
</head>
<body>
<div class="container">
    <form action="add_student.php" method="POST">
        Mã sinh viên: <input type="text" name="student_id" required><br><br>
        Họ và tên: <input type="text" name="name" required><br><br>
        Giới tính: <input type="text" name="gender" required><br><br>
        Quê quán: <input type="text" name="hometown" required><br><br>
        Năm sinh: <input type="number" name="birth_year" required><br><br>
        Ngành học: <input type="text" name="major" required><br><br>
        <input type="submit" value="Thêm sinh viên">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $hometown = $_POST['hometown'];
    $birth_year = $_POST['birth_year'];
    $major = $_POST['major'];

    // Lưu thông tin sinh viên mới vào session
    if (!isset($_SESSION['student'])) {
        $_SESSION['student'] = [];
    }

    // Thêm sinh viên mới vào mảng session
    $_SESSION['student'][] = [
        "id" => $student_id,
        "name" => $name,
        "gender" => $gender,
        "hometown" => $hometown,
        "birth_year" => $birth_year,
        "major" => $major
    ];

    // Chuyển về trang danh sách sau khi thêm sinh viên
    header('Location: Student.list.php');
    exit();
}
?>
</body>
</html>
