<?php 
	session_start();
	include_once("config.php"); 

	$a=rand(0,20);
	$b=rand(0,20);
	$hasil=$a+$b;
	$_SESSION['hasil']=$hasil
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
    </style>
 </head>
 <body>
 	<br/><br/><br><br>
 	<form action ="cek.php" method="post">
	    <fieldset>
 		<legend><h1>GameMath</h1></legend>
 		<label> Hello <?php echo $_SESSION['nama'];?>, tetap semangat ya, you can the best!</label>
 		<br>
 		<label>Lives : <?php echo $_SESSION['lives'];?> </label>
 		<br>
 		<label> Score : <?php echo $_SESSION['skor']; ?></label>
 		<br><br>
 		<label>Kerjakan Soal  : <?php echo $a; ?> + <?php echo $b; ?></label>
 		<br>
 		<label for="">Jawaban Anda!</label>
	     <input type="text" name="total">
		 <p>
	        <input type="submit" name="submit" value="submit" />
	    </p>
 	</fieldset>
	</form>
<br><br><br><br><br>
<p text	align="center">&copy; 2021 GameMath</p>
 </body>
 </html>