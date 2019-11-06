<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);

$sql = mysqli_query($konek, "insert into user values ('$nama','$email','$pass')");

if ($sql) {
	$message = 'Berhasil input data';
}else{
	$message = 'Gagal menyimpan data ';
}
header("Location: index.php?message=$message");
 ?>}
