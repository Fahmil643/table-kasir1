<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'material');

function query($data)
{
    global $koneksi;

    $data1 = mysqli_query($koneksi, $data);
    $rows = [];

    while ($key = mysqli_fetch_assoc($data1)) {
        $rows[] = $key;
    }
    return $rows;
}
function tambah($data2)
{
    global $koneksi;

    $nama = $data2['nama'];
    $code = $data2['code'];
    $harga = $data2['harga'];
    $stok = $data2['stok'];

    $data2 = "INSERT INTO
                cat (nama, code, harga, stok) VALUES ('$nama', '$code', '$harga', '$stok')
    ";
    mysqli_query($koneksi, $data2);
    mysqli_affected_rows($koneksi);
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM cat WHERE id='$_GET[id]'");
    return mysqli_affected_rows($koneksi);
}
function ubah($data3)
{
    global $koneksi;
    $nama = htmlspecialchars($data3['nama']);
    $code = htmlspecialchars($data3['code']);
    $harga = htmlspecialchars($data3['harga']);
    $stok = htmlspecialchars($data3['stok']);

    $data2 = "UPDATE cat SET
                    nama = '$nama',
                    code = '$code',
                    harga = '$harga',
                    stok = '$stok'
                WHERE id = '$_GET[id]'
    ";
    mysqli_query($koneksi, $data2);
    mysqli_affected_rows($koneksi);
}
