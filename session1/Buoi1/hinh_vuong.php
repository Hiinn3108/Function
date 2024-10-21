<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .square{
            height:20px;
            width:20px;
            float:left;
            border:1px solid gray;
            margin-left:5px;
            margin-bottom:5px;
        }
    </style>

</head>
<body>

    <?php
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                echo "<div class='square'></div>";
            }
            echo "<div style='clear:both'></div>";
        }
    ?>

</body>
</html>
 