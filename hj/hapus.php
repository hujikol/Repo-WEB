<?php
	include 'koneksi.php';
	$email = $_GET['email'];

	$sql = mysqli_query($konek,"DELETE FROM user WHERE email='$email'");

	if($sql){
		echo "Berhasil Hapus Data, <a href='index.php'>Kembali ke list</a>";
	} else {
		echo "Gagal Menghapus Data";
	}
?>