<?php 
// include database  include_once("config.php"); 
include('./config.php');
// Cek apakah parameter $_POST terisi, update data jika iya if(isset($_POST['update'])) 
if(isset($_POST['update']))
{    
        $id = $_POST['id_karyawan']; 
        $name = $_POST['name']; 
        $email = $_POST['email'];         
        $mobile = $_POST['mobile'];
        $alamat = $_POST['addr']; 
        $gender = $_POST['gender']; 
        $tempat = $_POST['place']; 
        $ttl = $_POST['born']; 
 
    // update  data 
    $result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$name',email='$email',telepon='$mobile',alamat='$alamat',jenis_kelamin='$gender',tempat_lahir='$tempat',tanggal_lahir='$ttl' WHERE id_karyawan=$id"); 
    header("Location: index.php"); 
    // Redirect kembali ke halaman utama     header("Location: index.php"); 
} 
?> 
<?php 
// Mengambil ID dan menampilkan data berdasarkan ID yang didapat 
$id = $_GET['id_karyawan']; 
 
// Fetch user data  
$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id_karyawan=$id");  
$user_data = mysqli_fetch_array($result);
        $name = $user_data['nama']; 
        $email = $user_data['email'];         
        $mobile = $user_data['telepon'];
        $alamat = $user_data['alamat']; 
        $gender = $user_data['jenis_kelamin']; 
        $tempat = $user_data['tempat_lahir']; 
        $ttl = $user_data['tanggal_lahir']; 
?> 
<html> 
<head>   
    <title>Edit Data Mahasiswa</title> 
</head> 
 
<body> 
    <a href="index.php">Home</a> 
    <br/><br/> 
 
    <form name="update_user" method="post" action="edit.php"> 
        <table border="0"> 
            <tr>  
                <td>Nama</td> 
                <td><input type="text" name="name" value=<?php echo $name;?>></td> 
            </tr> 
            <tr>  
                <td>Email</td> 
                <td><input type="text" name="email" value=<?php echo $email;?>></td> 
            </tr> 
            <tr>  
                <td>Telepon</td> 
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td> 
            </tr> 
            <tr>  
                <td>Alamat</td> 
                <td><input type="text" name="addr" value=<?php echo $alamat;?>></td> 
            </tr> 
            <tr>  
                <td>jenis_kelamin</td> 
                <td><input type="text" name="gender" value=<?php echo $gender;?>></td> 
            </tr> 
            <tr>  
                <td>Tempat Lahir</td> 
                <td><input type="text" name="place" value=<?php echo $tempat;?>></td> 
            </tr> 
            <tr>  
                <td>Tanggal Lahir</td> 
                <td><input type="text" name="born" value=<?php echo $ttl;?>></td> 
            </tr> 
            <tr> 
                <td><input type="hidden" name="id_karyawan" value=<?php echo 
$_GET['id_karyawan'];?>></td> 
                <td><input type="submit" name="update" value="Update"></td>             </tr> 
        </table> 
    </form> 
</body> 
</html> 
