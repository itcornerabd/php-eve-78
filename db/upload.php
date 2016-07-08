<?php 

//var_dump($_FILES);


if(isset($_FILES['file1']))
{
	// echo "file name ".$_FILES['file1']['name'];
	// echo "<br>file type ".$_FILES['file1']['type'];
	// echo "<br>file temp name ".$_FILES['file1']['tmp_name']
	$filename = $_FILES['file1']['name'];
	$pathinfo = pathinfo($filename);	
	
	//var_dump($pathinfo);
	
	$newpath ="./upload/".$_FILES['file1']['name'];
	$i=0; 

	while(file_exists($newpath))
	{
		$i++;
		//echo "file already exits<br>";
		$newpath ="./upload/".$pathinfo['filename'] . "$i." .$pathinfo['extension'] ; 
	}
	 
	move_uploaded_file($_FILES['file1']['tmp_name'],$newpath);
	
	echo "file uploaded";
	
}
?>

<html>
	<head>
		<title>
			PHP Upload
		</title>
	</head>
	<body>
		
	<form action="upload.php" method="POST" enctype="multipart/form-data"  >
		
		<input type="file" name="file1" id="file1">	
		<br>
		<br>
		<input type="submit" name="btn1" value="upload">
	</form>

	</body>
</html>