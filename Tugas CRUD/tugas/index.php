<?php 
// Membuat koneksi dengan config.php include_once("config.php"); 
 
// Fetch semua mahasiswa dari DB 
include('./config.php');
$result = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id_karyawan 
DESC"); 
?> 
 
<html> 
<head>     
    <title>Homepage</title> 
</head> 
 
<body> 
<a href="add.php">Add Karyawan</a><br/><br/> 
 
    <table width='80%' border=1> 
 
    <tr> 
        <th>Nama</th> <th>Email</th> <th>Telepon</th> <th>Alamat</th> <th>Jenis Kelamin</th> <th>Tempat Lahir</th><th>Tanggal Lahir</th> <th>Update</th> 
    </tr>     <?php   
    while($user_data = mysqli_fetch_array($result)) {                  
        echo "<tr>"; 
        echo "<td>".$user_data['nama']."</td>";         
        echo "<td>".$user_data['email']."</td>";         
        echo "<td>".$user_data['telepon']."</td>";
        echo "<td>".$user_data['alamat']."</td>";   
        echo "<td>".$user_data['jenis_kelamin']."</td>";   
        echo "<td>".$user_data['tempat_lahir']."</td>";   
        echo "<td>".$user_data['tanggal_lahir']."</td>";    
        echo "<td><a href='edit.php?id_karyawan=$user_data[id_karyawan]'>Edit</a> | <a href='delete.php?id_karyawan=$user_data[id_karyawan]'>Delete</a></td></tr>";         
    } 
    ?> 
    </table> 
</body> 
</html> 
