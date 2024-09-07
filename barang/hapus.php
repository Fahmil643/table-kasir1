<?php
include "function.php";

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert ('Data Anda Berhasil Dihapus');
        window.location= './nama.php';
        </script>";
} else {
    echo "<script>
    alert ('Data Belum Terhapus');
    window.location= 'barang/nama.php';
    </script>";
}
