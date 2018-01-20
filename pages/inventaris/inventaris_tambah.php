<?php
include_once("koneksi.php");

$pict = $_FILES[foto][name];
$tmp = $_FILES[foto][tmp_name];
$path = './images/barang/'.$pict;
$asal = $_POST['asal'];
$kondisi = $_POST['kondisi'];

if (move_uploaded_file($tmp, $path)) {
	$q="INSERT INTO tb_inventaris VALUES (NULL, '$_POST[id_kategori]', '$_POST[id_ruang]', '$asal', '$_POST[nama_inventaris]', '$_POST[tgl_pembelian]', '$_POST[dibeli_oleh]', '$_POST[nilai_pembelian]',  '$_POST[merk]', '$_POST[nilai_saat_ini]', '$kondisi', '$pict', '$_POST[ket]')";
		mysqli_query($conn, $q);
	}	

echo "<script>
	window.location='index.php?pg=inventaris';
</script>";
?>
