<html> 
<head> 
    <title>Add Mahasiswa</title> 
</head> 
 
<body> 
    <a href="index.php">Kembali</a> 
    <br/><br/> 
 
    <form action="add.php" method="post" name="form1"> 
        <table width="25%" border="0"> 
            <tr>  
                <td>Name</td> 
                <td><input type="text" name="name"></td> 
            </tr> 
            <tr>  
                <td>Email</td> 
                <td><input type="email" name="email"></td> 
            </tr> 
            <tr>  
                <td>Telepon</td> 
                <td><input type="number" name="mobile"></td> 
            </tr> 
            <tr>  
                <td>Alamat</td> 
                <td><input type="text" name="addr"></td> 
            </tr> 
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="gender" value="pria">Pria</td>
                <td><input type="radio" name="gender" value="wanita">Wanita</td>
            </tr>
            <tr>  
                <td>Tempat Lahir</td> 
                <td><input type="text" name="place"></td> 
            </tr> 
            <tr>  
                <td>Tanggal Lahir</td> 
                <td><input type="date" name="born"></td> 
            </tr> 
            <tr>  
                <td></td> 
                <td><input type="submit" name="Submit" value="Add"></td>             </tr> 
        </table> 
    </form> 
 
    <?php 
    include('./config.php');
        // Cek apakah ada parameter $_POST yang terisi, jika iya masukkan dalam DB. 
    if(isset($_POST['Submit'])) {         
        $name = $_POST['name']; 
        $email = $_POST['email'];         
        $mobile = $_POST['mobile'];
        $alamat = $_POST['addr']; 
        $gender = $_POST['gender']; 
        $tempat = $_POST['place']; 
        $ttl = $_POST['born']; 

 
        // include database          include_once("config.php"); 
 
        // Insert data 
        $result = mysqli_query($mysqli, "INSERT INTO 
karyawan(nama,email,telepon,alamat,jenis_kelamin,tempat_lahir,tanggal_lahir) VALUES('$name','$email','$mobile','$alamat','$gender','$tempat','$ttl  ')"); 
 
// Menampilkan data telah berhasil 
echo "Mahasiswa berhasil ditambahkan! <a href='index.php'>View 
Mahasiswa</a>"; 
} 
    ?> 
</body> 
</html> 
