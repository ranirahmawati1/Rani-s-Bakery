<h2>Ubah Menu</h2>

<style>
h2{
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: black;
    font-size: 40px;
}
</style>
<?php
$ambil = $conn->query("SELECT * FROM tb_menu WHERE id_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<prev>";
print_r($pecah);
echo "</prev>";
?>

<form method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label>Nama Menu</label>
    <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_menu']; ?>">
</div>

<div class="form-group">
    <label>Harga Rp</label>
    <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_menu']; ?>">
</div>

<div class="form-group">
    <img src="../config/upload/<?php echo $pecah['foto_menu'] ?>" width="200px">
</div>

<div class="form-group">
    <label>Ganti foto</label>
    <input type="file" name="foto" class="form-control">
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_menu']?></textarea>
</div>

<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if(isset($_POST['ubah']))
{
    $namafoto = $_FILES ['foto']['name'];
    $lokasifoto = $_FILES ['foto']['tmp_name'];
    // JIKA FOTO DIUBAH
    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../config/upload/$namafoto");

        $conn->query("UPDATE tb_menu SET nama_menu='$_POST[nama]', harga_menu='$_POST[harga]',
        foto_menu='$namafoto', deskripsi_produk='$_POST[deskripsi]' 
        WHERE id_menu='$_GET[id]'");
    }
    else
    {
        $conn->query("UPDATE tb_menu SET nama_menu='$_POST[nama]', harga_menu='$_POST[harga]',
        deskripsi_produk='$_POST[deskripsi]' WHERE id_menu='$_GET[id]'");
    }
    echo "<script>alert(Data menu telah diubah);</script>";
    // echo "<script>location'dashboard.php?halaman=menu';/script>";
    echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=menu'>";
}
?>