<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
</head>
<body>
<?php 
	session_start();
	include 'koneksi.php';
	echo "Welcome " . $_SESSION['nama'];
?>
<form action="logout.php">
	<button>Loggout</button>
</form><br>
<form action="form.php">
	<button>Tambah</button>
</form><br>

<table border="1">
	<tr>
		<td>Nama</td>
		<td>Email</td>
		<td>Foto</td>
		<td>Aksi</td>
	</tr>
<?php 
include 'koneksi.php';
$sql = mysqli_query($konek,'select * from user') or die(mysqli_error($konek));
while ($data = mysqli_fetch_array($sql)) { ?>
	<tr>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><img width="100px" src="<?= $data['foto'] ?>"></td>
		<td>
			<a href="edit.php?email=<?= $data['email']?>">Edit</a> |
			<a href="hapus.php?email=<?= $data['email']?>">Hapus</a>
		</td>
	</tr>
	<?php } 
	if(isset($_GET['message'])){
		$msg = $_GET['message'];
		echo "<script>alert('$msg')</script>";
	}
	?>
</table>
</body>
</html>