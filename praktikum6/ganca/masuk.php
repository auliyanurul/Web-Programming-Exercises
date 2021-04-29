<?php 
	session_start();
	$_SESSION['random'] =rand(0,3);
?>

<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
	<h1>Tebak Angka</h1>
	<?php
	    echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda tebak!!!</p>" ;
	?>
	<form method="post" action="acak.php">
		<input type="text" name="tebak">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>