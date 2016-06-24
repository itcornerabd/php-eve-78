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

			$query = "select movie.*, category.Name as CatName from tbl_movie as movie , tbl_category as category where movie.CategoryID=category.ID and  movie.id =$id";
			$row = mysqli_query($con,$query);
			if(!$row)
				die("query error");

			if($rs=mysqli_fetch_array($row))
			{
				echo "<table align='center'>";

				printf('<tr> <td>ID </td> <td> %s</td> </tr>',$rs['id']);
				printf('<tr> <td>Name </td> <td> %s</td> </tr>',$rs['Name']);
				printf('<tr> <td>Category  </td> <td> %s</td> </tr>',$rs['CatName']);
				printf('<tr> <td>Actor </td> <td> %s</td> </tr>',$rs['Actor']);
				printf('<tr> <td> Actress</td> <td> %s</td> </tr>',$rs['Actress']);
				printf('<tr> <td> ReleaseDate</td> <td> %s</td> </tr>',$rs['ReleaseDate']);
				printf('<tr> <td> plot </td> <td> %s</td> </tr>',nl2br($rs['plot']));	
				echo "</table>"; 
			}	
			else
			{
				echo "details not found";
			}

		 ?>

	</body>
</html>
<?php require('closestr.php'); ?>