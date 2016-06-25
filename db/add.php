<?php require('constr.php');

function input($controlname)
{

	if(isset($_POST[$controlname]))
		return $_POST[$controlname];
	else
		return "";
}
	$txtname = input('txtname');
	$selcategory = input('selcategory');  
	$txtactor =input('txtactor');
	$txtactress=input('txtactress');
	$txtdate=input('txtdate');
	$txtplot =input('txtplot');

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
		<form action="add.php" method="POST" name="movieinsert" id="movieinsert">		
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="txtname" id="txtname" value="<?php echo $txtname; ?>"  >
				</td>
			</tr>
			<tr>
				<td>Category</td>
				<td><?php echo $selcategory; ?>
					<select name="selcategory" id="selcategory">
						<option value="">--select category--</option>
						<?php 

						$query = "select * from tbl_category Order by Name";
						$rows= mysqli_query($con,$query);
						if(!$rows)
							die(" select category query error 26");
						while($rs=mysqli_fetch_array($rows))
						{
							if($rs['id']==$selcategory)
							{
								$selected = "selected";
 							}
 							else
 							{
 								$selected="";
 							}

							printf('<option value="%s" %s >%s</option>',$rs['id'],$selected,$rs['Name']);
						}


						 ?>

					</select>
					
				</td>
			</tr>
			<tr>
				<td> Actor </td>
				<td>
					<input type="text" name="txtactor" id="txtactor" value="<?php echo $txtactor; ?>"  >
				</td>
			</tr>
			<tr>
				<td>Actress</td>
				<td>
					<input type="text" name="txtactress" id="txtactress" value="<?php echo $txtactress; ?>"  >

				</td>
			</tr>
			<tr>
				<td>Release Date</td>
				<td>
					<input type="date" name="txtdate" id="txtdate" value="<?php echo $txtdate; ?>"  >
				</td>
			</tr>
			<tr>
				<td>Plot</td>
				<td>
					<textarea name="txtplot" id="txtplot" ><?php echo $txtplot; ?></textarea>
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