<?php
class dbConnection {

  private $_host = 'localhost';
  private $_dbname = 'majestic_task';
  private $_username = 'test';
  private $_password = 'test';

  protected $conn;
  protected $count;
  protected $results = array();

  public function __construct() {
      try{
          // create a PostgreSQL database connection
          $this->conn = new PDO("mysql:host=$this->_host;dbname=$this->_dbname;", $this->_username, $this->_password);

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

  // Used for checking if table exists
  function check_table_exists($table){
    try{
        $this->conn->query("SELECT 1 FROM $table");
    } catch (PDOException $e){
        return false;
    }
    return true;
  }

  function __destruct(){
      $this->conn = null;
      // echo "Connection close\n";
  }

}
