<?php 
  $dbPw = 'sh1balnom';
  $dbUsername = 'phpsweepstakes';
  $server = 'localhost';
  $dbName = 'sweepstakes';

  $conn = new PDO('mysql:host='.$server.';dbname='.$dbName, $dbUsername, $dbPw);
  
  $query = "INSERT INTO Sponsors (first_name, last_name, email, phone_number) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber')";

  $exists = "SELECT * FROM Sponsors WHERE 'email' = '$email'";
  echo $exists; 

  if ($exists !== false) 
  {
    echo "User already exists!";
    $result = null;
    $conn = null;
  } else {
    $result = $conn->query($query);

    $result = null;
    $conn = null;
  }
?>