<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Sweepstakes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .error {
        color: red;
      }
    </style>

  </head>

  <body>
    <div class="container" style='background-color: powderblue;'>
      <br>

    <?php
      $firstNameErr = $lastNameErr = $emailErr = $phoneNumberErr = "";
      $firstName = $lastName = $email = $phoneNumber = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["firstName"])) {
          $firstNameErr = "First Name is required";
        } else {
          $firstName = test_input($_POST["firstName"]);
        }

        if (empty($_POST["lastName"])) {
          $lastNameErr = "Last name is required";
        } else {
          $lastName = test_input($_POST["lastName"]);
        }

        if (empty($_POST["email"])) {
          $emailErr = "Email is required"; 
        } else {
          $email = test_input($_POST['email']);
        
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
          }
        }
        
        if (empty($_POST["phoneNumber"])) {
          $phoneNumberErr = "Phone Number is required";
        } else {
          if (!preg_match("/^([0-9])+([\.|,]([0-9])*)?$/", $_POST['phoneNumber'])) {
            $phoneNumberErr = 'Phone Number must be numerical';
          } else {
            $phoneNumber = test_input($_POST["phoneNumber"]);
          }
        }
      }
        
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
    ?>

    <p><span class = "error">* required fields</span></p>
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>First Name:</td>
               <td><input type = "text" name = "firstName" placeholder='First Name'>
                  <span class = "error">* <?php echo $firstNameErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Last Name:</td>
               <td><input type = "text" name = "lastName" placeholder='Last Name'>
                  <span class = "error">* <?php echo $lastNameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email" placeholder='example@example.com'>
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Phone Number: </td>
               <td><input type = "text" name = "phoneNumber" placeholder='XXXXXXXXXX'>
                  <span class = "error">* <?php echo $phoneNumberErr;?></span>
               </td>
            </tr>
           
            <td>
               <button class='btn btn-info btn-md' type='submit' name='submit' value='submit'>
                Submit
               </button>
            </td>
         </table>
      </form>
      
      <?php 
        $dbPw = 'sh1balnom';
        $dbUsername = 'phpsweepstakes';
        $server = 'localhost';
        $dbName = 'sweepstakes';

        $conn = new PDO('mysql:host='.$server.';dbname='.$dbName, $dbUsername, $dbPw);
        $query = "INSERT INTO Sponsors (first_name, last_name, email, phone_number) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber')";

        $exists = "SELECT * FROM Sponsors WHERE 'email' = '$email'";
        echo $exists; 

        if ($exists->rowCount() > 0) 
        {
          echo "User already exists!";
          $result = null;
          $conn = null;
        } else {
          $query = "INSERT INTO Sponsors (first_name, last_name, email, phone_number) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber')";
          $result = $conn->query($query);

          $result = null;
          $conn = null;
        }
      ?>

      <?php 
         echo "<h2>
                Your input
              </h2>
              <hr>";
         echo 'First name: '.$firstName;
         echo "<br>";
         
         echo 'Last name: '.$lastName;
         echo "<br>";
         
         echo 'Phone Number: '.$phoneNumber;
         echo "<br>";
         
         echo 'Email: '.$email;
         echo "<br>";
      ?>

    </div>

  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

