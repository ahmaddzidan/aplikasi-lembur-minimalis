<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplikasi Lembur</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Selamat Datang di Aplikasi Lembur PT. ATE SEJAHTERA</h2>
		<hr>
		<form action="actions/create.php" method="POST">
		<table class="table-lembur">
			<tbody>
				<tr><td>Nama</td><td><input type="text" name="nama" required></td></tr>
				<tr><td>Status</td><td><input type="text" name="status" required></td></tr>
				<tr><td>Jabatan</td><td><input type="text" name="jabatan" required></td></tr>
				<tr><td>Gender</td><td><input type="text" name="gender" required></td></tr>
				<tr><td></td><td><button class="btn btn-blue" type="submit">Submit</button></td></tr>
			</tbody>
		</table>
		</form>
	</div>
</body>
</html>