<?php 
  class Signup {
    private $database;
    function __construct($conn) {
      $this->database = $conn;
    }

    function register($first, $last, $email, $phone) {
      $err = 'All fields must be present';

      if ($first != '' && $last != '' && $email != '' && $phone != '') {
        try {
          $sql = "INSERT INTO Sponsors (first_name, last_name, email, phone_number) VALUES ('$first', '$last', '$email', '$phone')";
          $stmt = $this -> database -> prepare($sql);
          $stmt -> execute();
          return true;
        } catch(PDOException $ex) {
          die($ex -> getMessage());
          return false;
        }
      } else {
        echo "<script type='text/javascript'>alert('$err');</script>";
        echo "<script type='text/javascript'>history.go(-1)</script>";
      }
    }
  }

?>
