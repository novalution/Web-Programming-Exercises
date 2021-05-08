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
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM `player` ORDER BY `player`.`score` DESC";
    $res = $conn->query($sql);
    $index = 1;
    echo("
        <div class='container'>
            <h2>Hall Of Fame</h2>
                <table class='table table-bordered'>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Skor</th>
                </tr>");
    if ($res->num_rows >0){
        while($row = $res->fetch_assoc()){
            echo("<tr>
                <td>$index</td>
                <td>{$row['nama']}</td>
                <td>{$row['score']}</td>
            </tr>");
            $index ++;
        }
    }
    echo("</table>");
    echo('<hr><center><a href="logout.php" class="btn btn-secondary">Main Lagi</a></center></div>');


?>
</body>
</html>