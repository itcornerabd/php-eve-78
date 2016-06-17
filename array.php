<?php 
	
	$a = array(5,7,9);

	echo $a[1];
	var_dump($a);
	//print_r($a);

	$a[]=11;
	//var_dump($a);

	$count=  count($a);
	echo "<br> size of array is ".$count;

	$fruits = array("mango","apple","orange");

	//var_dump($fruits);

	for ($i=0; $i<count($fruits); $i++)
	{ 
		echo "<br>".$fruits[$i];
	}

	$fruits = array("first"=>"mango","second"=>"apple","third"=>"orange");
	//associative array
	var_dump($fruits);

	foreach($fruits as $index=>$value)
	{
		echo "<br>".$index ." == " .$value;	
	}

 ?>