<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-links a {
            margin-right: 10px;
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>


<h2>Danh sách sinh viên</h2>


<!-- Search bar -->
<form action="Student.list.php" method="POST">
    <input type="text" name="keyword" placeholder="Nhập từ khóa cần tìm">
    <input type="submit" value="Tìm">
    <input type="submit" name="reset" value="Tất cả">
</form>


<?php
session_start();
// Dữ liệu sinh viên được lưu trong mảng
if (!isset($_SESSION['student']) || empty($_SESSION['student'])) {
    $_SESSION['student'] = [
        ["id" => "2015478", "name" => "Nguyễn Thị Hồng Loan", "gender" => "Nữ", "hometown" => "Hiệp Hòa - Bắc Giang", "birth_year" => "1999", "major" => "Công nghệ thông tin"],
        ["id" => "2017501", "name" => "Vũ Giang Sơn", "gender" => "Nam", "hometown" => "Móng Cái - Quảng Ninh", "birth_year" => "1998", "major" => "Cơ điện tử"],
        ["id" => "2017300", "name" => "Bùi Thanh Lam", "gender" => "Nữ", "hometown" => "Tiền Hải - Thái Bình", "birth_year" => "2001", "major" => "Kế toán"],
        ["id" => "2018392", "name" => "Trần Minh Phúc", "gender" => "Nam", "hometown" => "Hà Đông - Hà Nội", "birth_year" => "2000", "major" => "Kỹ thuật phần mềm"],
        ["id" => "2016450", "name" => "Phạm Thị Hoa", "gender" => "Nữ", "hometown" => "Thạch Thất - Hà Nội", "birth_year" => "1999", "major" => "Quản trị kinh doanh"],
        ["id" => "2019210", "name" => "Lê Quang Huy", "gender" => "Nam", "hometown" => "Thanh Hóa", "birth_year" => "2002", "major" => "Kỹ thuật ô tô"],
        ["id" => "2017532", "name" => "Ngô Văn An", "gender" => "Nam", "hometown" => "Đông Anh - Hà Nội", "birth_year" => "1998", "major" => "Điện tử viễn thông"]
    ];
}


// Xử lý tìm kiếm
$students = $_SESSION['student']; // Lấy danh sách sinh viên từ session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['keyword']) && !empty($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        // Tìm kiếm theo năm sinh hoặc tên
        $students = array_filter($students, function($student) use ($keyword) {
            return $student['birth_year'] == $keyword; // So sánh trực tiếp
        });
    } elseif (isset($_POST['reset'])) {
        // Reset tìm kiếm, hiển thị tất cả sinh viên
        $students = $_SESSION['student'];
       
    }
   
}
?>


<!-- Hiển thị bảng sinh viên -->
<table>
    <tr>
        <th>Mã sinh viên</th>
        <th>Họ và tên</th>
        <th>Giới tính</th>
        <th>Quê quán</th>
        <th>Năm sinh</th>
        <th>Ngành học</th>
        <th>Tác vụ</th>
    </tr>
   
    <?php if (!empty($students)): ?>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= htmlspecialchars($student['id']); ?></td>
            <td><?= htmlspecialchars($student['name']); ?></td>
            <td><?= htmlspecialchars($student['gender']); ?></td>
            <td><?= htmlspecialchars($student['hometown']); ?></td>
            <td><?= htmlspecialchars($student['birth_year']); ?></td>
            <td><?= htmlspecialchars($student['major']); ?></td>
            <td class="action-links">
                <a href="edit.php?id=<?= urlencode($student['id']); ?>">Sửa</a>
                <a href="delete.php?id=<?= urlencode($student['id']); ?>" onclick="return confirm('Xóa sinh viên này?');">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">Không có sinh viên nào được tìm thấy.</td>
        </tr>
    <?php endif; ?>
</table>


<a href="add_student.php" class="add"><button>Thêm sinh viên mới</button></a>


</body>
</html>



