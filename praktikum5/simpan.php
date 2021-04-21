<?php 
if (isset($_POST['submit'])) {
	//baca
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$tgllhr=$_POST['tgllhr'];
	$tmptlhr=$_POST['tmptlhr'];

	$namaFile="datamhs.dat";
	$myfile =fopen($namaFile, "a") or die("Tidak bisa buka file!");
	$in =$nim."|".$nama."|".$tgllhr."|".$tmptlhr;
	$in ="\r\n".$in;
	fwrite($myfile, $in); 

	fclose($myfile);
	echo "Data Berhasil di Inputkan";
	

}else{
	echo "Data Tidak Teridentifikasi, Coba Cek Kembali";
}
 ?>  