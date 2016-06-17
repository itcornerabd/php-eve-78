<?php 

$a = array( array(12,54) ,array(43,76,79)  );

var_dump($a);


	for ($i=0; $i<count($a) ; $i++) 
	{ 
		for ($j=0; $j<count($a[$i]) ; $j++)
		{ 
			echo $a[$i][$j]."<br>";
		}
	}


$a = array(array(6=>12,8=>54) ,array(12=>43,3=>76,9=>79)  );

var_dump($a);

	foreach ($a as $key => $value)
	{
		foreach ($value as $key1 => $value1)
		{
			echo "<br>". $value1;
		}
	}
// 6*12 + 8*54 + 

 ?>