<?php
include 'koneksi.php';

$id_tamu =$_POST['id_tamu'];
$nama_tamu =$_POST['nama_tamu'];
$nomor_hp =$_POST['nomor_hp'];
$alamat =$_POST['alamat'];

mysqli_query($koneksi,"UPDATE data_tamu SET id_tamu='$id_tamu',nama_tamu ='$nama_tamu',nomor_hp= '$nomor_hp',alamat= '$alamat' WHERE id_tamu ='$id_tamu'");
header("location:data_tamu.php");

 ?>