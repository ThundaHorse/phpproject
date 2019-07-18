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

  if (count($_POST) > 0) {
    if ($_POST['firstName'] != "") {
      $_SESSION['firstName'] = $_POST['firstName'];
      header('Location: output.php');
    } else {
      $firstNameErr = 'required';
    }

    if ($_POST['lastName'] != "") {
      $_SESSION['lastName'] = $_POST['lastName']; 
      header('Location: output.php'); 
    } else {
      $lastNameErr = 'required';
    }

  
    if ($_POST['email'] != "") {
      $_SESSION['email'] = $_POST['email']; 
      header('Location: output.php'); 
    } else {
      $emailErr = 'required';
    }
  
    if ($_POST['phoneNumber'] != "" && preg_match("/^([0-9])+([\.|,]([0-9])*)?$/", $_POST['phoneNumber'])) {
      $_SESSION['phoneNumber'] = $_POST['phoneNumber']; 
      header('Location: output.php'); 
    } else {
      $phoneNumberErr = 'required';
    }
  }
  
?>