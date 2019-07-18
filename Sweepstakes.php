<?php 
  include "dbconfig.php";

  if (isset($_POST['submit'])) {
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $emailaddress = $_POST['email'];
    $phone = $_POST['phoneNumber'];

    if($signup -> register($fName, $lName, $emailaddress, $phone)) {
      header("Location: Sweepstakes.php?");
    }
  }

?> 

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Sweepstakes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .required {
        color: red;
      }
    </style>
  </head>

  <body>
    <div class="container" style='background-color: powderblue;'>
      <br>
      <p>* required fields</p>
      
      <form method="post" action="">
        <table>
          <tr>
            <td>First Name:</td>
            <td>
              <input type="text" name="firstName" placeholder='First Name'>
            </td>
          </tr>

          <tr>
            <td>Last Name:</td>
            <td>
              <input type="text" name="lastName" placeholder='Last Name'>
            </td>
          </tr>
        
          <tr>
            <td>E-mail: </td>
            <td>
              <input type="text" name="email" placeholder='example@example.com'> 
            </td>
          </tr>

          <tr>
            <td>Phone Number: </td>
            <td>
              <input type="text" name="phoneNumber" placeholder='XXXXXXXXXX'>
            </td>
          </tr>
        
          <td>
            <input class='btn btn-info btn-md' type='submit' name='submit' value='submit'>
          </td>
        </table>
      </form>

  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>

