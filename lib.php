<?php 

	$a=90;


	if($a>=10)
	{
		$b="10";
	}

	//echo @$b;

	if(isset($b))
		echo $b;
	else
		{
			//echo "b is not defined";
			//exit(0) stop withot print 
			die("error occured"); // print msg 
		}

	if(is_int($b))
		echo "<br> b is a integer";
	else
		echo "<br>b is not integer";

	if(is_numeric($b))
		echo "<br> b is a numeric";
	else
		echo "<br>b is not numeric";

	$c = 10.54;

	echo "<br>".ceil($c);
	echo "<br>".floor($c);
	echo "<br>".round($c);



 ?>