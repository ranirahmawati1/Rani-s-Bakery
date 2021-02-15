<?php
$ambil = $conn->query("SELECT * FROM tb_pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
// $fotomenu = $pecah['foto_menu'];

// if(file_exists("../upload/$fotomenu"))
// {
//     unlink("../upload/$fotomenu");
// }

$conn->query("DELETE FROM tb_pelanggan WHERE id_pelanggan='$_GET[id]'");

echo "<script>alert('Data Berhasil Dihapus');</script>";
echo "<script>location='dashboard.php?halaman=pelanggan';</script>";
?>