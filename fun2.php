<?php 
	
$a=10;
foo($a);

echo "<br>".$a;


function foo(&$i)
{
	$i=20;
	echo $i;
}


 ?>