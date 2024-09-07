<?php
include '../perkakas/konek.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM perkakas
                WHERE
                nama LIKE '%$keyword%'
    ";
$data = data($query);
?>


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
                <a href="ubah.php?id<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="hapus.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>