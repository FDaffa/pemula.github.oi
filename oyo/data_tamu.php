<html>

Tabel Data Tamu
<table border="1">
    <head>
<link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<div class="main">
	<div class="navbar">
	<label class="ttl">Tabel Pegawai</label>
		<ul>
		    <li><a href="data_tamu.php">Tamu</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="data_pegawai.php">Pegawai</a></li>
		</ul>
	</div>

    <tr>
        <td>id_tamu</td>
        <td>nama_tamu</td>
        <td>nomor_tamu</td>
        <td>alamat</td>
        <td>AKSI</td>

    </tr>

<?php
    include 'koneksi.php';
    $data_tamu=mysqli_query($koneksi, "select * from data_tamu");
    while($tampil=mysqli_fetch_array($data_tamu)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_tamu'] ?> </td>
    <td> <?php echo $tampil['nama_tamu'] ?> </td>
    <td> <?php echo $tampil['nomor_hp'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <a href="hapus_data_tamu.php?id_tamu=<?php echo $tampil['id_tamu']; ?>">Hapus</a>
         <a href="edit_data_tamu.php?id_tamu=<?php echo $tampil['id_tamu']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
 <a href="input-data_tamu.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</div>
</html>