<?php
include_once("koneksi.php");
$q="INSERT INTO `tb_ruang`(`id_ruang`, `nama_ruang`) VALUES (NULL,'$_POST[nama_ruang]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=ruang';
</script>";
?>
