<?php
include 'koneksi.php';

$id_pegawai =$_POST['id_pegawai'];
$nama_pegawai =$_POST['nama_pegawai'];

mysqli_query($koneksi,"UPDATE data_pegawai SET id_pegawai='$id_pegawai',nama_pegawai='$nama_pegawai' WHERE id_pegawai ='$id_pegawai'");
header("location:data_pegawai.php");

 ?>