<?php 
    session_start();
    include "config.php";

    if(isset($_POST['nama'])){
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['nyawa'] = 5;
        $_SESSION['skor'] = 0;
        header("Location: soal.php");
    }
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
	<form action="" method="POST">
        <fieldset>
            <legend ><h1>GameMath</h1></legend>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <br><br><br>
            <label>Email</label>
            <td><input type="email" name="email" placeholder="Alamat Email" required>
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>

<br><br><br><br><br>
<p text align="center">&copy; 2021 GameMath</p>
</body>
</html>
