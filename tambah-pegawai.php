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
				<tr><td>Status</td><td><label><input type="radio" name="status" value="Menikah" required>Menikah</label>&nbsp;<label><input type="radio" name="status" value="Belum Menikah" required>Belum Menikah</label></td></tr>
				<tr><td>Jabatan</td><td>
					<select name="jabatan" id="jabatan" required>
						<option value="Supervisor">Supervisor</option>
						<option value="Kepala Regu">Kepala Regu</option>
						<option value="Mekanik">Mekanik</option>
						<option value="Helper">Helper</option>
					</select>
				</td></tr>
				<tr><td>Gender</td><td><label><input type="radio" name="gender" value="Laki-laki" required>Laki-laki</label>&nbsp;<label><input type="radio" name="gender" value="Perempuan" required>Perempuan</label></td></tr>
				<tr><td></td><td><a href="index.php" class="btn btn-red">Cancel</a><button class="btn btn-blue" type="submit">Simpan</button></td></tr>
			</tbody>
		</table>
		</form>
	</div>
</body>
</html>