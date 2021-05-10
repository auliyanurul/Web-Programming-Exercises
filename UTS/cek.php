

<?php  
    session_start();
    include "config.php";
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
<?php 
     if(isset($_POST["submit"])){
        if($_POST["total"] == $_SESSION['hasil']){
            $_SESSION['skor'] += 10 ;
?>
            <form action ="cek.php" method="post">
                <fieldset>
                    <legend><h1>GameMath</h1></legend>
                    <label>Hello <?php echo $_SESSION['nama'];?>, Selamat jawaban Anda benar</label>
                    <br>
                    <label>Lives : <?php echo $_SESSION['lives'];?></label>
                    <br>
                    <label> Skor : <?php echo $_SESSION['skor']; ?></label>
                    <br>
                    <a href="soal.php"> Next </a>
                </fieldset>
            </form>
<?php 
        } else {
            $_SESSION['skor'] -=2 ;
            $_SESSION['lives'] -=1  ;
            if ($_SESSION['lives']>0) {    
?>

            <form action ="cek.php" method="post">
                <fieldset>
                    <legend>GameMath</legend>
                    <label>Hello <?php echo $_SESSION['nama'];?>, Sayang jawaban Anda Salah...tetap semangat ya!</label>
                    <br>
                    <label>Lives : <?php echo $_SESSION['lives'];?></label>
                    <br>
                    <label>Skor : <?php echo $_SESSION['skor']; ?></label>
                    <br>
                    <a href="soal.php"> Next </a>
                </fieldset>
            </form>
<?php 
        } else{
                header("Location: end.php");
            }
        }
    }  
 ?>
<br><br><br><br><br>
<p text align="center">&copy; 2021 GameMath</p>
</body>
</html>