<?php 
// include database  include_once("config.php"); 
include('./config.php');
// Cek apakah parameter $_POST terisi, update data jika iya if(isset($_POST['update'])) 
if(isset($_POST['update']))
{    
    $id = $_POST['id']; 
    $name=$_POST['name']; 
    $mobile=$_POST['mobile'];     
    $email=$_POST['email']; 
 
    // update  data 
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET name='$name',email='$email',mobile='$mobile' WHERE id=$id"); 
    header("Location: index.php"); 
    // Redirect kembali ke halaman utama     header("Location: index.php"); 
} 
?> 
<?php 
// Mengambil ID dan menampilkan data berdasarkan ID yang didapat 
$id = $_GET['id']; 
 
// Fetch user data  
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");  
while($user_data = mysqli_fetch_array($result)) 
{ 
    $name = $user_data['name']; 
    $email = $user_data['email'];     $mobile = $user_data['mobile']; 
} 
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
                <td>Name</td> 
                <td><input type="text" name="name" value=<?php echo 
$name;?>></td> 
            </tr> 
            <tr>  
                <td>Email</td> 
                <td><input type="text" name="email" value=<?php echo $email;?>></td> 
            </tr> 
            <tr>  
                <td>Mobile</td> 
                <td><input type="text" name="mobile" value=<?php echo 
$mobile;?>></td> 
            </tr> 
            <tr> 
                <td><input type="hidden" name="id" value=<?php echo 
$_GET['id'];?>></td> 
                <td><input type="submit" name="update" value="Update"></td>             </tr> 
        </table> 
    </form> 
</body> 
</html> 
