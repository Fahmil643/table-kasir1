<?php
// pemanggilan database
$koneksi = mysqli_connect('localhost', 'root', '', 'material');

//   pemanggilan data dari database
function query($query)
{
    global $koneksi;
    $data1 = mysqli_query($koneksi, $query);
    $rows = [];

    while ($key = mysqli_fetch_assoc($data1)) {
        $rows[] = $key;
    }
    return $rows;
}
function tambah1($data3)
{
    global $koneksi;

    $nama = $data3['nama'];
    $id_barang = $data3['id_barang'];
    $code = $data3['code'];
    $harga = $data3['harga'];
    $stok = $data3['stok'];

    $data2 =  "INSERT INTO barang (nama, id_barang, code, harga, stok) VALUES ('$nama', '$id_barang', '$code', '$harga', '$stok')";
    mysqli_query($koneksi, $data2);
    return mysqli_affected_rows($koneksi);
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM barang WHERE id='$_GET[id]'");
    return mysqli_affected_rows($koneksi);
}
function ubah_data($data3)
{
    global $koneksi;
    $nama = htmlspecialchars($data3['nama']);
    $id_barang = htmlspecialchars($data3['id_barang']);
    $code = htmlspecialchars($data3['code']);
    $harga = htmlspecialchars($data3['harga']);
    $stok = htmlspecialchars($data3['stok']);

    $data2 = "UPDATE barang SET
                    nama = '$nama',
                    id_barang = '$id_barang',
                    code = '$code',
                    harga = '$harga',
                    stok = '$stok'
                WHERE id = '$_GET[id]'
    ";
    mysqli_query($koneksi, $data2);
    mysqli_affected_rows($koneksi);
}
function cari($keyword)
{
    global $koneksi;

    $data = "SELECT * FROM barang
                WHERE
                nama LIKE '%$keyword%'
    ";
    return query($data);
}
