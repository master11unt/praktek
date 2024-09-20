<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; font-weight: 600;">Praktek HTML dan PHP</h1>
    <table border="1" style="width: 80%; text-align: center;">
        <tr>
            <td>
            <a href="form.php">Tambah Data Peserta Bootcamp</a>
            </td>
            <td>
            <a href="dataLaki.php">Data Laki Laki</a>
            </td>
            <td>
            <a href="datapr.php">Data perempuan</a>
            </td>
        </tr>
    </table>
    <br>
    <table border="1" style="width: 80%; text-align:center;">
        <tr>
            <th width="5%">No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Option</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while($bimbel = mysqli_fetch_array($data)){
            ?>
             <tr>
                <td><?php print $bimbel['id']?></td>
                <td><?php print $bimbel['nama']?></td>
                <td><?php print $bimbel['umur']?></td>
                <td><?php print $bimbel['jenis_kelamin']?></td>
                <td><?php print $bimbel['telp']?></td>
                <td><?php print $bimbel['alamat']?></td>
                <td>
                    <a href="formEdit.php?id=<?php print $bimbel['id']?>">Edit</a>
                    <a href="delete.php?id=<?php print $bimbel['id']?>" onclick="return confirm('Yakin mau hapus data?')">Delete</a>
                    <a href="detail.php?id=<?php print $bimbel['id']?>">Detail</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>