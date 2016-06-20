<?php 
	
	$fruits = array("mango","apple");
	//  php embedded in Html
	// generate html from php  
	$sizeoffruits = count($fruits);
 ?>
<html>
	<head>
		<title>List </title>
	</head>
	<body>

		No Of fruits : <?php echo $sizeoffruits;  ?>
	<hr>
		<?php if($sizeoffruits>0){ ?>
		Fruits List :- 
		<?php } ?>
		<ul>
			<?php
			 foreach ($fruits as $value )
			{
				?>
					 <li><?php echo $value; ?></li>
				<?php 
			} 
			?>
		</ul>	
		<?php 
			echo "<ul>";
			foreach ($fruits as  $value)
			{
				echo "<li>$value</li>";
			}
			echo "</ul>";
		 ?>



	</body>
</html>