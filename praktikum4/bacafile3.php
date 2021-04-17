<!DOCTYPE html>
<html>
<head>
	<title>Praktikum4</title>
</head>
<body>
	<?php 
	//function untuk konversi umur
 	function umur($tgl){
 		$tglSekarang=date('Y-m-d');
 		$pecah1= explode("-", $tglSekarang);
 		$date1=$pecah1[2];
 		$month1=$pecah1[1];
 		$year1=$pecah1[0];

		$pecah2= explode("-", $tgl);
 		$date2=$pecah2[2];
 		$month2=$pecah2[1];
 		$year2=$pecah2[0];

 		$sjd1=GregorianToJD($month1, $date1, $year1);
 		$sjd2=GregorianToJD($month2, $date2, $year2);

 		$selisih=$sjd1-$sjd2;
 		$umur=ceil($selisih/365);

 		return $umur;
 	}


	echo "<center>";
	echo "<h1>DATA MAHASISWA</h1>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>No</td><td>NIM</td><td>Nama Lengkap</td><td>Tgl Lahir</td><td>Tempat lahir</td><td>Umur</td>";
	echo "<tr>";
	
	//membuka file
 	$namaFile="datamhs.dat";
	$myfile =fopen($namaFile, "r") or die("Tidak bisa buka file!");
	$urutan = 0;

	while (!feof($myfile)) {
		$buka =fgets($myfile);
		$batas =explode("|", $buka);
		$urutan++;
		echo "<tr>";
			echo "<td>" .$urutan. "</td>";
			echo "<td>" .$batas[0]. "</td>";
			echo "<td>" .$batas[1]. "</td>";
			echo "<td>" .$batas[2]. "</td>";
			echo "<td>" .$batas[3]. "</td>";
			echo "<td>" .umur($batas[2],date('Y-m-d')). "</td>";
		echo "</tr>";
		
	}

	echo "</table>";
	echo "Jumlah Mahasiswa: ".$urutan;
	echo "</center>";


	
	fclose($myfile);
  ?>

	
</body>
</html>