<?php
include_once("koneksi.php");
$q="UPDATE `tb_kategori` SET `nama_kategori`='$_POST[nama_kategori]', `penyusutan`='$_POST[penyusutan]' WHERE `id_kategori`='$_POST[id_kategori]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kategori';
</script>";
?>
