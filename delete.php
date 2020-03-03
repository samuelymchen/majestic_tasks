<?php
include_once("classes/Student.php");

// Instantiate a student class and connect to db
$new_student = new Student();

// Check if students table is filled
$check_user_table = $new_student->check_table_exists('students');
if (!$check_user_table) {
    die('Students table is not created yet');
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $first_name = $_GET['first_name'];


    $result = $new_student->delete($id);

    if ($result) {
        header("Location:index.php"."?message=Delete user ".$first_name.' successfully');
    }
} else {
    header('Location: index.php'.'?message=Error: Unauthorised access to link');
}