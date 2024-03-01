<?php
// Start the session
session_start();

    $course = array();
    //รับค่าาาาาาาาา
    $c_id = $_GET['CourseID'];
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];

    //เขียนลงบน session
    $_SESSION["CourseID"] = $c_id;
    $_SESSION["CourseTitle"] = $c_title;
    $_SESSION["DeptName"] = $c_dept;
    $_SESSION["Credits"] = $c_credits;

    echo "Session variables are set to " . session_id();

?>