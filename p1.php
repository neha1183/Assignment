<html>
<head>
<title>Random Numbers</title>
</head>
<body>

<?php
	echo "Number generated randomly is:";  
	$choice = rand(1, 100);
	echo $choice;
	echo "<br/>Square root is:";
	echo sqrt($choice);
?>

</body>
</html>
