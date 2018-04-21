<?php
include_once("koneksi.php");
$q="UPDATE `tb_kategori_sub` SET `nama_sub_kategori`='$_POST[sub_kategori]' WHERE `id_kategori_sub`='$_POST[id_kategori_sub]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kategori';
</script>";
?>
