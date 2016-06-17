<?php 
$a=10;

foo();

echo "<br>".$a;


function foo()
{
	global $a;
	$a=20;
	echo $a;
}

 ?>