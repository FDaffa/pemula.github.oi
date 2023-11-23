<?php
include 'koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$id_kamar = $_POST['id_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$id_tamu = $_POST['id_tamu'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($koneksi, "insert into reservasi values('$id_reservasi','$id_kamar','$id_pegawai','$id_tamu','$check_in','$check_out')");
header("location:reservasi.php");

?>