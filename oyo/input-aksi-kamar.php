<?php
include 'koneksi.php';

$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$fasilitas_kamar = $_POST['fasilitas_kamar'];
$status_ktsediaan = $_POST['status_ktsediaan'];

mysqli_query($koneksi, "insert into kamar values('$id_kamar','$tipe_kamar','$fasilitas_kamar','$status_ktsediaan')");
header("location:kamar.php");

?>