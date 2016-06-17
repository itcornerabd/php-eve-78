<html>
	<head>
		<title>
			Form Demo
		</title>
		<style>
			table,tr,td
			{
				border:1px solid black;
				border-collapse: collapse;
			}
			table
			{
				width: 500px;
			}

		</style>
	<script >
	var name = "abc";
	document.write ( name) 


	</script>

	</head>
	<body>
		
		<a href="action.php?id=2&name=abc">go to action page</a>

		<form action="action.php" name="demoform" id="demoform" method="POST">
		<table align="Center">
			<tr>
				<td>
					<label for="txtname">
					Name
					</label>
				</td>
				<td>
					<input type="text" name="txtname" id="txtname" size="25" placeholder="enter your name here"       >

				</td>
			</tr>
			<tr>
				<td>
					<label for="txtpassword">
					Password	
					</label>
				</td>
				<td>
					<input type="password" name="txtpassword" id="txtpassword" placeholder="eneter your secret password"   >	
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
				<textarea name="txtaddress" id="txtaddress" ></textarea> 

				</td>
			</tr>
			<tr>
				<td>
					city
				</td>
				<td>
					<select name="selcity" id="selcity"  >
						<option  value="" >--select city--</option>
						<option value="ABD" >Abad</option>
						<option  value="PUN" >Pune</option>
						<option  value="MUM" >Mumbai</option>	
					</select>

				</td>

			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type="radio" name="radgender" id="radgender1" value="MALE"  > 
					<label for="radgender1">	
					Male
					</label>

					<input type="radio" name="radgender" id="radgender2" value="FEMALE"  >
					<label for="radgender2"> FeMale
					</label>
				</td>
			</tr>
			<tr>
				<td>
					Hobbies
				</td>
				<td>
					<input type="checkbox" name="chkhobby1" id="chkhobby1" value="CRICKET"  >
					Cricket
					<input type="checkbox"    name="chkhobby2" id="chkhobby2" value="SING"  >
					Singing
					<input type="checkbox" name="chkhobby3" id="chkhobby3" VALUE="DANCE" >
					Dancing

				</td>
			</tr>
			<tr>
				<td>
					Hobbies
				</td>
				<td>
				<input type="checkbox" name="chk[34]" id="chk1" value="CRICKET"  >
				Cricket
				<input type="checkbox"    name="chk[67]" id="chk2" value="SING"  >
				Singing
				<input type="checkbox" name="chk[23]" id="chk3" VALUE="DANCE" >
				Dancing

				<input type="checkbox" name="chk[15]" value="reading" > reading

				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="button">
					<input type="submit" value="submit">
					<input type="reset" value="reset">

					<button>Button</button>
					


				</td>
			</tr>
		</table>	
		</form>


	</body>
</html>