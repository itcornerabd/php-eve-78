~<?php 

	$a=1;

	if($a>=10)
	{
		$b=10;
	}


	if(isset($b))
		echo " b is defined  & VALUE IS ".$b;
	else
		{
			echo "b is undefined";
			//exit(1788);
			die("sorry we  cant process your request");
		}

	echo "<br>";

	if(is_int($b))
		echo "b is integer";
	else
		echo "b is not integer";

	echo "<br>";
	if(is_numeric($b))
		echo "b is numeric";
	else
		echo "b is not numeric";

	//isset 
	//is_int
	//is_numeric
	//exit
	//die
	//is_array
	//is_string
	//is_bool
	// 

 ?>