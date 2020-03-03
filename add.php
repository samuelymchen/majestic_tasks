<?php
  if (isset($_GET['message'])) {
    echo $_GET['message'];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add a Student</title>
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

      .add-student-header {
        text-align: center;
      }

      .add-student-main {
        text-align: center;
      }

      .form-group {
        margin: auto;
        padding-bottom: 12px;
        width: 50%;
      }

      label {
        padding: 12px 12px 12px 0;
        display: block;
        float: left;
      }

      /* Add red asterisk after required field  */
      div.required-field label::after {
        content: "*";
        color: red;
      }

      /* Format input style */
      input[type=text], input[type=date], input[type=number]{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
        font-size: 15px;
      }

      button[type=submit] {
        background-color: #6cc3d6;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="add-student-header">
            <h1>Add a Student</h1>
        </div>
        <div class="add-student-main">
            <form class="add-student-form" action="store.php" method="post" id="add-student-form">
                <div class="form-group required-field">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name">
                </div>
                <div class="form-group">
                  <label for="enrol_date">Enrol date</label>
                  <input type="date" id="enrol_date" name="enrol_date">
                </div>
                <div class="form-group">
                  <label for="dob">Birthday</label>
                  <input type="date" id="dob" name="dob">
                </div>
                <div class="form-group">
                    <label for="school_year">Current School Year</label>
                    <input type="number" name="school_year" placeholder="e.g. 7-12">
                </div>
                <div class="form-group">
                    <label for="phone">Home Phone</label>
                    <input type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="first_contact_name">First Contact Name</label>
                    <input type="text" name="first_contact_name">
                </div>
                <div class="form-group">
                    <label for="first_contact_phone">First Contact Phone</label>
                    <input type="text" name="first_contact_phone">
                </div>
                <div class="form-group">
                    <label for="second_contact_name">Second Contact Name</label>
                    <input type="text" name="second_contact_name">
                </div>
                <div class="form-group">
                    <label for="second_contact_phone">Second Contact Phone</label>
                    <input type="text" name="second_contact_phone">
                </div>
                <button type="submit" name="save-btn" id="save-btn">Add</button>
            </form>
        </div>
    </div>
  </body>
</html>
