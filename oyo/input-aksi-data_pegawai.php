<?php
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];

mysqli_query($koneksi, "insert into data_pegawai values('$id_pegawai','$nama_pegawai')");
header("location:data_pegawai.php");
?>