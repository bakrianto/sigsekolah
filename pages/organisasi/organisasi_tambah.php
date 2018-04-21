<?php
	include_once("koneksi.php");

	$nama = $_POST[nama];
	$jabatan = $_POST[jabatan];
	$struktural = $_POST[struk];
	$alamat = $_POST[alamat];
	$no = $_POST[no];
	$aktif = $_POST[aktif];

	$pict = $_FILES[foto][name];
	$tmp = $_FILES[foto][tmp_name];
	$path = './images/anggota/'.$pict;

	if (move_uploaded_file($tmp, $path)){

		$q="INSERT INTO tb_organisasi (`id`, `nama`, `jabatan`, `struktural`, `alamat`, `pict`, `no_hp`, `aktif`) VALUES (NULL,'$nama', '$jabatan', '$struktural', '$alamat', '$pict', '$no', '$aktif')";
		mysqli_query($conn, $q);

		if ($struktural!='' AND $aktif=='1') {
			$last_id = mysqli_insert_id($conn);
			$q2="UPDATE `tb_organisasi` SET aktif='0' WHERE id !='$last_id' AND struktural='$struktural'";
			mysqli_query($conn, $q2);
		}
	}
	echo "<script>
		window.location='index.php?pg=organisasi';
	</script>";
?>
