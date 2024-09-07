<?php
include "funcat.php";

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert ('Data Berhasil Hapus');
        window.location= 'index.php';
        </script>";
} else {
    echo "<script>
        alert ('Data Gagal Dihapus');
        window.location= 'index.php';
        </script>";
}
