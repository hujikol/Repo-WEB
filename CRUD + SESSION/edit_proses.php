<?php
	include 'koneksi.php';
	error_reporting(0);
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = mysqli_query($konek,"UPDATE user SET nama='$nama',password='$password' WHERE email='$email'");
	if($sql){
		echo "Berhasil Edit Data, <a href='index.php'>Kembali ke list</a>";
	} else {
		echo "Gagal Mengedit Data";
	}
?>