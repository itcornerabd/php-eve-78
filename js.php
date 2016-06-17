<html>
	<head>
		<title>
			javascript demo
		</title>
	</head>
	<body>
		<input type="button" value="click" onclick="foo()" >
		<input type="text" id="txt1" onkeyup="foo()" >
		<input type="text" id="txt2" >
		<span id="span1" onmouseover="foo1()"></span>
	</body>
</html>
<script>
	function foo()
	{
		//alert('button clicked');
		//firebug	

		// var a=  document.getElementById('txt1').value
		// document.getElementById('span1').innerHTML= "hello "+ a;
		var txt1 = document.getElementById('txt1').value;
		var txt2= document.getElementById('txt2').value;
		console.log(txt1*txt2);

		var sum  = parseInt(txt1)+parseInt(txt2);
		document.getElementById('span1').innerHTML=sum; 
	}

	function foo1()
	{
		document.getElementById('span1').innerHTML="";
	}

	var i=10;
	console.log( "i="+ i  );
	var j=i+10;
	var k = j*10;
	console.log(j);


</script>