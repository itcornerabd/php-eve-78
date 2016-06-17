<?php 
	
	var_dump($_POST);

	if(isset($_GET['id']))
		echo "id is ".$_GET['id'];

	if(isset($_GET['name']))
		echo "<br>name is ".$_GET['name'];   
	

	if(isset($_REQUEST['txtname']))
		echo "<br> name is ".$_REQUEST['txtname'];

	if(isset($_POST['txtpassword']))
		echo "<br> password is ".$_POST['txtpassword'];			

	if(isset($_POST['txtaddress']))
		echo "<br> address is ".$_POST['txtaddress'];			

	if(isset($_POST['selcity']))
		echo "<br> City is ".$_POST['selcity'];			

	if(isset($_POST['radgender']))
		echo "<br> Gender is ".$_POST['radgender'];			

	if(isset($_POST['chkhobby1']))
		echo "<br> Hobby is ".$_POST['chkhobby1'];			
	
	if(isset($_POST['chkhobby2']))
		echo "<br> Hobby is ".$_POST['chkhobby2'];			
	
	if(isset($_POST['chkhobby3']))
		echo "<br> Hobby is ".$_POST['chkhobby3'];			
	
	if(isset($_POST['chk']))
		{
			$chk = $_POST['chk'];
			foreach($chk as $index=> $value)
			{
				echo " <br> hobby is  ".$value;
			}

		}

 ?>