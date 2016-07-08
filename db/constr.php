<?php
//session_start(); 
$con = @mysqli_connect("localhost","root","","movie_db");
if(!$con)
{
	die("connection error");
}
function input($controlname)
{

	if(isset($_REQUEST[$controlname]))
		return $_REQUEST[$controlname];
	else
		return "";
}
 ?>