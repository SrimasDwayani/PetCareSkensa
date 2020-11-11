<?php
  include_once("koneksi1.php");

  $username = $_POST['username'];
  $password = $_POST['password'];
  $alamat = $_POST['alamat'];
  $level = $_POST['level'];

  $query ="INSERT INTO tb_user (username, password, alamat, level)
       VALUE ('$username', '$password', '$alamat','$level')";

  $hasil=mysqli_query($conn,$query);

  if($hasil){
    header('Location:login.php');
  }else{
    echo "input data gagal";
  }
?>