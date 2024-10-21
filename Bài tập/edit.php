<?php
session_start();

// Kiểm tra xem ID sinh viên đã được gửi không
if (isset($_GET['id'])) {
    $student_id = $_GET['id'];
    
    // Tìm kiếm sinh viên trong session
    $student = null;
    foreach ($_SESSION['students'] as &$s) {
        if ($s['id'] == $student_id) {
            $student = $s;
            break;
        }
    }

    // Nếu không tìm thấy sinh viên, chuyển hướng về trang danh sách
    if (!$student) {
        header('Location: Student.list.php'); // Thay đổi thành file danh sách sinh viên của bạn
        exit();
    }

    // Xử lý sửa thông tin sinh viên
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $student['name'] = $_POST['name'];
        $student['gender'] = $_POST['gender'];
        $student['hometown'] = $_POST['hometown'];
        $student['birth_year'] = $_POST['birth_year'];
        $student['major'] = $_POST['major'];

        // Cập nhật lại thông tin trong session
        foreach ($_SESSION['students'] as &$s) {
            if ($s['id'] == $student_id) {
                $s = $student;
                break;
            }
        }

        // Chuyển hướng về trang danh sách
        header('Location: Student.list.php'); // Thay đổi thành file danh sách sinh viên của bạn
        exit();
    }
} else {
    header('Location: Student.list.php'); // Nếu không có ID thì chuyển hướng về trang danh sách
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sinh viên</title>
</head>
<body>

<h2>Sửa thông tin sinh viên</h2>
<form action="" method="POST">
    <input type="hidden" name="student_id" value="<?= htmlspecialchars($student['id']); ?>">
    
    <label for="name">Họ và tên:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($student['name']); ?>" required><br><br>
    
    <label for="gender">Giới tính:</label>
    <input type="text" name="gender" value="<?= htmlspecialchars($student['gender']); ?>" required><br><br>
    
    <label for="hometown">Quê quán:</label>
    <input type="text" name="hometown" value="<?= htmlspecialchars($student['hometown']); ?>" required><br><br>
    
    <label for="birth_year">Năm sinh:</label>
    <input type="number" name="birth_year" value="<?= htmlspecialchars($student['birth_year']); ?>" required><br><br>
    
    <label for="major">Ngành học:</label>
    <input type="text" name="major" value="<?= htmlspecialchars($student['major']); ?>" required><br><br>
    
    <input type="submit" value="Cập nhật sinh viên">
</form>

<a href="Student.list.php">Quay lại danh sách sinh viên</a>

</body>
</html>
