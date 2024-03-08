<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>

<body>
    <?php
    $url = "http://10.0.15.21/lab/lab12/restapis/heroes";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "Squad Name : $result->squadName<br>";
    echo "Home Town : $result->homeTown<br>";

    // ตัวแแปรรับ = $hero
    foreach ($result->members as $hero) {
        echo "&emsp; Name : $hero->name<br>";
        echo "&emsp; Age : $hero->age<br>";

        // อยู่ใน hero อีกทีหนึ่ง
        foreach ($hero->powers as $p){
        echo "&emsp; *****Power : " . $p . "<br>";
        }
    }
    ?>
</body>

</html>