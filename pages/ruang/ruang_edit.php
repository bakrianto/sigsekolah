<?php
include_once("koneksi.php");
$q="UPDATE `tb_ruang` SET `nama_ruang`='$_POST[nama_ruang]' WHERE `id_ruang`='$_POST[id_ruang]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=ruang';
</script>";
?>
