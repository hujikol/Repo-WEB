<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>
	<form action="index.php">
	<button><</button>
</form><br>
	<?php 
		include 'koneksi.php';
		$email = $_GET['email'];
		$sql = mysqli_query($konek,"SELECT * FROM user WHERE email='$email'");
		$data = mysqli_fetch_array($sql);
	?>
	<form method="POST" action="edit_proses.php">
	<table>
		<tr>
			<td> Nama </td>
			<td> <input type="text" name="nama" value="<?= $data['nama'] ?>"> </td>
		</tr>
		<tr>
			<td></td>
			<td> <input type="hidden" name="email" value="<?= $data['email'] ?>"> </td>
		</tr>
		<tr>
			<td> Password Lama </td>
			<td> <input type="text" name="passwordlama"> </td>
		</tr>
		<tr>
			<td> Password Baru </td>
			<td> <input type="text" name="passwordbaru"> </td>
		</tr>
		<tr>
			<td> Konfirmasi Password </td>
			<td> <input type="text" name="passwordkonf"> </td>
		</tr>
		<tr>
			<td rowspan="3"> <input type="submit" name="simpan" value="Simpan"> </td>
		</tr>
	</table>
</form>
</body>
</html>