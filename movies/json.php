<?php 
require '../db/constr.php';
$movies = [];
$movies['Status']= "success";
$movies['data']=[];


$query = "select * from tbl_movie where ID is not null   ";

if(isset($_POST['moviename']))
{
	$query .=" and Name like '%".$_POST['moviename'] ."%' "  ;
}

if(isset($_REQUEST['CategoryID']))
{
	$query .=" and CategoryID = ".$_POST['CategoryID'] ." "  ;
}

if(isset($_REQUEST['actor']))
{
	$query .=" and Actor like '%".$_POST['actor'] ."%' "  ;
}




$rows = mysqli_query($con,$query);

if(!$rows)
	{
		//die("query error");
		$movies['Status']= "fail";
		$movies['msg']="query error";	
	}

else
{
	while($rs=mysqli_fetch_array($rows))
	{
		$movies['data'][]=$rs;
	}
}

	echo json_encode($movies);
 
	


 ?>










