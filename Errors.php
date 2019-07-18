<?php
  // include "inclusive.php";

  $firstNameErr = "";
  $lastNameErr = "";
  $emailErr = "";
  $phoneNumberErr = "";

  $firstName = "";
  $lastName = "";
  $email = "";
  $phoneNumber = "";

  // if (count($_POST) > 0) {
    // if ($_POST['firstName'] != "") {
    //   $_SESSION['firstName'] = $_POST['firstName'];
    //   header('Location: Sweepstakes.php');
    // } else {
    //   $firstNameErr = 'required';
    // }

    // if ($_POST['lastName'] != "") {
    //   $_SESSION['lastName'] = $_POST['lastName']; 
    //   header('Location: Sweepstakes.php'); 
    // } else {
    //   $lastNameErr = 'required';
    // }

  
    // if ($_POST['email'] != "") {
    //   $_SESSION['email'] = $_POST['email']; 
    //   header('Location: Sweepstakes.php'); 
    // } else {
    //   $emailErr = 'required';
    // }
  
    // if ($_POST['phoneNumber'] != "" && preg_match("/^([0-9])+([\.|,]([0-9])*)?$/", $_POST['phoneNumber'])) {
    //   $_SESSION['phoneNumber'] = $_POST['phoneNumber']; 
    //   header('Location: Sweepstakes.php'); 
    // } else {
    //   $phoneNumberErr = 'required';
    // }
  // }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = form_input($_POST["firstName"]);
    $email = form_input($_POST["lastName"]);
    $website = form_input($_POST["email"]);
    $comment = form_input($_POST["phoneNumber"]);
  } 

  function form_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
?>