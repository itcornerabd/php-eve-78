<?php require('constr.php');


	$txtname = input('txtname');
	$selcategory = input('selcategory');  
	$txtactor =input('txtactor');
	$txtactress=input('txtactress');
	$txtdate=input('txtdate');
	$txtplot =input('txtplot');

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
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