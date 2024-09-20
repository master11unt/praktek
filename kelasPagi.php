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
            <th>Nomor Bootcamp</th>
            <th>Nama Peserta</th>
            <th>Nama Bootcamp</th>
            <th>Jadwal Kelas</th>
            <th>No Telp</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM detail WHERE jadwal LIKE 'Pagi'");
        while($bimbel = mysqli_fetch_array($data)){
            ?>
             <tr>
                <td><?php print $bimbel['id']?></td>
                <td><?php print $bimbel['nomorbc']?></td>
                <td><?php print $bimbel['nama']?></td>
                <td><?php print $bimbel['namabc']?></td>
                <td><?php print $bimbel['jadwal']?></td>
                <td><?php print $bimbel['telp']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>