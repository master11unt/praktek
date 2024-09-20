<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "bootcamp";

 $koneksi = new mysqli($servername, $username, $password, $database);

 if($koneksi->connect_error) {
    die("Gagal Terhuung". $koneksi->connect_error);
 }

//  echo "Berhasil Terhubung";
?>