<?php 
require '../db/constr.php';
$movies = [];
$movies['Status']= "success";
$movies['data']=[];
$query = "select * from tbl_movie1 order by Name ";

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










