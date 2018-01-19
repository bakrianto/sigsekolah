<?php
include_once("koneksi.php");
$q="UPDATE `tb_bukutamu` SET nama='$_POST[nama]', alamat='$_POST[alamat]', email='$_POST[email]', pesan='$_POST[pesan]' WHERE `id_buku`='$_POST[id_buku]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=buku';
</script>";
?>
