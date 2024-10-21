<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $course = array(
        'Frontend' => array(
            'title' => 'Khóa học lập trình frontend online',
            'fee' => 120000
        ),
        'PHP-MYSQL' => array(
            'title' => 'Khóa học lập trình web PHP-MYSQL online',
            'fee' => 160000
        )
      );

      // Duyệt qua từng khóa học
      foreach ($course as $key => $value) {
          echo "<strong>$key</strong><br>"; // In tên khóa học

          // Duyệt qua các chi tiết bên trong từng khóa học
          foreach ($value as $subKey => $subValue) {
              echo "$subKey: $subValue<br>"; // In tiêu đề và học phí
          }
          echo "<br>"; // Thêm khoảng trống giữa các khóa học
      }
    ?>
</body>
</html>
