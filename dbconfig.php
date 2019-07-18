<?php 
  $dbPw = 'sh1balnom';
  $dbUsername = 'phpsweepstakes';
  $server = 'localhost';
  $dbName = 'sweepstakes';

  try {
    $conn = new PDO('mysql:host='.$server.';dbname='.$dbName, $dbUsername, $dbPw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die($e -> getMessage());
  } 

  include 'output.php';
  $signup = new Signup($conn);

?>