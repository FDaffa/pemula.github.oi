<html>
Tabel data_pegawai

<table border="1">
    <head>
    <link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<div class="main">
	<div class="navbar">
	<label class="ttl">Tabel Tamu</label>
		<ul>
		    <li><a href="data_tamu.php">Tamu</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="data_pegawai.php">Pegawai</a></li>
		</ul>
	</div>
    <tr>
        <td>id_pegawai</td>
        <td>nama_pegawai</td>
        <td>AKSI</td>

    </tr>

<?php
    include 'koneksi.php';
    $data_tamu=mysqli_query($koneksi, "select * from data_pegawai");
    while($tampil=mysqli_fetch_array($data_tamu)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['nama_pegawai'] ?> </td>
    <td> <a href="hapus_data_pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']; ?>">Hapus</a>
         <a href="edit_data_pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<a href="input-data_pegawai.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</html>