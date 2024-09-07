\<?php
    include "funcat.php";
    if (isset($_POST['tombol'])) {
        if (tambah($_POST) > 0) {
            echo "<script>
            alert('Data Berhasil Ditambahkan');
            window.location = 'index.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Ditambah');
            window.location = 'index.php';
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

    <title>Hello, world!</title>
</head>

<body>

    <!-- form tambah -->
    <form action="tambah.php" method="POST">
        <ul>
            <li>
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" class="nama" required="">
            </li>
            <li>
                <label for="code">Code Barang</label>
                <input type="text" name="code" class="code" required="">
            </li>
            <li>
                <label for="harga">Harga Barang</label>
                <input type="text" name="harga" class="harga" required="">
            </li>
            <li>
                <label for="stok">Stok Barang</label>
                <input type="text" name="stok" class="stok" required="">
            </li>
        </ul>
        <button type="submit" name="tombol" class="tombol">Tambah Data</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>