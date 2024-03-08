<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<body>
    <form action="" method="POST">
        <label for="prodid">Product ID :</label>
        <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required />
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $prodid = $_POST['prodid'];

        // create link
        $url = "http://10.0.15.21/lab/lab12/restapis/products.php?prodid=" . $prodid;

        // วิธี1 curl_exec = make json string
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);

        //จะเข้าถึงข้อมูล ต้องแปลงเป็น obj ก่อน = json_decode
        $result = json_decode($response);

        // มันเป็น array 
        echo "Product ID: " . $result[0]->ProductID . " <br>";
        echo "Name: " . $result[0]->ProductName . " <br>";
        echo "Description: " . $result[0]->Description . " <br>";
        echo "Unit price: " . $result[0]->UnitPrice . " <br>";
    }
    ?>
</body>

</html>