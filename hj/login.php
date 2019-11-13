<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST" action="chek_login.php">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td rowspan="3">
					<input type="submit" name="simpan" value="Submit">
				</td>
			</tr>
		</table>
	</form>
	<?php 
	error_reporting(0);
		$msg = $_GET['message'];
		if($msg){
			echo $msg;
		}
	?>
</body>
</html>