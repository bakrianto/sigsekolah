<?php
	include_once("koneksi.php");
	$q="UPDATE `tb_organisasi` SET nama='$_POST[nama]', jabatan='$_POST[jabatan]', struktural='$_POST[struk]', alamat='$_POST[alamat]', pict='$_FILES[foto][name]',no_hp='$_POST[no_hp]' WHERE id='$_POST[id]'";
	mysqli_query($conn, $q);
	echo "<script>
		window.location='index.php?pg=organisasi';
	</script>";
?>
