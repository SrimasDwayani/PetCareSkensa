<?php

$conn = mysqli_connect("localhost", "root", "", "db_user");

if(!$conn){
	echo "koneksi gagal";
	die();
}

?>