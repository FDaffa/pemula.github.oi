<html>
<table border="1">
<head>
    <link rel="stylesheet" type="text/css" href="tabel.css">
    
</head>
    <div class="main">
	<div class="navbar">
	<label class="ttl">Tabel Reservasi</label>
		<ul>
		    <li><a href="data_tamu.php">Tamu</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="data_pegawai.php">Pegawai</a></li>
		</ul>
	</div>
    <tr>
    
        <td>id_reservasi</td>
        <td>id_kamar</td>
        <td>id_pegawai</td>
        <td>id_tamu</td>
        <td>check_in</td>
        <td>check_out</td>
        <td>AKSI</td>

    </tr>

<?php
    include 'koneksi.php';
    $reservasi=mysqli_query($koneksi, "select * from reservasi");
    while($tampil=mysqli_fetch_array($reservasi)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_reservasi'] ?> </td>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['id_tamu'] ?> </td>
    <td> <?php echo $tampil['check_in'] ?> </td>
    <td> <?php echo $tampil['check_out'] ?> </td>
    <td> <a href="hapus_rservasi.php?id=<?php echo$tampil['id_reservasi']; ?>"><button>Hapus</button></a>
         <a href="edit_reservasi.php?id=<?php echo$tampil['id_reservasi']; ?>"><button>Edit</button></a></td>

</tr>

<?php
    }
?>

</table>
 <a href="input-reservasi.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</div>
</html>