<?php 
    include 'koneksi.php';

    $id = $_GET['id_tamu'];
    mysqli_query($koneksi, "delete from data_tamu where id_tamu='$id'");
    
    header("location: data_tamu.php");
?>