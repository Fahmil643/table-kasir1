<?php
include 'konek.php';

$data = data("SELECT * FROM kayu");
if (isset($_POST["cari"])) {
    // cari tersebut menghubungkan dengan function
    $data = cari($_POST['keyword']);
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
    <h2 class="text-center m-3">BARANG BESI DAN KAYU</h2>
    <hr>

    <!-- section pencarian dan penambahan -->
    <section class="nav1">
        <nav class="navbar navbar-expand-lg navbar-light bg-section">
            <div class="container-fluid">
                <a href="tambah.php"><button type="submit" class="tambah btn-success p-2 px-4">TAMBAH BARANG</button></a>
                <!-- form pencarian -->
                <form action="" method="POST" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autofocus id="keyword">
                    <button class="btn btn-outline-success" type="submit" name="cari" id="tombol_cari">Search</button>
                </form>

            </div>
            </div>
        </nav>
    </section>
    <br>
    <!-- table data barang cat -->
    <div class="container" id="container">
        <table class="table table-striped text-center">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Code Barang</th>
                <th>Harga Barang</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php
            $a = 0;
            foreach ($data as $key) :
                $a++;
            ?>
                <tr>
                    <td><?= $a; ?></td>
                    <td><?= $key['nama']; ?></td>
                    <td><?= $key['code']; ?></td>
                    <td><?= $key['harga']; ?></td>
                    <td><?= $key['stok']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

            <?php endforeach ?>

        </table>

    </div>

    <script src="../js/kayu.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>