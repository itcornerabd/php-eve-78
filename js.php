<html>
	<head>
		<title>
			javascript demo
		</title>
	</head>
	<body>
		<input type="button" value="click" onclick="btnclick()" >
		<input type="text" id="txt1" onkeyup="foo()" >
		<input type="text" id="txt2" >
		<span id="span1" onmouseover="foo1()"></span>
		<hr>
		<input type="button" value="start" onclick="starttimer()">
		<input type="button" value="stop" onclick="stoptimer()">
		<span id="timerspan">1</span>
	</body>
</html>
<script>
	var timer ;
	var i= 5000;
	function stoptimer()
	{
		clearInterval(timer);
	}
	function starttimer()
	{
		 var min = 0;
		 var sec=0;
		 var hr =0; 
		 timer= setInterval(function(){
			i--;
			console.log(i)
			hr = parseInt(i/3600);//1 	
			min = parseInt((i-(hr*3600))/60)
			sec = i%60; //20
			// min = parseInt(i/60);
			// var temp = min;
			// hr = parseInt(temp/60);
			// min=temp%60;
			document.getElementById('timerspan').innerHTML=hr +":"+ min + ":" + sec ;



			if(i==0)
				stoptimer();

		}, 1000 );
	}

	function btnclick()
	{
		setTimeout( function(){
			alert('from anonymous function')
		} , 5000 );
	} 

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

	// var i=10;
	// console.log( "i="+ i  );
	// var j=i+10;
	// var k = j*10;
	// console.log(j);


</script>