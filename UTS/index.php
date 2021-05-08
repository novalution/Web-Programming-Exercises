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
if(isset($_COOKIE['nama'])){
    echo('<div class="container mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Hallo '.$_COOKIE['nama'].' selamat datang kembali di permainan ini!!!</h5>
                        </div>
                    </div><hr>
                    <center><p><a href="game.php" class="btn btn-secondary">Mulai bermain</a></p>
                    Bukan anda?<a href="logout.php"> Klik Disini</a></center>
                </div>
              </div>
          </div>');
}
else{
    echo('<div class="container mx-auto">
            <form method="post">
                <div class="card">
                    <div class="card-header bg-dark" style="color:white;">
                        <h5>Selamat datang di game Matematika</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            Masukan Nama <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            Masukan Email <input type="email" class="form-control" name="email">
                        </div>
                        <input type="submit" class="btn btn-secondary" name="klik" value="Submit">
                    </div>
                </div>
            </form>
        </div>');
    if (isset($_POST['klik'])){
        $username = $_POST['nama'];
        $email  = $_POST['email'];
        setcookie('nama',$username , time() + 3600 , '/');
        setcookie('email',$email , time() + 3600 , '/');
        header('location:./game.php');
    };
};
$_SESSION['bil1']  = random_int ( 0,20 );
$_SESSION['bil2']  = random_int ( 0,20 );
$_SESSION['lives'] = 5;
$_SESSION['score'] = 0;
?>
</body>
</html>