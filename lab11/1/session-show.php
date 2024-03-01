<?php
// Start the session
session_start();
?>

<?php

$_SESSION["eid"] = $eid;
$_SESSION["firstname"] = $fname;
$_SESSION["lastname"] = $lname;
$_SESSION["address"] = $addr;
$_SESSION["email"] = $email;
$_SESSION["phone"] = $phone;

echo "Session ID : " . session_id();

?>