<?php
// Khai báo mảng đa chiều $school
$school = array(
    'students' => array(
        array(
            'ma' => 1238,
            'name' => 'Nguyễn Thành Nhân',
            'year' => 1993,
            'gioitinh' => 'nam'
        ),
        array(
            'ma' => 2345,
            'name' => 'Trần Văn An',
            'year' => 1995,
            'gioitinh' => 'nam'
        ),
        array(
            'ma' => 3456,
            'name' => 'Lê Thị Hoa',
            'year' => 1992,
            'gioitinh' => 'nữ'
        )
    ),
    'teachers' => array(
        array(
            'ma' => 4567,
            'name' => 'Thầy Nguyễn Văn B',
            'year' => 1980,
            'gioitinh' => 'nam'
        ),
        array(
            'ma' => 5678,
            'name' => 'Cô Trần Thị C',
            'year' => 1985,
            'gioitinh' => 'nữ'
        )
    )
);

foreach ($school as $group => $members) {
    echo "<h2>" . ucfirst($group) . "</h2>"; // Tiêu đề nhóm

    // Duyệt qua từng thành viên trong nhóm
    echo "<ul>";
    foreach ($members as $member) {
        echo "<li>";
        echo "Mã: " . $member['ma'] . "<br>";
        echo "Tên: " . $member['name'] . "<br>";
        echo "Năm sinh: " . $member['year'] . "<br>";
        echo "Giới tính: " . $member['gioitinh'];
        echo "</li><br>";
    }
    echo "</ul>";
}
?>
