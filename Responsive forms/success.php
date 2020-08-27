<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<!--Display Site Logo at The Top-->

<div class="form">
    <h1><?= 'Success'; ?></h1>
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
