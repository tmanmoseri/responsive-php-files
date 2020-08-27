<?php
/*
	TC: We will handle just 3 pseudo procedure here.
	1. Registration process
	2. Inserts user info into the database and
	3. Sends account confirmation email message
*/
$mysqli=mysqli_connect("169.239.218.51","saachsor", "sK12D9fr6w","saachsor_uploads");
//$mysqli=mysqli_connect("localhost","root", "","uploads");
//include 'db.php';
if(isset($_POST['submitform']))
{


//TC: Escape all $_POST variables to protect against SQL injections
$image=$mysqli->escape_string($_FILES['uploadfile']['name']);
$temp_name=$mysqli->escape_string($_FILES['uploadfile']['tmp_name']);
$fname =$mysqli->escape_string($_POST['fname']);
$content = $mysqli->escape_string($_POST['content']);
$tablename = $mysqli->escape_string($_POST['tablename']);


$t = "news";
$n ="events";
$notice1 = "notice1";
$notice2="notice2";
//
if ($tablename == $t ) {

	//
		$query="insert IGNORE into $tablename (`id`,`fname`,`content`) values ('','$fname','$content')";
		mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

					echo '<script language="javascript">';
				 echo 'alert("File Uploaded Sucessfully into news!")';
				 echo '</script>';


	echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";

}

	if ($tablename == $n ) {
		$dir="upload/";
	if($image!="")
	{
		if(file_exists($dir.$image))
		{
			$image= time().'_'.$image;
		}

		$fdir= $dir.$image;
		move_uploaded_file($temp_name, $fdir);
	}

		$query="insert IGNORE into $tablename (`id`,`file`,`fname`,`content`) values ('','$image','$fname','$content')";
		mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

		echo '<script language="javascript">';
	 echo 'alert("File Uploaded Sucessfully into events!")';
	 echo '</script>';
	 echo "<script>window.top.location='http://www.saachs.org/index.php'</script>";
 }


	if ($tablename == $notice1 ) {

		//
			$query="insert IGNORE into $tablename (`id`,`fname`,`content`) values ('','$fname','$content')";
			mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

						echo '<script language="javascript">';
					 echo 'alert("File Uploaded Sucessfully into notice board 1!")';
					 echo '</script>';


		echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";

	}

		if ($tablename == $notice2 ) {

			//
				$query="insert IGNORE into $tablename (`id`,`fname`,`content`) values ('','$fname','$content')";
				mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

							echo '<script language="javascript">';
						 echo 'alert("File Uploaded Sucessfully into notice board 2!")';
						 echo '</script>';


			echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";

		}

		else{	echo '<script language="javascript">';
		 echo 'alert("please select a category of your publication!")';
		 echo '</script>';
		 	echo "<script>window.top.location='http://www.saachs.org/uploader.php'</script>";
	 }


}
?>
