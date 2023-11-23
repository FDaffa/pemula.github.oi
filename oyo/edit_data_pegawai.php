<h3>Edit data pegawai</h3>

<?php
include 'koneksi.php';
$id_pegawai = $_GET['id_pegawai'];
$data = mysqli_query($koneksi,"SELECT * FROM data_pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-data_pegawai.php">
<table>
    <tr>
        <td>id_pegawai :</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>nama_pegawai :</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>