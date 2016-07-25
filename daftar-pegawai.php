<?php
include 'config/database.php';
$sql = "SELECT * FROM tbl_pegawai";
$res = mysql_query($sql);
$num = mysql_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Pegawai</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Selamat Datang di Aplikasi Lembur PT. ATE SEJAHTERA</h2>
		<hr>
		<table class="table-lembur">
			<thead>
				<tr><th>No</th><th>Nama</th><th>Status</th><th>Jabatan</th><th>Jenis kelamin</th><th>Tgl. Registrasi</th><th>Aksi</th></tr>
			</thead>
			<tbody>
			<?php if($num > 0){ ?>
			<?php while ($pegawai = mysql_fetch_assoc($res)) {?>
				<tr>
					<td><?php echo $pegawai['id'] ?></td><td><?php echo $pegawai['nama'] ?></td><td><?php echo $pegawai['status'] ?></td><td><?php echo $pegawai['jabatan'] ?></td><td><?php echo $pegawai['gender'] ?></td><td><?php echo $pegawai['tanggal'] ?></td><td><a href="actions/delete.php?id=<?php echo $pegawai['id'] ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-red">Delete</a><a href="edit.php?id=<?php echo $pegawai['id'] ?>" class="btn btn-blue">Edit</a></td>
				</tr>
			<?php } ?>
			<?php }else{ ?>
			<tr>
				<td colspan="6">Tidak ada data</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
		<hr>
		<a href="tambah-pegawai.php" class="btn btn-blue">Tambah Pegawai</a>
	</div>
</body>
</html>