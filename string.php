<?php 

$str = "Hello world Hello" ;

echo $str;

$len = strlen($str);
echo "<br> length of string is ".$len;

echo  "<br>" . strtoupper($str);
echo  "<br>" . strtolower($str);

echo "<br> ".strrpos($str, "Hello",5);



if (strripos($str,"hello")>-1) // strpos -case sensative  stripos- case insensative
{
	echo "found".strpos($str, "Hello");
}
else
{
	echo "not found";
}

echo "<br>". str_replace("world", "PHP", $str); //case sensative

echo "<br>". str_ireplace("World", "PHP", $str); //case in sensative

echo "<br>". substr($str,6,5);	

$str1 = "Hello";
$str2="hello";

	echo "<br>";
if(strcasecmp($str1, $str2)==0) // strcmp - case sensative strcasecmp - case insensative
{
	echo "strings are equal";
}
else
{	echo "strings are not equal";
}

	$name = "param soundane";

	$spacepos = strpos($name, " ");//9
	$strlen= strlen($name);//17
	echo "<br> firstname = ".substr($name,0,$spacepos);
	echo "<br> lastname = ".substr($name,$spacepos+1, $strlen-$spacepos );


 ?>