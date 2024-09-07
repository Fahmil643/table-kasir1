<?php
include '../barang/function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM barang
                WHERE
                nama LIKE '%$keyword%'
    ";
$data = query($query);
?>
<table class="table table-striped text-center">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>ID Barang</th>
        <th>Code Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th>Aksi</th>
    </tr>
    <!-- pemanggilan data  -->
    <?php
    $a = 0;
    foreach ($data as $key) :
        $a++;
    ?>
        <tr>
            <td><?= $a; ?></td>
            <td><?= $key['nama']; ?></td>
            <td><?= $key['id_barang']; ?></td>
            <td><?= $key['code']; ?></td>
            <td><?= $key['harga']; ?></td>
            <td><?= $key['stok']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $key['id']; ?>" class="text-decoration-none btn btn-danger" onclick="return confirm('Apakah Yakin Untuk menghapus');">Hapus</a>
                <a href="ubah.php?id=<?php echo $key['id']; ?>" class="text-decoration-none btn btn-warning">Edit</a>

            </td>
        </tr>
    <?php endforeach; ?>

</table>