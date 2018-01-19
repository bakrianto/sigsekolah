<?php
include_once("koneksi.php");
$q="INSERT INTO `tb_kategori`(`id_kategori`, `nama_kategori`) VALUES (NULL,'$_POST[nama_kategori]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kategori';
</script>";
?>
