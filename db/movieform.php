<?php 

	$csrftoken = rand(1000,10000);
	echo $csrftoken;
	$_SESSION['token']=$csrftoken;
 ?>


<form action="<?php echo $redirectURL ?>" method="POST" name="movieinsert" id="movieinsert">		
		<table>
			<tr>
				<th colspan="2">
					<?php echo $msg; ?>
				</th>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="txtname" id="txtname" value="<?php echo $txtname; ?>"  >
<input type="hidden" name="id" value="<?php echo $id; ?>" >
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
					
					<input type="submit" value="<?php echo $btnvalue; ?>">	
					 <?php 

					//if($ACTION=="ADD"){
					// 	printf('<input type="submit" value="ADD"> ');

					// 	}
					// 	else
					// 	{
					// 		printf('<input type="submit" value="UPDATE"> ');

					// 	}

 ?>


		<input type="hidden" name="csrftoken" id="csrftoken" value="<?php echo $csrftoken; ?>" >

				</td>
				
			</tr>
		</table>	
		</form>