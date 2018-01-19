<?php
include_once("koneksi.php");
$q="DELETE FROM `tb_inventaris` WHERE id_inventaris='$_GET[id_inventaris]'";
mysqli_query($conn, $q);
//Header("Location:index.php?pg=admin");
echo "<script>
	window.location='index.php?pg=inventaris';
</script>";
?>
