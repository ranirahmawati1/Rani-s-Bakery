<h2> Data Pelanggan</h2>

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
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    <?php $nomor=1; ?>
    <?php $ambil = $conn->query("SELECT * FROM tb_pelanggan"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_pelanggan']; ?></td>
            <td><?php echo $pecah['email_pelanggan']; ?></td>
            <td><?php echo $pecah['telepon_pelanggan']; ?></td>
            <td>
                <a href="dashboard.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_pelanggan'];?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>