<?php
$ambil = $conn->query("SELECT * FROM tb_menu WHERE id_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotomenu = $pecah['foto_menu'];

if(file_exists("../upload/$fotomenu"))
{
    unlink("../upload/$fotomenu");
}

$conn->query("DELETE FROM tb_menu WHERE id_menu='$_GET[id]'");

echo "<script>alert('Menu Berhasil Dihapus');</script>";
echo "<script>location='dashboard.php?halaman=menu';</script>";
?>