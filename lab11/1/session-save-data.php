<?php
// Start the session
session_start();

    //รับค่าาาาาาาาา
    $eid = $_POST['eid'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $addr = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    //เขียนลงบน session
    $_SESSION["eid"] = $eid;
    $_SESSION["firstname"] = $fname;
    $_SESSION["lastname"] = $lname;
    $_SESSION["address"] = $addr;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;

    echo "Session variables are set to " . session_id();

?>