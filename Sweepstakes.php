<?php
  include "Errors.php";
  include 'inclusive.php';
  include "dbconfig.php";

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
      
      <form method = "post" action = "Sweepstakes.php">
        <table>
            <tr>
            <div class="<?= $firstNameErr ?>">
              <td>First Name:</td>
                <td>
                  <input type = "text" name = "firstName" placeholder='First Name'>
                  <span class = "<?= $firstNameErr ?>">* <?php echo $firstNameErr;?></span>
                </td>
              </div>
            </tr>

            <tr>
              <div class="<?= $lastNameErr ?>">
                <td>Last Name:</td>
                  <td>
                    <input type = "text" name = "lastName" placeholder='Last Name'>
                    <span class = "required">* <?php echo $lastNameErr;?></span>
                  </td>
              </div>
            </tr>
          
            <tr>
              <div class="<?= $emailErr ?>">
              <td>E-mail: </td>
                <td>
                  <input type = "text" name = "email" placeholder='example@example.com'> 
                  <span class = "required">* <?php echo $emailErr;?></span>
                </td>
              </div>
            </tr>

            <tr>
              <div class="<?= $phoneNumberErr ?>">
              <td>Phone Number: </td>
                <td>
                  <input type = "text" name = "phoneNumber" placeholder='XXXXXXXXXX'>
                  <span class = "required">* <?php echo $phoneNumberErr;?></span>
                </td>
              </div>
            </tr>
          
            <td>
              <button class='btn btn-info btn-md' type='submit' name='submit' value='submit'>
                Submit
              </button>
            </td>
        </table>
      </form>

  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>

