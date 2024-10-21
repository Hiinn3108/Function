<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng </title>
</head>
<body>
<?php
    $mobile = array("red", "green", "blue");

    for( $i = 0 ; $i<count($mobile); $i++){
        if($mobile[$i]=="red"){
            $color="red";
        }elseif ($mobile[$i]=="blue") {
            $color="blue";
        } else{
            $color="green";  
        }
        echo"<p style='color: $color; font-size: 30px;'>".$mobile[$i]."</p>";
    }
?>
</body>
</html>

