<?php
include_once("koneksi.php");

$pict = $_FILES[foto][name];
$tmp = $_FILES[foto][tmp_name];
$path = './images/barang/'.$pict;

if (move_uploaded_file($tmp, $path)) {
	$q="INSERT INTO tb_inventaris VALUES (NULL, '$_POST[id_kategori]', '$_POST[id_ruang]', '$_POST[asal]', '$_POST[nama_inventaris]', '$_POST[tgl_pembelian]', '$_POST[dibeli_oleh]', '$_POST[nilai_pembelian]',  '$_POST[merk]', '$_POST[nilai_saat_ini]', '$_POST[kondisi]', '$pict', '$_POST[ket]')";
		mysqli_query($conn, $q);
	}	

echo "<script>
	window.location='index.php?pg=inventaris';
</script>";
?>
