<?php
// Include the function file
include "konek.php";



$id = $_GET['id'];
$dat = data("SELECT * FROM kayu WHERE id = $id")[0]; // Pastikan $id dievaluasi



if (isset($_POST['ubah'])) {
    if (ubah_data($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil diubah');
        window.location = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Berhasil diubah');
        window.location = 'index.php?id=$id';
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/tambah.css">
    <title>Ubah Data Barang</title>
</head>

<body>
    <h1>Ubah Data</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $dat['id']; ?>">
        <ul>
            <li>
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" class="nama" required="" value="<?= $dat['nama']; ?>">
            </li>
            <li>
                <label for="code">Kode Barang</label>
                <input type="text" name="code" class="code" required value="<?= $dat['code']; ?>">
            </li>
            <li>
                <label for="harga">Harga Barang</label>
                <input type="text" name="harga" class="harga" required value="<?= $dat['harga']; ?>">
            </li>
            <li>
                <label for="stok">Stok Barang</label>
                <input type="text" name="stok" class="stok" required value="<?= $dat['stok']; ?>">
            </li>
        </ul>
        <button type="submit" name="ubah">Ubah Data</button>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>