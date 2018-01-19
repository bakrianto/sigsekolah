<?php
	include_once("koneksi.php");

	$nama = $_POST[nama];
	$jabatan = $_POST[jabatan];
	$struktural = $_POST[struk];
	$alamat = $_POST[alamat];
	$no = $_POST[no];

	$pict = $_FILES[foto][name];
	$tmp = $_FILES[foto][tmp_name];
	$path = './images/anggota/'.$pict;


	if (move_uploaded_file($tmp, $path)){

		$q="INSERT INTO tb_organisasi VALUES (NULL,'$nama', '$jabatan', '$struktural', '$alamat', '$pict', '$no')";
		mysqli_query($conn, $q);

	}
	echo "<script>
		window.location='index.php?pg=organisasi';
	</script>";
?>
