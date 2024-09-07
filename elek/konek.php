<?php
// pemanggilan database
$koneksi = mysqli_connect('localhost', 'root', '', 'material');

//   pemanggilan data dari database
function data($query)
{
    global $koneksi;
    $data1 = mysqli_query($koneksi, $query);
    $rows = [];

    while ($key = mysqli_fetch_assoc($data1)) {
        $rows[] = $key;
    }
    return $rows;
}
// Misalkan Anda ingin mengambil data berdasarkan id
$id = 1; // Contoh nilai id
$query = "SELECT * FROM elektro WHERE id = $id";

// Panggil fungsi data dengan query yang benar
$hasil = data($query);

function tambah1($data3)
{
    global $koneksi;

    $nama = $data3['nama'];
    $code = $data3['code'];
    $harga = $data3['harga'];
    $stok = $data3['stok'];

    $data2 =  "INSERT INTO elektro (nama, code, harga, stok) VALUES ('$nama', '$code', '$harga', '$stok')";
    mysqli_query($koneksi, $data2);
    return mysqli_affected_rows($koneksi);
}
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM elektro WHERE id='$_GET[id]'");
    return mysqli_affected_rows($koneksi);
}
function ubah_data($data3)
{
    global $koneksi;
    $nama = htmlspecialchars($data3['nama']);
    $code = htmlspecialchars($data3['code']);
    $harga = htmlspecialchars($data3['harga']);
    $stok = htmlspecialchars($data3['stok']);

    $data2 = "UPDATE elektro SET
                    nama = '$nama',
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

    $data = "SELECT * FROM elektro
                WHERE
                nama LIKE '%$keyword%'
    ";
    return query($data);
}
