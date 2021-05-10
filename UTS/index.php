<?php 
	session_start();
	include_once("config.php"); 

	$result=mysqli_query($mysqli, "SELECT * FROM play ORDER BY id DESC LIMIT 1");
	$urutan=1;
	foreach ($result as $row) {
		$_SESSION['nama']=$row['nama'];
		$_SESSION['email']=$row['email'];
		$urutan++;
	}

	if ($_SESSION['nama'] !=$row['nama']) {
		header("Location: login.php");
	} 

	$_SESSION['lives']=5;
	$_SESSION['skor']=0;
	$_SESSION['nama']=$row['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<style>
		body{
			background-color: #d4ecdb;
		}
		fieldset {
             background-color: #fcba03;
             margin: auto;
             width: 500px;
             border-color: #6e5880;
             border-width: 25px;
             text-align-last: 
        }
	</style>
</head>
<body>
	<br/><br/><br><br>
	<form action="soal.php" method="post">
		<fieldset>
			<legend ><h1>GameMath</h1></legend>
			<label>Hallo, <?php echo $_SESSION['nama'];?> Selamat Datang di GameMath!</label>
			<br>
			<a href="soal.php"> Klik Disini </a>
			<br><br>
			<label>Bukan Saya?</label>
			<br>
			<a href="login.php"> Klik Disini </a>
	</fieldset>
	</form>
<br><br><br><br><br>
<p text	align="center">&copy; 2021 GameMath</p>
</body>
</html>