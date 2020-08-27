<?php
/*
	TC: We will handle just 3 pseudo procedure here.
	1. Registration process
	2. Inserts user info into the database and
	3. Sends account confirmation email message
*/
$mysqli=mysqli_connect("169.239.218.51","saachsor", "sK12D9fr6w","saachsor_uploads");



if(isset($_POST['submitform']))
{
  //TC: Escape all $_POST variables to protect against SQL injections

  $fname =$mysqli->escape_string($_POST['fname']);
  $tablename = $mysqli->escape_string($_POST['tablename']);
  
  $dir="upload/";
  $n = "news";
  $e ="events";
  $n1 ="notice1";
  $n2 ="notice2";
  

    $result = $mysqli->query("SELECT * FROM $tablename WHERE fname='$fname'");
  //TC:check if the header exist
if ( $result->num_rows == 0 ){ // User doesn't exist
    echo '<script language="javascript">';
            echo 'alert("File with that header name does not exist!!")';
            echo '</script>';

     echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";
   }
else {
  // code...
  if ($tablename == $n ) {

      $query="DELETE FROM $tablename WHERE `fname` = '$fname'";
      	mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

      	echo '<script language="javascript">';
  				 echo 'alert("File deleted Sucessfully!!")';
  				 echo '</script>';

           echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";

  }
  
  if ($tablename == $n1 ) {

      $query="DELETE FROM $tablename WHERE `fname` = '$fname'";
      	mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

      	echo '<script language="javascript">';
  				 echo 'alert("File deleted Sucessfully from notice board 1 !!")';
  				 echo '</script>';

           echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";

  }
  
  if ($tablename == $n2 ) {

      $query="DELETE FROM $tablename WHERE `fname` = '$fname'";
      	mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

      	echo '<script language="javascript">';
  				 echo 'alert("File deleted Sucessfully from notice board 2 !!")';
  				 echo '</script>';

           echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";

  }
  else{
      
      $sql="select * from $tablename WHERE `fname` = '$fname'";
                    $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                    
                      while($row=mysqli_fetch_array($qry))
                    {
                      $file=$row['file'];
                        $directory = "upload/";
                         // Open a directory, and read its contents
                   if (is_dir($directory)){
                     if ($opendirectory = opendir($directory)){
                       while (($file = readdir($opendirectory)) != false){
                         if (strpos($file, "HTML4") != false)
                     {
                     unlink($directory.$file);
                   }
                   else{
                         echo '<script language="javascript">';
                         echo 'alert("could not locate file on dir!!!")';
                         echo '</script>';
                   }
                       }
                       closedir($opendirectory);
                     }
  }
                    }
                      $query="DELETE FROM $tablename WHERE `fname` = '$fname'";
                           mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

                             echo '<script language="javascript">';
                                  echo 'alert("File deleted Sucessfully from events!!!")';
                                  echo '</script>';
                                  echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";
                   }
        
         }
    }


?>
