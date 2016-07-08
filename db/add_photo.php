<?php 
include 'constr.php';

$id = input('id');

if(isset($_FILES['photo']))
{
	// echo "file name ".$_FILES['file1']['name'];
	// echo "<br>file type ".$_FILES['file1']['type'];
	// echo "<br>file temp name ".$_FILES['file1']['tmp_name']
	$filename = $_FILES['photo']['name'];
	$pathinfo = pathinfo($filename);	
	
	//var_dump($pathinfo);
	
	$newpath ="./upload/".$filename;
	$i=0; 

	while(file_exists($newpath))
	{
		$i++;
		//echo "file already exits<br>";
		$newpath ="./upload/".$pathinfo['filename'] . "$i." .$pathinfo['extension'] ; 
	}
	 
	move_uploaded_file($_FILES['photo']['tmp_name'],$newpath);
		

	$query = "update tbl_movie set photo='$newpath'    where id=$id"; 	

	$result= mysqli_query($con,$query);
	if(!$result)
	{
		die("error occured".$query);		
	}
	else
	{
		header("location:index.php");
	}

	echo "file uploaded";
	
}



	
 ?>
<html>
	<head>
		<title>Add Photo</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
	<form action="add_photo.php" method="POST" enctype="multipart/form-data" >  			
	<table>
		<tr>
			<td>Select File</td>
			<td>
				<input type="file" name="photo" id="photo" > 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="UPLOAD">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
			</td>
			
		</tr>
	</table>
	</form>

	</body>
</html>