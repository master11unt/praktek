<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
while ($bimbel = mysqli_fetch_array($data)) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Bootcamp</h1>

    <form action="edit.php" method="post">

    <input type="hidden" name="id" value="<?php print $bimbel['id']?>">

    <form action="create.php" method="post">
        <label>Nama Lengkap</label>
        <br>
        <input type="text" name="nama" value="<?php print $bimbel['nama']?>">
        <br>

        <label>Umur</label>
        <br>
        <input type="number" name="umur" value="<?php print $bimbel['umur']?>">
        <br>

        <label>Jenis Kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php print $bimbel['jenis_kelamin']?>">
        <br>

        <label>Nomor Telepon</label>
        <br>
        <input type="number" name="telp" value="<?php print $bimbel['telp']?>">
        <br>

        <label>Alamat</label>
        <br>
        <textarea name="alamat"><?php print $bimbel['alamat']?></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
    <?php
}
?>