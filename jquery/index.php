<html>
	<head>
		<title>
			Jquey Demo
		</title>



	<style>
		table,tr,td
		{
			border-collapse: collapse;
			border:1px solid black;
		}
		.cls
		{
			background-color:yellow; 
		}
		.red
		{
			background-color: red;
			color:white;
		}
		.yellow
		{
			background-color:yellow;
		}

	</style>

	</head>	

	<body >
				<span class="demo"> span text </span>

			<table align="center" >
				<tr  class="demo">
					<td>1</td>
					<td>PK </td>
					<td>Action</td>
					<td>Amir khan12</td>
					<td>Anushka Sharma123</td>
					<td>2015-02-15</td>
				</tr>
				
				<tr >
				<td>2</td>
				<td>Agnipath</td>
				<td>Action</td>
				<td>Hritik</td>
				<td>Priyanka</td>
				<td>2016-06-13</td>

				<tr> 
				
				<td>3</td>
				<td>Andaz Apna Apna</td>
				<td>Comedy</td>
				<td>Amir</td>
				<td>Ravina</td>
				<td>2016-02-15</td>
				</tr>
				<tr >
				<td>23</td>
				<td>asd12</td>
				<td>Action</td>
				<td>asdasdasd</td>
				<td>asdasd</td>
				<td>2015-02-21</td>
				</tr>
				<tr class="demo" ID="lastrow" >
				<td>24</td>
				<td>new Movie</td>
				<td>Comedy</td>
				<td>asda</td>
				<td>asd</td>
				<td>2015-02-21</td>
			</tr>
			</table>

<hr>

			<table align="center" >
				<tr  class="demo">
					<td>1</td>
					<td>PK </td>
					<td>Action</td>
					<td>Amir khan12</td>
					<td>Anushka Sharma123</td>
					<td>2015-02-15</td>
				</tr>
				
				<tr >
				<td>2</td>
				<td>Agnipath</td>
				<td>Action</td>
				<td>Hritik</td>
				<td>Priyanka</td>
				<td>2016-06-13</td>

				<tr> 
				
				<td>3</td>
				<td>Andaz Apna Apna</td>
				<td>Comedy</td>
				<td>Amir</td>
				<td>Ravina</td>
				<td>2016-02-15</td>
				</tr>
				<tr >
				<td>23</td>
				<td>asd12</td>
				<td>Action</td>
				<td>asdasdasd</td>
				<td>asdasd</td>
				<td>2015-02-21</td>
				</tr>
				<tr class="demo" ID="lastrow" >
				<td>24</td>
				<td>new Movie</td>
				<td>Comedy</td>
				<td>asda</td>
				<td>asd</td>
				<td>2015-02-21</td>
			</tr>
			</table>


	</body>	

</html>

<script src="./jquery.js"></script>
<script>
	//$("td").addClass('yellow'); //element wise selector
	//$(".demo").addClass('yellow'); //class selector
	//$("#lastrow").addClass('yellow'); //ID selector

	// $("tr:even").addClass('yellow');
	//counting starts from 0  irrespective parent
	// $("tr:odd").addClass('red');

	// $("tr:nth-child(odd)").addClass('yellow');
	// //counting starts from 1 respective to parent
	// $("tr:nth-child(even)").addClass('red');
	
	// $("td:contains(Comedy)").next().next().prev().next().addClass('yellow');		
		// $("td:contains(Comedy)").prevAll().nextAll().addClass('yellow');		

	//$("td:contains(Comedy)").parent().addClass('yellow');
	
	$("tr:last").addClass('yellow');

	$("tr:first").addClass('red');

	$("tr:eq(2)").addClass('yellow');

	$("table:nth-child(4)").addClass('red');

	$("td:nth-child(3)").addClass('yellow');
</script>



 




 