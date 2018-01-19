<?php
include_once("koneksi.php");
$q="DELETE FROM `tb_ruang` WHERE id_ruang='$_GET[id_ruang]'";
mysqli_query($conn, $q);
//Header("Location:index.php?pg=admin");
echo "<script>
	window.location='index.php?pg=ruang';
</script>";
?>
