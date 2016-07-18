<html>
	<head>
		<title>
			Ajax Demo
		</title>	
		<link rel="stylesheet" href="../css/style.css">
	</head>	
	<body>
		<table>
			<tr>
				<td>
					<ul id="catlist">
						<li>
							<a href="#" id="comedy">Comedy</a>
						</li>
						<li>
						<a href="#" id="action" >	Action</a>
						</li>

					</ul>
					<form action="index.php" name="searchform" id="searchform">
						name :<input type="text" name="moviename">
						Actor <input type="text" name="actor">	
						<input type="submit" value="search">

					</form>


				</td>
				</tr>
				<tr>
				<td height="50px">
					
					<div id="movielist">
						

					</div>	


				</td>
			</tr>
		</table>	

	</body>

</html>
<script src="../jquery/jquery.js"></script>
<script>
	$("#comedy").click(function(){

		$("#movielist").load('comedy.php')

	})

	// $("#action").click(function(){

	// 	var param = {"category":"Action" , "ID":1 };

	// 	$("#movielist").addClass('yellow');
	// 	$("#movielist").html('please wait')
	// 	$.post('action.php',param,function(moviedata){

	// 		$("#movielist").removeClass('yellow');
	// 		$("#movielist").html(moviedata);
	// 	})	
	// })

	//$.post('page',para,function(data){} , "json")

	$("#action").click(function(){

		var param = {"category":"Action" , "ID":1 };
		var movielistvar = "";
		$.post('json.php',param , function(jsondata){

			if(jsondata.Status=="success")
			{
				movielistvar = "<ul>";

				$.each(jsondata.data, function(key,value){
					movielistvar+= "<li> <img width='100' height='100' src='../db/"+value.photo + "' >  "+value.Name+ "</li>"; 
				})


				movielistvar += "</ul>";

				$("#movielist").html(movielistvar);
			}
			else
			{
				$("#movielist").html('Some Error occured');
				$("#movielist").addClass('red');
			}
			
		},"json")//$("#action").click()

	})

	$("#searchform").submit(function(event){

		event.preventDefault();
 
		var param = $("#searchform").serialize();

		console.log(param);

		$.post('json.php',param , function(jsondata){

			if(jsondata.Status=="success")
			{
				movielistvar = "<ul>";

				$.each(jsondata.data, function(key,value){
					movielistvar+= "<li> <img width='100' height='100' src='../db/"+value.photo + "' >  "+value.Name+ "</li>"; 
				})


				movielistvar += "</ul>";

				$("#movielist").html(movielistvar);
			}
			else
			{
				$("#movielist").html('Some Error occured');
				$("#movielist").addClass('red');
			}
			
		},"json")//$("#action").click()



	})

</script>
