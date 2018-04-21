<?php
include_once("koneksi.php");
$q="INSERT INTO `tb_kategori_sub`(`id_kategori_sub`, `nama_sub_kategori`) VALUES (NULL,'$_POST[nama_sub_kategori]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kategori';
</script>";
?>
