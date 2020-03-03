<?php
include_once('dbConnection.php');

class Student extends dbConnection {

  public function __construct() {
      parent::__construct();
  }

    // Fetch data from database
    public function get_data($columns, $condition = null) {
        if($condition != null)
        {
            $query = $this->conn->prepare("SELECT $columns FROM students WHERE $condition");
        } else {
            $query = $this->conn->prepare("SELECT $columns FROM students");
        }

        if($query->execute())
        {
            $this->count = $query->rowCount();
            if($this->count > 0)
            {
                $this->results = $query->fetchAll();
                return $this->results;
            }
            return false;
        }

        return false;
    }

    // Method to execute query
    public function execute_query($query) {
        try {
            $result = $this->conn->prepare($query);
            $result->execute();
        } catch(PDOException $err) {
            $message = "Error: Fail to insert student record into database, because: \n".$err->getMessage();
            header('Location: index.php'.'?message='.$message);
        }
        return true;
    }

    // Method to delete student
    public function delete($id) {
        $query = "DELETE FROM students WHERE id = $id";

        try {
            $result = $this->conn->prepare($query);
            $result->execute();
        } catch(PDOException $err) {
            $message = "Error: Fail to delete student from database, because: \n".$err->getMessage();
            header('Location: index.php'.'?message='.$message);
        }
        return true;
    }

}
