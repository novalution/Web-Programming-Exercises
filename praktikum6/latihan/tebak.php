<?php
    echo ('
            <h1>
                Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!
            </h1>
            <form  method="get">
                Tebakan Anda <input type="text" name="tebak"> <input type="submit" value="tebak">
            </form>    
        ');
    $bil = $_COOKIE['bil'];
    if(isset($_GET['tebak'])){
        $tebak = $_GET['tebak'];
        if($tebak > $bil ){
            echo 'Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.';
        }
        else if($tebak < $bil ){
            echo 'Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.';
        }
        else{
            setcookie('bil','',time() - 3600 , '/');
            echo 'Selamat ya… Anda benar, saya telah memilih bilangan '.$tebak;
            setcookie('bil',rand(0,100),time() + 3600 , '/');
            echo "<p><a href='tebak.php'>Main Lagi</a></p>";
            echo "<p><a href='header.html'>Logout</a></p>";
        }
    };
?>