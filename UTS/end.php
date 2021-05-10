<?php
	session_start();
	include "config.php";
 
    $id = mysqli_num_rows(mysqli_query($mysqli , "SELECT * FROM play"));
    $row=$id+1;
	$result=mysqli_query($mysqli , "INSERT INTO play set nama='".$_SESSION['nama']."', email='".$_SESSION['email']."', skor='".$_SESSION['skor']."', id='".$row."'");

?>

<!DOCTYPE html>
<html>
<head>
	<title>GameMath</title>
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
        table{
        	text-align: center;
        	background-color: #7782a3;
        	border-color: black;
        	margin: auto;
        }
        td{
        	background-color: #a4abbf;
        }
    </style>
</head>
<body>
	<br/><br/><br><br>
	<fieldset>
		<legend><h1>GameMath</h1></legend>
		<label>Hello <?php echo $_SESSION['nama'];?>, Sayang Permainan Sudah Selesai. Semoga Kali Lain Bisa Lebih Baik !</label>
		<br>
		<label>Lives : <?php echo $_SESSION['lives'];?></label>
		<br>
		<label>Skor : <?php echo $_SESSION['skor']; ?></label>
		<br><br>
		<a href="index.php"> Main Lagi </a>

		<table border="1" >
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Skor</th>
			</tr>
		</thead>
		
		<?php
			$urutan = 1;
			$sql = mysqli_query($mysqli , 'SELECT * FROM play ORDER BY skor DESC');
			while ($row = mysqli_fetch_array($sql) AND $urutan < 11){
				echo '<tr>
						<td>'.$urutan.'</td>
						<td>'.$row['nama'].'</td>
						<td>'.$row['skor'].'</td>
					</tr>';
				$urutan++;
			}
		?>
	</table>
	</fieldset>
<br><br><br><br><br>
<p text	align="center">&copy; 2021 GameMath</p>
</body>
</html>