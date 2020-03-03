<?php
  include_once("classes/Student.php");

  // Instantiate a student class and connect to db
  $new_student = new Student();

  // Check if students table is filled
  $check_user_table = $new_student->check_table_exists('students');
  if (!$check_user_table) {
    die('Students table is not created yet');
  }

  // Check if first name is filled
  if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $enrol_date = $_POST['enrol_date'];
    $dob = $_POST['dob'];
    $school_year = $_POST['school_year'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $first_contact_name = $_POST['first_contact_name'];
    $first_contact_phone = $_POST['first_contact_phone'];
    $second_contact_name = $_POST['second_contact_name'];
    $second_contact_phone = $_POST['second_contact_phone'];

    // Insert data into db
    $result = $new_student->execute("INSERT INTO students(first_name,last_name, enrol_date, dob, school_year, phone, mobile, email, first_contact_name, first_contact_phone, second_contact_name, second_contact_phone) VALUES('$first_name','$last_name', '$enrol_date', '$dob', '$school_year', '$phone', '$mobile', '$email', '$first_contact_name', '$first_contact_phone', '$second_contact_name', '$second_contact_phone')");
    if ($result) {
        header('Location: index.php'.'?message='.$first_name.' is inserted successfully');
    }
  } else {
    header('Location: add.php'.'?status=fail&message=Error: First name cannot be empty');
  }
