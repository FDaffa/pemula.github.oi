<html>

Tabel kamar
<table border="1">
</head>
<link rel="stylesheet" type="text/css" href="tabel.css">
    
	</head>
    <div class="main">
	<div class="navbar">
	<label class="ttl">Tabel kamar</label>
		<ul>
		    <li><a href="data_tamu.php">Tamu</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="data_pegawai.php">Pegawai</a></li>
		</ul>
	</div>
    <tr>
        <td>id_kamar</td>
        <td>tipe_kamar</td>
        <td>fasilitas_kamar</td>
        <td>status_ktsediaan</td>
        <td>AKSI</td>

    </tr>

<?php
    include 'koneksi.php';
    $kamar=mysqli_query($koneksi, "select * from kamar");
    while($tampil=mysqli_fetch_array($kamar)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['fasilitas_kamar'] ?> </td>
    <td> <?php echo $tampil['status_ktsediaan'] ?> </td>
    <td> <a href="hapus_kamar.php?id=<?php echo$tampil['id_kamar']; ?>"><button>Hapus</a>
         <a href="edit_kamar.php?id=<?php echo$tampil['id_kamar']; ?>"><button>Edit</a></td>

</tr>
<?php
    }
?>

</table>
 <a href="input-kamar.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a> 
</html>