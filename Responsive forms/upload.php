<?php
		require_once("DB.php");

		if(isset($_POST['submitform']))
		{
			$dir="upload/";
			$image=$_FILES['uploadfile']['name'];
			$temp_name=$_FILES['uploadfile']['tmp_name'];
			$fname = $_POST['fname'];
			$content = $_POST['content'];
			$tablename = $_POST['tablename'];

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
				mysqli_query($con,$query) or die(mysqli_error($con));

				echo "File Uploaded Sucessfully ";

				header('location: uploader.html');

		}

?>
