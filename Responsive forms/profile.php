<?php

require 'db.php'; //read from the database
/*Yeah! Displays user information and some useful messages */
session_start();

    //Yeah! Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Pop-Up</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
<!--Yeah! Display Site Logo at The Top-->
  <div class="form">
          <h1>Thanks for Registering on Our Site</h1>
            
            
             <?php

          //Yeah! Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];

              //Yeah! Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }

          ?>
          </p>

          <?php

          //Yeah! Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link send to your email!
              </div>';
          }

          ?>

          <!--Yeah! We navigate back to Home page of the site-->
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
