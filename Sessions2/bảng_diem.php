<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Điểm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: blue;
        }
        .result {
            text-align: center;
            color: red;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 48%;
            padding: 10px;
            background-color: #473b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #832;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BANG DIEM CUA EM</h1>
        <form action="bangdiem.php" method="POST">
            <label for="semester1">Semester 1:</label>
            <input type="number" name="semester1" id="semester1" required>
            <label for="semester2">Semester 2:</label>
            <input type="number" name="semester2" id="semester2" required>
            <label for="year">Year:</label>
            <select name="year" id="year">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="buttons">
                <button type="submit">Tính Toán</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $semester1 = $_POST['semester1'];
            $semester2 = $_POST['semester2'];
            $year = $_POST['year'];
            if ($year == 1){
                $average = ($semester1 + $semester2) / 2;
            }elseif($year == 2){
                $average = ($semester1 + ($semester2*2)) / 3;
            }else {
                $average = ($semester1 + ($semester2*3)) / 4;
            }
            if ($average >= 8) {
                $result = "Học sinh giỏi";
            } elseif ($average >= 6.5) {
                $result = "Học sinh khá";
            } else {
                $result = "Học sinh trung bình";
            }
            echo "<div class='result'>";
            echo "<p>Điểm Trung Bình: " . number_format($average, 2) . "</p>";
            echo "<p>Đánh Giá: " . $result . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>