<?php 
	$fruits= array( array("id"=>"101", "name"=>"mango", "rate"=>40,"location"=>"ratnagiri" ),
		array("id"=>"305", "name"=>"orange", "rate"=>60,"location"=>"nagpur" ),
		 array("id"=>"509", "name"=>"apple", "rate"=>80,"location"=>"kashmir" )
		)  ; 
	// id , name , rate , location

	//var_dump($fruits);
 ?>
<html>
	<head>
		<title>Fruits table</title>
	
	<style>
		table,tr,td,th
		{
			border:1px solid black;
			border-collapse: collapse;
		}
		table
		{
			width: 500px;
		}

	</style>	

	</head>
	<body>
		
		<table align="center">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Rate</th>
				<th>Location</th>
			</tr>
			<?php  foreach ($fruits as $value) 

			{ ?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['rate']; ?></td>
				<td><?php echo $value['location']; ?></td>
			</tr>
			<?php } ?>
		</table>
	<hr>
			<table align="center">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Rate</th>
				<th>Location</th>
			</tr>
			<?php  foreach ($fruits as $value) 

			{  
				?>
			<tr>
				<?php 
						foreach($value as $value1)
						{ ?>
						<td><?php echo $value1 ?></td> 
						<?php 
						}	
				 ?>	
			</tr>

			<?php
			}


			 ?>
		</table>
	<hr>
	<?php 

		echo "<table align='center'> ";
		echo "<tr><th>ID</th><th>Name</th><th>Rate</th><th>Location</th></tr>";
	
		foreach($fruits as $value)
		{
			echo "<tr>";
			printf("<td>%s</td>",$value['id']); //;
			printf("<td>%s</td>",$value['name'] );
			printf("<td>%s</td>",$value['rate'] );
			printf("<td>%s</td>",$value['location'] );
			echo "</tr>";
		}
		echo "</table>";

	 ?>


	</body>
</html>
