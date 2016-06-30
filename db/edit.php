<?php require('constr.php');
$btnvalue = "UPDATE";
$redirectURL= "edit.php";
$ACTION = "EDIT";
$msg= "Edit Movie";


	$txtname = input('txtname');
	$selcategory = input('selcategory');  
	$txtactor =input('txtactor');
	$txtactress=input('txtactress');
	$txtdate=input('txtdate');
	$txtplot =input('txtplot');
	$id = input('id');
	if(!empty($txtname))
	{
		 // check name is exits
		$query = "update tbl_movie set Name = '$txtname' , CategoryID ='$selcategory' , Actor='$txtactor' ,Actress ='$txtactress' ,ReleaseDate='$txtdate', plot = '$txtplot'   where id=$id";
		
		$result = mysqli_query($con,$query);
		if($result)
		{
			header("location:index.php");
		}
		else
		{
			echo "some error occured please try again";
		}

	}


	if(isset($_REQUEST['id']))
	{
		$id = $_REQUEST['id'];
		$query = "select * from tbl_movie where id =$id ";

		$rows= mysqli_query($con,$query);
		if(!$rows)
			die("error in selection");

		if($rs=mysqli_fetch_array($rows))
		{
			$txtname = $rs['Name'];
			$selcategory=$rs['CategoryID'];
			$txtactor=$rs['Actor'];
			$txtactress=$rs['Actress'];
			$txtdate=$rs['ReleaseDate'];
			$txtplot=$rs['plot'];


		}	
		else
		{
			die("Invalid Request");
		}


	}
	else
	{
		die("Invalid Request");
	}


 ?>
<html>
	<head>
		<title>Add Movie</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<?php include('movieform.php') ?>
	</body>
</html>
<?php require('closestr.php'); ?>