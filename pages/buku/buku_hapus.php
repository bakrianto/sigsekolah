<?php
include_once("koneksi.php");
$q="DELETE FROM `tb_bukutamu` WHERE id_buku='$_GET[id_buku]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=buku';
</script>";
?>
