<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
    
<div class="form">
      <button  class="forgot" name="close" /><a  href="index.php" >close</a></button>
      <h1>Error</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
    else:
        header( "location: home.php" );
    endif;
    ?>
    </p>
    <a href="home.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
