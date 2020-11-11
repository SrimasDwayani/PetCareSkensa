<?php
include 'koneksi.php';
//after click
if(isset($_POST['register_submit'])){
//tampung value
$username = mysqli_real_escape_string($koneksi,trim($_POST['username']));
$password = mysqli_real_escape_string($koneksi,trim($_POST['password']));
$konfirmasi = mysqli_real_escape_string($koneksi,trim($_POST['konfirmasi']));
$alamat = mysqli_real_escape_string($koneksi,trim($_POST['alamat']));
//cek konfirmasi pass benar?
if ($password != $konfirmasi) {
	header('location: register.php?konfirmasipassword-failed');
}
else{
	$sql='
	insert into  rezauser values(
		"",
		"'.$username.'",
		"'.$password.'",
		"'.$alamat.'",
	)
	';
	mysql_query($koneksi, $sql);

	header('location: login.php?register-success');
}
}
?>