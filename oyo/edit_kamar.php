<h3>Edit Kamar</h3>

<?php
include 'koneksi.php';
$id_kamar = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>id_kamar :</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>tipe_kamar :</td>
        <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>fasilitas_kamar :</td>
        <td><input type="text" name="fasilitas_kamar" value="<?php echo $tampil['fasilitas_kamar']; ?>"></td>
    </tr>
    <tr>
      <td>status_ktsediaan :</td>
      <td><input type="text" name="status_ktsediaan" value="<?php echo $tampil['status_ktsediaan']; ?>"></td>
</tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>