<?php

include_once("koneksi.php");
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);


switch($request){
	case 'GET':
		
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		global $koneksi;
		$query = "SELECT * FROM mahasiswa";
		if (!empty($id)) {
			$query = "SELECT * FROM mahasiswa WHERE NIM=$id";
		}
		$respon = array();
		$result = mysqli_query($koneksi, $query);
		$i = 0;
		if ($result){
			$respon['kode'] = 1;
			$respon['status'] = "sukses";
			while ($row=mysqli_fetch_array($result)) {
				$respon['data'][$i]['NIM'] = $row['NIM'];
				$respon['data'][$i]['nama'] = $row['nama'];
				$respon['data'][$i]['angkatan'] = $row['angkatan'];
				$respon['data'][$i]['semester'] = $row['semester'];
				$respon['data'][$i]['IPK'] = $row['IPK'];
				$i++;
			}
		} else {
			$respon['kode'] = 0;
			$respon['status'] = "gagal";
		
		}
		header('Content-Type: application/json');
		echo json_encode($respon);
		break;
	case 'POST':
		global $koneksi;
		$data = json_decode(file_get_contents("php://input"), true);
		$NIM = $data['NIM'];
		$nama= $data['nama'];
		$angkatan = $data['angkatan'];
		$semester = $data['semester'];
		$IPK = $data['IPK'];

		$query = "INSERT INTO mahasiswa set NIM = '".$NIM."', nama = '".$nama."', angkatan = '".$angkatan."', semester = '".$semester."', IPK = '".$IPK."'";
		if(mysqli_query($koneksi, $query)){
			$respon = [
				'kode' => 1,
				'status' => 'Data Mahasiswa Berhasil Ditambahkan'
			];
		} else {
			$respon = [
				'kode' => 0,
				'status' => 'Data Mahasiswa Gagal Ditambahkan'
			];
		}
		header('Content-Type: application/json');
		echo json_encode($respon);
		break;
	case 'PUT':
		$NIM = $_GET['id'];
		global $koneksi;
		$data = json_decode(file_get_contents('php://input'), true);
		$nama= $data['nama'];
		$angkatan = $data['angkatan'];
		$semester = $data['semester'];
		$IPK = $data['IPK'];

		$query = "UPDATE mahasiswa SET nama = '".$nama."', angkatan = '".$angkatan."', semester = '".$semester."', IPK = '".$IPK."' WHERE mahasiswa.NIM = $NIM";

		if(mysqli_query($koneksi, $query)){
			$respon = [
				'kode' => 1,
				'status' => 'Data Mahasiswa Berhasil Diupdate'
			];
		} else {
			$respon = [
				'kode' => 0,
				'status' => 'Data Mahasiswa Gagal Diupdate'
			];
		}
		header('Content-Type: application/json');
		echo json_encode($respon);
		break;
	case 'DELETE':
		$id = $_GET['id'];
		global $koneksi;

		$query = "DELETE FROM mahasiswa WHERE NIM = $id";

		if(mysqli_query($koneksi, $query)){
			$respon = [
				'kode' => 1,
				'status' => 'Data Mahasiswa Berhasil Dihapus'
			];
		} else {
			$respon = [
				'kode' => 0,
				'status' => 'Data Mahasiswa Gagal Dihapus'
			];
		}
		header('Content-Type: application/json');
		echo json_encode($respon);
		break;
	default:
	header("HTTP/1.0 405 Method Tidak Terdaftar");
	break;
}

?>