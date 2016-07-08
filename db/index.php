<?php
// step connect to database server 
// query prepare
// query execute   
// fetch data/ process 
// close connection
require('constr.php');
// mysqli_connect //  mssql_connect // odbc_connect 
// pdo secure   

	$ACTION = input('ACTION');

	//echo $ACTION;

	if($ACTION=="DELETE")
	{
		$id = input('id');

		//$query = "delete from tbl_movie where id =$id  ";
		$query = "update tbl_movie set Status='NO' where id =$id  ";

			//echo $query;
		$result = mysqli_query($con,$query);

		if($result)
		{
			echo "selected movie is deleted ";
		}
		else
		{
			echo "some error occured in deletion ";
		}

	}

	if($ACTION=="REVERT")
	{
		$id = input('id');

		//$query = "delete from tbl_movie where id =$id  ";
		$query = "update tbl_movie set Status='YES' where id =$id  ";

			//echo $query;
		$result = mysqli_query($con,$query);

		if($result)
		{
			echo "selected movie is deleted ";
		}
		else
		{
			echo "some error occured in deletion ";
		}

	}


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

 			$query = "select movie.* , category.Name as CatName from tbl_movie as movie , tbl_category as category  where movie.CategoryID=category.ID order by movie.ID desc "  ;
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
 			printf('<th> Edit </th> ');
 			printf('<th> Delete</th> ');
 			printf('<th>Add Photo</th> ');
 			printf('</tr>');


 			while($rs = mysqli_fetch_array($rows))
 			{
 				if($rs['Status']=="YES")
 					$bgcolor="#FFFFF";
 				else
 					$bgcolor="#CCCCCC";

 				echo "<tr bgcolor='$bgcolor'>";
 				printf('<td>%s</td>',$rs['id']);
 				printf('<td>%s</td>',$rs['Name']);
 				printf('<td>%s</td>',$rs['CatName']);
 				printf('<td>%s</td>',$rs['Actor']);
 				printf('<td>%s</td>',$rs['Actress']);
 				printf('<td>%s</td>',$rs['ReleaseDate']);
 				printf('<td> <a href="details.php?id=%s"> Details </a></td>',$rs['id']);
 				printf('<td> <a href="Edit.php?id=%s"> Edit </a></td>',$rs['id']);

 				if($rs['Status']=="YES" )
 				{
 					printf('<td> <a href="index.php?id=%s&ACTION=DELETE"> Delete </a></td>',$rs['id']);	
 				}
 				else
 				{
 					printf('<td> <a href="index.php?id=%s&ACTION=REVERT"> Revert </a></td>',$rs['id']);
 				}
 				echo "<td>";
 				printf(' <a href="add_photo.php?id=%s">  Photo </a>',$rs['id']);
 				printf('<img src="%s" width="50" height="50" >', $rs['photo'] );
 				echo "</td>";	


 				echo "</tr>";
 			}
 			printf('</table>');




 		 ?>	


 	</body>
 </html>

 <?php require('closestr.php'); ?>