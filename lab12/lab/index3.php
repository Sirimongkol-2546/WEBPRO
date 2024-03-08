<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
<?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-all";
    //  // วิธี1 curl_exec = make json string
    //  $client = curl_init($url);
    //  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    //  $response = curl_exec($client);

    // วิธีที่ 2
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "ปี : " . $result[0]->year  . "<br>";
    echo "สัปดาห์ที่ : " . $result[0]->weeknum . "<br>";
    echo "ผู้ป่วยใหม่ : " . $result[0]->new_case . "<br>";
    echo "ผู้ป่วยทั้งหมด : " . $result[0]->total_case . "<br>";
    echo "จำนวนผู้เสียชีวิต : " . $result[0]->total_death . "<br>";
    //      
?>
    
</body>
</html>