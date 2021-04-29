<?php
    session_start();
    
    echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda tebak!!!</p>" ;
    
    $acak = $_SESSION['random'];
    $tebak = $_POST['tebak'];
    if (isset($_POST['submit'])){
        if ($tebak < $acak){
            echo "Waah... masih salah yaa, bilangan tebakan Anda terlalu kecil";
            ?>
            <form method="post" action="acak.php" >
                <input type="text" name="tebak">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        } else if ($tebak > $acak){
            echo "Waah... masih salah yaa, bilangan tebakan Anda terlalu besar";
        ?>
            <form method="post" action="acak.php">
                <input type="text" name="tebak">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        } else {
            echo "Selamat yaaa.. Anda Benar, saya telah memilih bilangan ".$acak;
            echo "<p><a href='masuk.php'>Coba Lagi</a></p>";
        }

    }
?>