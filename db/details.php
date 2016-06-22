<?php require('constr.php'); ?>
<html>
	<head>
		<title>Movie Details</title>
		<link rel="stylesheet" href="../css/style.css">	
	</head>
	<body>
		<?php 
			if(isset($_GET['id']))
			$id = $_GET['id'];
			else
			die("Invalid Request ");	

			$query = "select * from tbl_movie where id =$id";
			$row = mysqli_query($con,$query);
			if(!$row)
				die("query error");

			if($rs=mysqli_fetch_array($row))
			{
				echo "<ul>";
				printf('<li>%s</li>',$rs['id']);
				printf('<li>%s</li>',$rs['Name']);
				printf('<li>%s</li>',$rs['Actor']);
				printf('<li>%s</li>',$rs['Actress']);
				printf('<li>%s</li>',$rs['ReleaseDate']);
				printf('<li>%s</li>',$rs['plot']);	
				echo "</ul>"; 
			}	
			else
			{
				echo "details not found";
			}

		 ?>

	</body>
</html>
<?php require('closestr.php'); ?>