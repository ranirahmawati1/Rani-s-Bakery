<h2>Detail Pembelian</h2>

<style>
h2{
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: black;
    font-size: 40px;
}
</style>

<?php
$ambil = $conn->query("SELECT * FROM tb_pembelian JOIN tb_pelanggan ON tb_pembelian.id_pelanggan=tb_pelanggan.id_pelanggan
WHERE tb_pembelian.id_pembelian='$_GET[id]'");
$details = $ambil->fetch_assoc();
?>
<pre><?php print_r($details); ?></pre>

<strong><?php echo $details['nama_pelanggan']; ?></strong>
<p>
    <?php echo $details['telepon_pelanggan']; ?> <br>
    <?php echo $details['email_pelanggan']; ?>
</p>

<p>
    Tanggal : <?php echo $details['tanggal_pembelian']; ?> <br>
    Total : <?php echo $details['total_pembelian']; ?>
</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>

    <?php $nomor=1; ?>
    <?php $ambil = $conn->query("SELECT * FROM pembelian_menu JOIN tb_menu ON pembelian_menu.id_menu=tb_menu.id_menu
    WHERE pembelian_menu.id_pembelian='$_GET[id]'"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>

        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_menu']; ?> </td>
            <td><?php echo $pecah['harga_menu']; ?> </td>
            <td><?php echo $pecah['jumlah']; ?> </td>
            <td>
                <?php echo $pecah['harga_menu']*$pecah['jumlah']; ?>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>        

    </tbody>
</table>