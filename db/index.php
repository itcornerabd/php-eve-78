<?php
// step connect to database server 
// query prepare
// query execute   
// fetch data/ process 
// close connection
require('constr.php');
 ?>

 <html>
 	<head>
 		<title>
 			Database
 		</title>
 		<link rel="stylesheet" href="../css/style.css">
 	</head>
 	<body>
		<a href="add.php">Add</a>

 		<?php 

 			$query = "select movie.* , category.Name as CatName from tbl_movie as movie , tbl_category as category  where movie.CategoryID=category.ID ";
			$rows=mysqli_query($con,$query);
			if(!$rows)
				die("movie not available right now");

 			printf('<table align="center">');

 			printf('<tr>')	;
 			printf('<th>id</th>');
 			printf('<th>Name</th>');
 			printf('<th>Category</th>');
 			printf('<th>Actor</th>');
 			printf('<th>Actress</th>');
 			printf('<th>Release Date</th>');
 			printf('<th> Details </th> ');
 			printf('</tr>');


 			while($rs = mysqli_fetch_array($rows))
 			{
 				echo "<tr>";
 				printf('<td>%s</td>',$rs['id']);
 				printf('<td>%s</td>',$rs['Name']);
 				printf('<td>%s</td>',$rs['CatName']);
 				printf('<td>%s</td>',$rs['Actor']);
 				printf('<td>%s</td>',$rs['Actress']);
 				printf('<td>%s</td>',$rs['ReleaseDate']);
 				printf('<td> <a href="details.php?id=%s"> Details </a></td>',$rs['id']);
 				echo "</tr>";
 			}
 			printf('</table>');




 		 ?>	


 	</body>
 </html>

 <?php require('closestr.php'); ?>