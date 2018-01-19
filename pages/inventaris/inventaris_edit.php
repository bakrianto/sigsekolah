<?php
include_once("koneksi.php");
$q="UPDATE `tb_inventaris` SET nama_inventaris='$_POST[nama_inventaris]', id_kategori='$_POST[id_kategori]', id_ruang='$_POST[id_ruang]', asal='$_POST[asal]', nomor_inventaris='$_POST[nomor_inventaris]', tgl_pembelian='$_POST[tgl_pembelian]', dibeli_oleh='$_POST[dibeli_oleh]', nilai_pembelian='$_POST[nilai_pembelian]', merk='$_POST[merk]', nilai_saat_ini='$_POST[nilai_saat_ini]', kondisi='$_POST[kondisi]', pict='$_FILES[foto][name]', ket='$_POST[ket]' WHERE id_inventaris='$_POST[id_inventaris]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=inventaris';
</script>";
?>
