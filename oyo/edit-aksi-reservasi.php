<?php
include 'koneksi.php';

$id_reservasi =$_POST['id_reservasi'];
$id_kamar =$_POST['id_kamar'];
$id_pegawai =$_POST['id_pegawai'];
$id_tamu =$_POST['id_tamu'];
$check_in =$_POST['check_in'];
$check_out  =$_PPOST['check_out'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi',id_kamar ='$id_kamar',id_pegawai = '$id_pegawai',=id_tamu '$id_tamu',check_in ='$ check_in'WHERE id_reservasi ='$id_reservasi'");
header("location:reservasi.php");

 ?>