<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<article>
	<center>
		<form method="post">
			<h1>Kalkulator</h1>
		<input type="text" name="bil1" placeholder="Bilangan pertama"><br>
		
		<select name="perintah">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="bagi">/</option>
			<option value="kali">*</option>
		</select><br>

		<input type="text" name="bil2" placeholder="Bilangan kedua"><br>
		<input type="submit" name="hitung" value="Hitung!">
		</form>

<?php 
if (isset($_POST['hitung'])) {
	$bilangan1 = $_POST["bil1"];
	$bilangan2 = $_POST["bil2"]; 
	$operasi = $_POST['perintah'];

	switch ($operasi) {
	case 'tambah':
		$hasil = $bilangan1 + $bilangan2;
		break;
	case 'kurang':
		$hasil = $bilangan1 - $bilangan2;
		break;
	case 'bagi':
		$hasil = $bilangan1 / $bilangan2;
		break;
	case 'kali':
		$hasil = $bilangan1 * $bilangan2;
		break;
	default:
		echo "Eror";
		break;
	}

echo "<p>Hasil : $hasil</p>";
}
?>

	</center>
</article>

</body>
</html>
