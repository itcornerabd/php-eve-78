<?php 
	date_default_timezone_set("Asia/Kolkata");
	echo date('Y-M-d h:i:s A');		


	$a = array(67,87,2,56);

	//var_dump($a);
	//print_r($a);
	echo " size of array =".count($a);
	sort($a); //asort = for preserving index
	var_dump($a);
	rsort($a);//arsort = for preserving index
	var_dump($a);

	var_dump(in_array(45, $a));	
	var_dump(array_search(45, $a));
	
	$str = implode(",",$a); // join
	echo $str;

	$newarray = explode(",", $str);// split
	var_dump($newarray);

	$name = "Ram Ganesh Gadkari";	

	$namearray = explode(" ", $name);

		var_dump($namearray);
	echo $namearray[0]." ".$namearray[2];
	
	$date = "13/07/2016"; // yyyy-mm-dd;
	$datearray= explode("/",$date);
	//var_dump($datearray);
	$dbdate = $datearray[2]."-".$datearray[1]."-".$datearray[0];
	echo $dbdate;	


 ?>