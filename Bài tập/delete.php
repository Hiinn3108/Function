<?php
session_start();

// Kiểm tra nếu có ID sinh viên được gửi
if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Kiểm tra nếu có sinh viên trong session
    if (isset($_SESSION['student'])) {
        // Tìm và xóa sinh viên trong mảng session
        foreach ($_SESSION['student'] as $key => $student) {
            if ($student['id'] == $student_id) {
                unset($_SESSION['student'][$key]);
                break; // Thoát khỏi vòng lặp sau khi tìm thấy và xóa
            }
        }
    }
}

// Chuyển hướng về trang danh sách sinh viên
header('Location: Student.list.php');
exit();
?>
