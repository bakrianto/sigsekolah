<?php
	include_once("koneksi.php");
	$q="DELETE FROM `tb_organisasi` WHERE id='$_GET[id]'";
	mysqli_query($conn, $q);
	echo "<script>
		window.location='index.php?pg=organisasi';
	</script>";
?>
