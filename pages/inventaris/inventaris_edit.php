<?php
include_once("koneksi.php");
$pict = $_FILES[foto][name];
$tmp = $_FILES[foto][tmp_name];
$path = './images/barang/'.$pict;
$asal = $_POST['asal'];
$kondisi = $_POST['kondisi'];


// $q="INSERT INTO `tb_inventaris`(`kd_barang`, `id_kategori`, `id_ruang`, `asal`, `tgl_pembelian`, `dibeli_oleh`, `nilai_pembelian`, `merk`, `kondisi`, `pict`, `ket`) VALUES ('$_POST[kd_barang]','$_POST[id_kategori]','$_POST[id_ruang]','$asal','$_POST[tgl_pembelian]','$_POST[dibeli_oleh]','$_POST[nilai_pembelian]','$_POST[merk]','$kondisi','$pict','$_POST[ket]')";

if ($pict != '') {
	if (move_uploaded_file($tmp, $path)) {
		$q="UPDATE `tb_inventaris` SET `kd_barang`='$_POST[kd_barang]',`id_kategori`='$_POST[id_kategori]',`id_ruang`='$_POST[id_ruang]',`asal`='$asal',`tgl_pembelian`='$_POST[tgl_pembelian]',`dibeli_oleh`='$_POST[dibeli_oleh]',`nilai_pembelian`='$_POST[nilai_pembelian]',`merk`='$_POST[merk]',`kondisi`='$kondisi',`pict`='$pict',`ket`='$_POST[ket]', `register`='$_POST[register]',`jumlah`='$_POST[jumlah]',`bahan`='$_POST[bahan]',`satuan`='$_POST[satuan]' WHERE id_inventaris='$_POST[id_inventaris]'";
	}
} else {
	$q="UPDATE `tb_inventaris` SET `kd_barang`='$_POST[kd_barang]',`id_kategori`='$_POST[id_kategori]',`id_ruang`='$_POST[id_ruang]',`asal`='$asal',`tgl_pembelian`='$_POST[tgl_pembelian]',`dibeli_oleh`='$_POST[dibeli_oleh]',`nilai_pembelian`='$_POST[nilai_pembelian]',`merk`='$_POST[merk]',`kondisi`='$kondisi',`ket`='$_POST[ket]', `register`='$_POST[register]',`jumlah`='$_POST[jumlah]',`bahan`='$_POST[bahan]',`satuan`='$_POST[satuan]' WHERE id_inventaris='$_POST[id_inventaris]'";
}

// $q="UPDATE `tb_inventaris` SET nama_inventaris='$_POST[nama_inventaris]', id_kategori='$_POST[id_kategori]', id_ruang='$_POST[id_ruang]', asal='$_POST[asal]', nomor_inventaris='$_POST[nomor_inventaris]', tgl_pembelian='$_POST[tgl_pembelian]', dibeli_oleh='$_POST[dibeli_oleh]', nilai_pembelian='$_POST[nilai_pembelian]', merk='$_POST[merk]', nilai_saat_ini='$_POST[nilai_saat_ini]', kondisi='$_POST[kondisi]', pict='$_FILES[foto][name]', ket='$_POST[ket]' WHERE id_inventaris='$_POST[id_inventaris]'";

mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=inventaris';
</script>";
?>
