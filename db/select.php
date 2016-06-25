<?php
	require('constr.php');

	$usercity = 2;



 ?>
<html>
	<head>
		
	</head>
	<body>	
		<select name="" id="">
			<option value="">Select category </option>
			
			<?php 
				$category = "select * from tbl_category Order by Name";
				$rows= mysqli_query($con,$category);
				if(!$rows)
				die(" select category query error 26");
				while($rs=mysqli_fetch_array($rows))
				{	?>
					
					<option value="<?php echo $rs['id'] ?>"
					<?php if($usercity==$rs['id']) {echo "selected";}  ?> 
						 	
						><?php echo $rs['Name'] ?></option>
				
				<?php

				}



			 ?>	

			</select>


	</body>
</html>