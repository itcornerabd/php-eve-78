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
 		<?php 

 			$query = " select * from tbl_movie ";
			$rows=mysqli_query($con,$query);
			if(!$rows)
				die("movie not available right now");

 			printf('<table align="center">');
 			printf('<tr><th>id</th><th>Name</th><th>Actor</th><th>Actress</th><th>Release Date</th><th> Details </th> </tr>')	;
 			while($rs = mysqli_fetch_array($rows))
 			{
 				echo "<tr>";
 				printf('<td>%s</td>',$rs['id']);
 				printf('<td>%s</td>',$rs['Name']);
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