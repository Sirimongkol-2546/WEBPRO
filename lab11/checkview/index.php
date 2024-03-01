<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <?php
    // display Session ID
    echo "Session ID : " . session_id() . "<br>";
    
    // Set session variables เก็บลน Server
    $_SESSION["scolor"] = "Green";
    $_SESSION["sanimal"] = "Cat";
    echo "Session variables are set.";

    echo "Data from session. <br>";
    echo $_SESSION["scolor"] . "<br>";
    echo $_SESSION["sanimal"] . "<br>";

    ?>


</body>

</html>