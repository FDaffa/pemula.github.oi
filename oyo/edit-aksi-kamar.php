<?php
include 'koneksi.php';

$id_kamar =$_POST['id_kamar'];
$tipe_kamar =$_POST['tipe_kamar'];
$fasilitas_kamar =$_POST['fasilitas_kamar'];
$status_ktsediaan =$_POST['status_ktsediaan'];

mysqli_query($koneksi,"UPDATE kamar SET id_kamar='$id_kamar',tipe_kamar ='$tipe_kamar',fasilitas_kamar = '$fasilitas_kamar',status_ktsediaan= '$status_ktsediaan' WHERE id_kamar ='$id_kamar'");
header("location:kamar.php");

 ?>