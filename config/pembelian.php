<h2>Data Pembelian</h2>

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
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>

    <?php $nomor=1; ?>
    <?php $ambil=$conn->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan ON tb_pembelian.id_pelanggan=tb_pelanggan.id_pelanggan"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
    
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_pelanggan']; ?></td>
            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
            <td><?php echo $pecah['total_pembelian']; ?></td>
            <td>
                <a href="dashboard.php?halaman=details&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">Detail</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>