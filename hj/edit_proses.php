<?php
	include 'koneksi.php';
	error_reporting(0);
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$passwordl = $_POST['passwordlama'];
	$passbaru = $_POST['passwordbaru'];
	$passkonf = $_POST['passwordkonf'];
	$foto = $_FILES['foto'];
	var_dump($foto);
	echo "<br>".$foto['name'];
	$namafile = md5(date('Y-m-d H:i:s'));
	$namafile = "Images/$namafile".substr($foto['name'],strrpos($foto['name'], '.'));
	move_uploaded_file($foto['tmp_name'], $namafile);

	if(strlen($passwordl) == 0){
		$message = "Butuh password lama!";
		header('Location: edit.php?message='.$message);
		exit();
	}

	$sql_chek = "SELECT * FROM user WHERE email='$email' AND password = md5('$passwordl')";
	$query = mysqli_query($konek,$sql_chek);

	if(mysqli_num_rows($query)){
		if(strlen($passbaru) && $passbaru == $passkonf){
			$sql = mysqli_query($konek,"UPDATE user SET nama='$nama', password=md5('$passbaru') WHERE email='$email'");
		} else {
			if($foto['size']){
				$sql = mysqli_query($konek,"UPDATE user SET nama='$nama', foto='$namafile' WHERE email='$email'");
			}else{
				$sql = mysqli_query($konek,"UPDATE user SET nama='$nama'WHERE email='$email'");
			}
			
		}

		if(!mysqli_error($konek)){
			$message = "Berhasil Edit Data";
		} else {
			$message = "Gagal Mengedit Data";
		}
	} else {
		$message = "Password Salah";
	}
header('Location: index.php?message='.$message);
?>