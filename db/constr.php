<?php 
$con = @mysqli_connect("localhost","root","","movie_db");
if(!$con)
{
	die("connection error");
}
function input($controlname)
{

	if(isset($_POST[$controlname]))
		return $_POST[$controlname];
	else
		return "";
}
 ?>