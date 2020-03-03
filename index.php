<?php
include_once("classes/Student.php");

if (isset($_GET['message'])) {
    echo $_GET['message'];
}

// Instantiate a student class and connect to db
$Student = new Student();
// Fetch students data from db
$data = $Student->get_data('id, first_name,last_name, enrol_date, dob, school_year, mobile, email');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            border-radius: 5px;
            background-color: #e7e7e7;
            padding: 20px;
        }

        /* Make form responsive */
        @media screen and (max-width: 600px) {
            .container, .form-group {
                width: 100%;
                margin-top: 0;
            }
        }

        .header-section {
            text-align: center;
        }

        #add-student-link {
            display: inline;
            float: left;
            background-color: #6cc3d6;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border:1px solid black;
        }

        th {
            height: 50px;
            border:1px solid black;
        }

        td {
            height: 50px;
            border:1px solid black;
        }

        #students-table {
            border-collapse: collapse;
            /*text-align: center;*/
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <button id="add-student-link" onclick="window.location.href='/add.php'">Add a Student</button>
            <h1>All the Students</h1>
        </div>
        <div class="main-section">
            <table class="students-table" id="students-table">
                <tr>
                    <th>Name</th>
                    <th>Enrol Date</th>
                    <th>DOB</th>
                    <th>School Year</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
                <?php foreach($data as $student) { ?>
                    <tr>
                        <td>
                            <a href="mailto:<?php echo $student['email'] ?>"><?php echo $student['first_name'].' '.$student['last_name'] ?></a>
                        </td>
                        <td><?php echo  $student['enrol_date'] ?></td>
                        <td><?php echo  $student['dob'] ?></td>
                        <td><?php echo  $student['school_year'] ?></td>
                        <td><?php echo  $student['mobile'] ?></td>
                        <td>
                            <a href="#">View</a>
                            <a href="#">Edit</a>
                            <a href="/delete.php?id=<?php echo $student['id']?>&first_name=<?php echo $student['first_name']?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>
