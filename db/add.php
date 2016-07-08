<?php require('constr.php');

	$txtname = input('txtname');
	$selcategory = input('selcategory');  
	$txtactor =input('txtactor');
	$txtactress=input('txtactress');
	$txtdate=input('txtdate');
	$txtplot =input('txtplot');
	$id = "";

$btnvalue = "ADD";
$redirectURL= "add.php";
$msg= "Add New Movie";
$ACTION = "ADD";


if(!empty($txtname) )
{	
	$query = "select * from tbl_movie where Name = '$txtname' ";

	$rows= mysqli_query($con,$query);
	if(!$rows)
		die("error occured");

	if($rs=mysqli_fetch_array($rows))
	{
		echo "Movie name already exists ";
	}	
	else
	{
		$query = "insert into tbl_movie (Name,CategoryID,Actor,Actress,ReleaseDate,Plot) values('$txtname',$selcategory,'$txtactor','$txtactress','$txtdate','$txtplot') ";

		$result=mysqli_query($con,$query);

		if($result)
		{
			header("Location:index.php");
		}	
		else
		{
			echo "some error occured please try again";
		}
	}	
}

 ?>
<html>
	<head>
		<title>Add Movie</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<?php include 'movieform.php'; ?>
	</body>
</html>
<?php require('closestr.php'); ?>