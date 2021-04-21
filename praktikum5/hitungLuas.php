<?php 
	$nama =$_GET['n'];
	$diameter =$_GET['d'];
	$tinggi =$_GET['t'];

	$jarijari =$diameter/2;
	$pi =3.14;
	$luas = 2*$pi*$jarijari*($jarijari+$tinggi);
	echo "Tabung   :$nama <br> 
		  Diameter :$diameter <br> 
		  Tinggi   :$tinggi <br> 
		  Luasnya  = $luas Satuan Luas";
?>