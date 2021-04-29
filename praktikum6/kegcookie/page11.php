<?php
session_start();
include('cek1.php');
echo "<h1>Page 1</h1>";
// menampilkan nama lengkap usernya
echo "<p>Selamat datang ".$_COOKIE['namauser']."</p>";

echo "<h2>Menu Utama</h2>";
echo "<p><a href='page11.php'>Page 1</a> | <a href='page21.php'>Page 2</a> | <a href='page31.php'>Page 3</a> | <a href='logout1.php'>Logout</a></p>";

?>
