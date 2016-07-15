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

	$("#action").click(function(){

		var param = {"category":"Action" , "ID":1 };

		$("#movielist").addClass('yellow');
		$("#movielist").html('please wait')
		$.post('action.php',param,function(moviedata){

			$("#movielist").removeClass('yellow');
			$("#movielist").html(moviedata);
		})	
	})

</script>
