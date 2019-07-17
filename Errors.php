<?php

  include "inclusive.php";

  $firstNameErr = $lastNameErr = $emailErr = $phoneNumberErr = "";
  $firstName = $lastName = $email = $phoneNumber = "";

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //   if (empty($_POST["firstName"])) {
  //     $firstNameErr = "First Name is required";
  //   } else {
  //     $firstName = test_input($_POST["firstName"]);
  //   }

  //   if (empty($_POST["lastName"])) {
  //     $lastNameErr = "Last name is required";
  //   } else {
  //     $lastName = test_input($_POST["lastName"]);
  //   }

  //   if (empty($_POST["email"])) {
  //     $emailErr = "Email is required"; 
  //   } else {
  //     $email = test_input($_POST['email']);
    
  //     // check if e-mail address is well-formed
  //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //       $emailErr = "Invalid email format"; 
  //     }
  //   }
    
  //   if (empty($_POST["phoneNumber"])) {
  //     $phoneNumberErr = "Phone Number is required";
  //   } else {
  //     if (!preg_match("/^([0-9])+([\.|,]([0-9])*)?$/", $_POST['phoneNumber'])) {
  //       $phoneNumberErr = 'Phone Number must be numerical';
  //     } else {
  //       $phoneNumber = test_input($_POST["phoneNumber"]);
  //     }
  //   }
  // }

  if (count($_POST)) {
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