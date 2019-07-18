<?php 
  class Signup {
    private $database;
    function __construct($conn) {
      $this->database = $conn;
    }

    function register($first, $last, $email, $phone) {
      try {
      $sql = "INSERT INTO Sponsors (first_name, last_name, email, phone_number) VALUES ('$first', '$last', '$email', '$phone')";

        $stmt = $this -> database -> prepare($sql);
        $stmt -> execute();
        return true;
      } catch(PDOException $ex) {
        dit($ex -> getMessage());
        return false;
      }
    }
  }

?>
