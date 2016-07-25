<?php
include '../config/database.php';

if (isset($_POST['nama']))
{
$date   = date('Y-m-d H:i:s');
$sql    = "INSERT INTO tbl_pegawai SET nama='$_POST[nama]',status='$_POST[status]',jabatan='$_POST[jabatan]',gender='$_POST[gender]', tanggal='$date'";
$result = mysql_query($sql);

if (!$result) {
	echo "Gagal Insert ke database";
}
else
{
	header('Location:../daftar-pegawai.php');
}
}
else
{
	header('Location:../daftar-pegawai.php');
}

 ?>