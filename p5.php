<!DOCTYPE html>
<html>
<head>
	<title>Calculation</title>
</head>

<body>
   <center>
	<h1>ARITHMETIC OPERATIONS</h1>
	<h3>Option:1 = Addition</h3>
	<h3>Option:2 = Subtraction</h3>
	<h3>Option:3 = Multiplication</h3>
	<h3>Option:4 = Division</h3>
	
	<form method="post">
		<table border="3">
			<tr>
				<td> <input type="text" name="num1" value="" placeholder="Enter num1"/>
				</td>
			</tr>

			<tr>
			<td> <input type="text" name="num2" value="" placeholder="Enter num2"/>
				</td>
			</tr>

			<tr>
				<td> <input type="text" name="option" value=""
					placeholder="Select Option"/>
				</td>
			</tr>

			<tr>
				<td> <input type="submit" name="submit"
					value="Submit"/>
				</td>
			</tr>
		</table>
	</form>
</center>

<?php

// Checking submit condition
if(isset($_POST['submit'])) 
{
	$x = $_POST['num1'];
	$y = $_POST['num2'];
	$ch = $_POST['option'];
	switch($ch) 
	{
		case 1:	$r = $x + $y;
			echo " Addition of two numbers = " . $r ;
			break;

		case 2:	$r = $x - $y;
			echo " Subtraction of two numbers= " . $r ;
			break;

		case 3:	$r = $x * $y;
			echo " Multiplication of two numbers = " . $r ;
			break;

		case 4:	$r = $x / $y;
			echo " Division of two numbers = " . $r ;
			break;

		default: echo ("invalid option\n");
	}
	return 0;
}
?>
</body>
</html>
