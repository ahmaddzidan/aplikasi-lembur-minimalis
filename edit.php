<?php
include 'config/database.php';

$sql = "SELECT * FROM tbl_pegawai WHERE id = '$_GET[id]'";
$res = mysql_query($sql);
$num = mysql_num_rows($res);
$pegawai = mysql_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplikasi Lembur</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
	<ul class="navigation">
		<li><a href="index.php">Dashboard</a></li>
		<li><a href="daftar-pegawai.php" class="active">Daftar Pegawai</a></li>
		<li><a href="daftar-lembur.php">Daftar Lembur</a></li>
	</ul>
		<h2 class="text-center">Selamat Datang di Aplikasi Lembur PT. ATE SEJAHTERA</h2>
		<hr>
		<form action="actions/update.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $pegawai['id']; ?>">
		<table class="table-lembur">
			<tbody>
				<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $pegawai['nama']; ?>" required></td></tr>
				<tr><td>Status</td><td><label><input type="radio" name="status" value="Menikah">Menikah</label>&nbsp;<label><input type="radio" name="status" value="Belum Menikah">Belum Menikah</label></td></tr>
				<tr><td>Jabatan</td><td>
					<select name="jabatan" id="jabatan">
						<option value="0">Supervisor</option>
						<option value="1">Kepala Regu</option>
						<option value="2">Mekanik</option>
						<option value="3">Helper</option>
					</select>
				</td></tr>
				<tr><td>Gender</td><td><label><input type="radio" name="gender" value="Laki-laki">Laki-laki</label>&nbsp;<label><input type="radio" name="gender" value="Perempuan">Perempuan</label></td></tr>
				<tr><td></td><td><a href="index.php" class="btn btn-red">Cancel</a><button class="btn btn-blue" type="submit">Simpan</button></td></tr>
			</tbody>
		</table>
		</form>
	</div>
</body>
</html>