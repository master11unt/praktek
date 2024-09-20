<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Pendaftaran Bootcamp</h1>

    <form action="create.php" method="post">
        <label>Nama Lengkap</label>
        <br>
        <input type="text" name="nama">
        <br>

        <label>Umur</label>
        <br>
        <input type="number" name="umur">
        <br>

        <label>Jenis Kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br>

        <label>Nomor Telepon</label>
        <br>
        <input type="number" name="telp">
        <br>

        <label>Alamat</label>
        <br>
        <textarea name="alamat"></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>