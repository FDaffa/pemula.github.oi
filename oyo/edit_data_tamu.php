<h3>Edit data tamu</h3>

<?php
include 'koneksi.php';
$id_tamu = $_GET['id_tamu'];
$data = mysqli_query($koneksi,"SELECT * FROM data_tamu WHERE id_tamu='$id_tamu'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-data_tamu.php">
<table>
    <tr>
        <td>id_tamu :</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>nama_tamu :</td>
        <td><input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>nomor_hp :</td>
        <td><input type="number" name="nomor_hp" value="<?php echo $tampil['nomor_hp']; ?>"></td>
    </tr>
    <tr>
      <td>alamat :</td>
      <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
</tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>