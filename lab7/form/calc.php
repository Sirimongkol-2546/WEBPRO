<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <?php
    //เอา number มารับค่า ได้มาเป็น String
    $number = $_POST['invalue'];

    //แปลงค่าก่อน
    $v = intval($number); //String -> Int
    for ($i = 2; $i <= 12; $i++) {
        echo $v . " x ". $i . " = " . ($v*$i) . "<br>";
    } 
    ?>
        
</body>
</html>