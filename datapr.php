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

    <table border="1" style="width: 80%; text-align:center;">
        <tr>
        <th width="5%">No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM user WHERE jenis_kelamin LIKE 'P'");
        while($bimbel = mysqli_fetch_array($data)){
            ?>
             <tr>
                <td><?php print $bimbel['id']?></td>
                <td><?php print $bimbel['nama']?></td>
                <td><?php print $bimbel['umur']?></td>
                <td><?php print $bimbel['jenis_kelamin']?></td>
                <td><?php print $bimbel['telp']?></td>
                <td><?php print $bimbel['alamat']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>