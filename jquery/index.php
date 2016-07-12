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
		.orange
		{
			background-color: orange;
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

	<input type="button" value="click here for yellow" id="btnyellow" class="btncls" data-class="yellow"  >
	<input type="button" value="red" id="btnred" data-class="red" class="btncls" >
	
	<input type="button" value="orange" class="btncls" data-class="orange" >

	


<hr>

<input type="text" id="txt1" class="addclss" value="0">+
<input type="text" id="txt2" class="addclss" value="0">=
<input type="text" id="txt3" value="0">



		
	</body>	

</html>

<script src="./jquery.js"></script>
<script>

	$(".addclss").keyup(function(){

		var txt1 = $("#txt1").val();
		var txt2 = $("#txt2").val();
		var sum = parseInt(txt1) + parseInt(txt2);
		$("#txt3").val(sum);

	})

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
	
	// $("tr:last").addClass('yellow');

	// $("tr:first").addClass('red');

	// $("tr:eq(2)").addClass('yellow');

	// $("table:nth-child(4)").addClass('red');

	// $("td:nth-child(3)").addClass('yellow');


	$(document).ready(function(){


		$("#btnyellow").click(function() {
			$("table").removeClass(); // remove all
			$("table").addClass('yellow');

		 })

		$("#btnred").click(function() {
			$("table").removeClass('yellow'); //remove given class
			$("table").addClass('red');

		 })

		$(".btncls").click(function(){

			//alert($(this).attr('type'))
			var cls = $(this).attr('data-class') ;
			$("table").removeClass();
			$("table").addClass(cls);

		})
		//click mouseover mouseout keyup blur change checked  
		$("tr").mouseover(function(){

			$(this).addClass('yellow');	
		})
		$("tr").mouseout(function(){

			$(this).removeClass('yellow');	
		})


	})//$(document).ready(function(){

</script>



 




 