<?php
include_once("koneksi.php");

$cek = mysqli_query($conn,"SELECT * FROM `tb_inventaris` WHERE `kd_barang`='$_POST[kd_barang]'");
$rows= mysqli_num_rows($cek);

$pict = $_FILES[foto][name];
$tmp = $_FILES[foto][tmp_name];
$path = './images/barang/'.$pict;
$asal = $_POST['asal'];
$kondisi = $_POST['kondisi'];

if (move_uploaded_file($tmp, $path)) {
		// $q="INSERT INTO tb_inventaris VALUES (NULL, '$_POST[id_kategori]', '$_POST[id_ruang]', '$asal', '$_POST[nama_inventaris]', '$_POST[tgl_pembelian]', '$_POST[dibeli_oleh]', '$_POST[nilai_pembelian]',  '$_POST[merk]', '$_POST[nilai_saat_ini]', '$kondisi', '$pict', '$_POST[ket]')";

		$q="INSERT INTO `tb_inventaris`(`kd_barang`, `id_kategori`, `id_ruang`, `asal`, `tgl_pembelian`, `dibeli_oleh`, `nilai_pembelian`, `merk`, `kondisi`, `pict`, `ket`, `register`, `jumlah`, `bahan`, `satuan`) VALUES ('$_POST[kd_barang]','$_POST[id_kategori]','$_POST[id_ruang]','$asal','$_POST[tgl_pembelian]','$_POST[dibeli_oleh]','$_POST[nilai_pembelian]','$_POST[merk]','$kondisi','$pict','$_POST[ket]', '$_POST[register]', '$_POST[jumlah]', '$_POST[bahan]', '$_POST[satuan]')";
		mysqli_query($conn, $q);
	}else {
		$q="INSERT INTO `tb_inventaris`(`kd_barang`, `id_kategori`, `id_ruang`, `asal`, `tgl_pembelian`, `dibeli_oleh`, `nilai_pembelian`, `merk`, `kondisi`, `pict`, `ket`, `register`, `jumlah`, `bahan`, `satuan`) VALUES ('$_POST[kd_barang]','$_POST[id_kategori]','$_POST[id_ruang]','$asal','$_POST[tgl_pembelian]','$_POST[dibeli_oleh]','$_POST[nilai_pembelian]','$_POST[merk]','$kondisi',NULL,'$_POST[ket]', '$_POST[register]', '$_POST[jumlah]', '$_POST[bahan]', '$_POST[satuan]')";
		mysqli_query($conn, $q);
	}	

echo "<script>
	window.location='index.php?pg=inventaris';
</script>";
?>
