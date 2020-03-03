<?php
include_once('dbConnection.php');

class Student extends dbConnection {

  public function __construct()
    {
        parent::__construct();
    }

    // Method to execute query
    public function execute($query)
        {
            try {
              $result = $this->conn->prepare($query);
              $result->execute();
            } catch(PDOException $err) {
              $message = "Error: Fail to insert student record into database, because: \n".$err->getMessage()."\n";
              die($message);
            }
            return true;
        }

}
