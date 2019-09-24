<html>
<body>

<?php

$conn = mysqli_connect("localhost","root","","hujikol");

if (!$conn){
  die('Could not connect: ' . mysqli_error());
}

$sql = "INSERT INTO data_mhs (nama, nim, alamat)
VALUES ('$_POST[nama]', '$_POST[nim]', '$_POST[alamat]')";

if (mysqli_query($conn, $sql)) {
    echo "Data Telah Ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>