<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Game Matematika</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include('./dbconnect.php');
$nama = $_COOKIE['nama'];
if(isset($_COOKIE['nama'])){
    if($_SESSION['lives']==0){
        echo ('Hello,'.$nama.' Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.');
        echo ('Score anda : '.$_SESSION['score']);
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO player (nama, Score) VALUES ('{$_COOKIE['nama']}', {$_SESSION['score']})";
            if($conn->query($sql) === TRUE){
                echo "<br/>Berhasil Menyimpan Skor";
            }else {
                die ("Error: " . $sql . "<br>" . $conn->error);
            }
            $conn->close();
            header('location:hof.php');
    }
    else{
        $hasil = $_SESSION['bil1'] + $_SESSION['bil2'];
        echo '<div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5>Hello '.$nama.' tetap semangat ya… you can do the best!! </h5>
                            </div>
                        </div>
                        <hr>
                            <center><h5>Lives : '.$_SESSION['lives'].' | Score : '.$_SESSION['score'].'</h5>
                        <hr>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <form  method="post">                                
                             <input type="text" class="form-control" placeholder="Berapakah '.$_SESSION['bil1'].' + '.$_SESSION['bil2'].' =" disabled>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" name="jawab" placeholder="Jawab">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-secondary" name="tebak">Submit</button>
                            </form>    
                    </div>                    
                </div> ';
        if(isset($_POST['tebak'])){
            if($_POST['jawab']==$hasil){
                $_SESSION['score'] += 10;
                echo('<hr>
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Hello '.$nama.' Selamat jawaban Anda benar…</h5>
                                Lives : '.$_SESSION['lives'].' | Score : '.$_SESSION['score'].'  
                        </div>
                    </div>
                      ');
            }
            else{
                $_SESSION['score'] -= 5;
                $_SESSION['lives'] -= 1;
                echo('<hr>
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Hello '.$nama.' sayang jawaban Anda salah… tetap semangat ya !!!</h5> 
                                Lives : '.$_SESSION['lives'].' | Score : '.$_SESSION['score'].'  
                        </div>
                    </div>');
            };
            $_SESSION['bil1']  = random_int ( 0,20 );
            $_SESSION['bil2']  = random_int ( 0,20 );
            echo('<hr><center><a href="game.php" class="btn btn-secondary">Soal Selanjutnya</a></center>');
        }
    }
}
    else{
        header("Location:welcome.html");
    };
?>
</body>
</html>