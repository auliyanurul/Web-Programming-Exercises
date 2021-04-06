 <?php 
 	function hitungDenda($tglHarusKembali, $tglKembali){
 		$pecah1= explode("-", $tglKembali);
 		$date1=$pecah1[2];
 		$month1=$pecah1[1];
 		$year1=$pecah1[0];

		$pecah2= explode("-", $tglHarusKembali);
 		$date2=$pecah2[2];
 		$month2=$pecah2[1];
 		$year2=$pecah2[0];

 		$sjd1=GregorianToJD($month1, $date1, $year1);
 		$sjd2=GregorianToJD($month2, $date2, $year2);

 		$selisih=$sjd1-$sjd2;
 		echo "Terlambat ".$selisih. " Hari ";
 		echo "<br>";
 		echo "Denda yang dibayarkan ". $selisih*3000;
 	}

 hitungDenda("2021-01-03","2021-01-05")
  ?>
