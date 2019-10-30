<?php
	session_start();
	include 'koneksi.php';

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$data=mysqli_query($konek,"SELECT * FROM user where email= '$email' AND password = '$pass'");
	$row=mysqli_fetch_assoc($data);

	if (mysqli_num_rows($data)>=1){
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['login']= true;
		header('Location:index.php');
		}
	else{
		header('Location:login.php?message=Login Gagal!');
	}
	
?>