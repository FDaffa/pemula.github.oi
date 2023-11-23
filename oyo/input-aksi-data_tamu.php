<?php
include 'koneksi.php';

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$nomor_hp = $_POST['nomor_hp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "insert into data_tamu values('$id_tamu','$nama_tamu','$nomor_hp','$alamat')");
header("location:data_tamu.php");
?>
