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
                <td>Mobile</td> 
                <td><input type="number" name="mobile"></td> 
            </tr> 
            <tr>  
                <td></td> 
                <td><input type="submit" name="Submit" value="Add"></td>             </tr> 
        </table> 
    </form> 
 
    <?php 
 
        // Cek apakah ada parameter $_POST yang terisi, jika iya masukkan dalam DB. 
    if(isset($_POST['Submit'])) {         $name = $_POST['name']; 
        $email = $_POST['email'];         $mobile = $_POST['mobile']; 
 
        // include database          include_once("config.php"); 
 
        // Insert data 
        $result = mysqli_query($mysqli, "INSERT INTO 
mahasiswa(name,email,mobile) VALUES('$name','$email','$mobile')"); 
 
// Menampilkan data telah berhasil 
echo "Mahasiswa berhasil ditambahkan! <a href='index.php'>View 
Mahasiswa</a>"; 
} 
    ?> 
</body> 
</html> 
