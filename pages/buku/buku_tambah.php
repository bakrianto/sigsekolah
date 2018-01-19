<?php
include_once("koneksi.php");
$q="INSERT INTO tb_bukutamu VALUES (NULL,'$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '$_POST[pesan]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=buku';
</script>";
?>
