<?php
include_once("koneksi.php");
$q="DELETE FROM `tb_kategori_sub` WHERE id_kategori_sub='$_GET[id_kategori_sub]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kategori';
</script>";
?>
