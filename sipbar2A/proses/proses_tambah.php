<?php
//include koneksi database
require "koneksi.php";
//get data dari form
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
//query insert data ke dalam database
$query = "INSERT INTO `tb_barang` (`kode_barang`, `nama_barang`, `keterangan`, `gambar`) VALUES (NULL, '$nama_barang', '$keterangan', '$gambar')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../barang.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
?>