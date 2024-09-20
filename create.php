<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO user VALUES('$id', '$nama', '$umur', '$jenis_kelamin', '$telp', '$alamat')");

header("location:index.php");

?>