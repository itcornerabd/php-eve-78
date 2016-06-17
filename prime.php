<?php 
	
	// 18 2 X  9 4
	// 25 2 3 4 5 X  13 
	// 17 2 3 4 .... 16  8 prime    4 
	// sqrt() 
$no =16;

$flag = true;

	for($i=2;$i<$no/2;$i++)
	{
		if($no%$i==0)
			{
				// echo " <br> divided by ".$i;
				// $flag =false;
				// break;
				echo "no is not prime";
				exit();
			}
	}
echo "no is prime";
	// if($flag)
	// 	echo "no is prime";
	// else
	// 	echo "no is not prime";

	


 ?>