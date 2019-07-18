<?php 
  $dbPw = 'sh1balnom';
  $dbUsername = 'phpsweepstakes';
  $server = 'localhost';
  $dbName = 'sweepstakes';

  try {
    $conn = new PDO('mysql:host='.$server.';dbname='.$dbName, $dbUsername, $dbPw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  } 

  if (isset($_POST['submit'])) {
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $emailAddress = $_POST['email'];
    $phone = $_POST['phoneNumber'];

    if ($first == '' || $last == '' || $emailAddress == '' || $phone == '') {
      echo "Please enter all required fields"; 
    }

    $check_email = "select * from users where user_email = :email";
    $check_email = $conn->prepare($check_email);
    $check_email->execute(array(':email'=>$user_email));
    if ($check_email->rowCount() > 0){
        echo "<script>alert('Email $user_email already exist!')</script>";
        exit();
    }

    $query = "insert into Sponsors(first_name, last_name, email, phone_number) values (?, ?, ?, ?)";
    $query = $conn->prepare($query);

    $query->bindParam('1', $first);
    $query->bindParam('2', $last);
    $query->bindParam('3', $emailAddress);
    $query->bindParam('4', $phone);

    $query->execute();

    if ($query->rowCount() > 0) {
        echo "<script>window.open('Sweepstakes.php','_self')</script>";
        exit();
    }

  }

?>