<?php require('constr.php'); ?>
<html>
	<head>
		<title>Add Movie</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<form action="add.php" method="POST" name="movieinsert" id="movieinsert">		
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="txtname" id="txtname" required >
				</td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select name="selcategory" id="selcategory">
						<option value="">--select category--</option>
						<?php 
						$query = "select * from tbl_category Order by Name";
						$rows= mysqli_query($con,$query);
						if(!$rows)
							die(" select category query error 26");
						while($rs=mysqli_fetch_array($rows))
						{
							printf('<option value="%s" >%s</option>',$rs['id'],$rs['Name']);
						}


						 ?>

					</select>
					
				</td>
			</tr>
			<tr>
				<td> Actor </td>
				<td>
					<input type="text" name="txtactor" id="txtactor" required>
				</td>
			</tr>
			<tr>
				<td>Actress</td>
				<td>
					<input type="text" name="txtactress" id="txtactress" required>

				</td>
			</tr>
			<tr>
				<td>Release Date</td>
				<td>
					<input type="date" name="txtdate" id="txtdate" required>
				</td>
			</tr>
			<tr>
				<td>Plot</td>
				<td>
					<textarea name="txtplot" id="txtplot" required></textarea>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" value="ADD">	

				</td>
				
			</tr>
		</table>	
		</form>
	</body>
</html>
<?php require('closestr.php'); ?>