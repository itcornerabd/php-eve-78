<?php 
		function simple_interest($p,$r=2,$t=3)
	{
		$si = $p*$r*$t/100;
		
		return $si;	

	}

	function calculate_si($p=1000,$r=3,$t=2)
{
	$si = $p*$r*$t/100;
	return $si; 
}

include ('fun1.php');


 ?>