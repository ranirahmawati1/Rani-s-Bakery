<h2>Tambah Menu</h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label>Nama Menu</label>
    <input type="text" class="form-control" name="nama">
</div>
<div class="form-group">
    <label>Harga (Rp)</label>
    <input type="number" class="form-control" name="harga">
</div>
<div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" name="Deskripsi" rows="10"></textarea>
</div>
<div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
</div>
<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 
if(isset($_POST['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../config/upload/".$nama);
    $conn->query("INSERT INTO tb_menu 
    (nama_menu,harga_menu,foto_menu,deskripsi_menu)
    VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=menu'>";
}
?>