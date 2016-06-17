<?php 	
	include_once('inc.php');	
	
	//require('inc1.php');
	
	include_once('inc.php');	
	
	//require_once('inc1.php');


// user defined function 
//library function 

$p = 1000;
$r = 2 ; 
$t = 2;

echo calculate_si($p,$r,$t);


echo "<br>". calculate_si(1000,3);
echo "<br>". calculate_si();
echo "<br>". calculate_si(2000,3,2);
echo "<br>". calculate_si(3000,3,2);
echo "<br>". calculate_si(2000,2,3);

 ?>