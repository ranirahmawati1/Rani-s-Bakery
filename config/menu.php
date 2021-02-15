<h2>Daftar Menu</h2>

<style>
h2{
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: black;
    font-size: 40px;
}
th{
    text-align: center;
}
td{
    text-align: center;
}
</style>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

    <?php $nomor=1; ?>
    <?php $ambil=$conn->query("SELECT * FROM tb_menu");?>
    <?php while($pecah = $ambil->fetch_assoc()){?>

        <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['nama_menu']; ?></td>
            <td><?php echo $pecah['harga_menu']; ?></td>
            <td>
                <img src="../config/upload/<?php echo $pecah['foto_menu']; ?>" width="100px">
            </td>
            <td>
                <a href="dashboard.php?halaman=hapusmenu&id=<?php echo $pecah['id_menu'];?>" class="btn btn-danger">Hapus</a>
                <a href="dashboard.php?halaman=ubahmenu&id=<?php echo $pecah['id_menu'];?>" class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>

    </tbody>
</table>

<a href="dashboard.php?halaman=tambahmenu" class="btn btn-primary">Tambah Menu</a>
