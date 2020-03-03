<?php
class dbConnection {
  private $conn;

  public function __construct() {
      try{
          // create a PostgreSQL database connection
          $this->conn = new PDO("mysql:host=localhost;dbname=majestic_task;", "test", "test");

          // display a message if connected to the PostgreSQL database successfully
          if($this->conn){
              // echo "Connect to database successfully!\n";
          }

          // allow PDO to throw exceptionsx
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//            return $this->conn;
      } catch (PDOException $err){
          // report error message
          $message = "Error: Fail to connect to database, because: \n".$err->getMessage()."\n";
          die($message);
      }
  }

  public function connection(){
      return $this->conn;
  }

  function __destruct(){
      $this->conn = null;
      // echo "Connection close\n";
  }

}
