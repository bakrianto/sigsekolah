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

	if ($pict!='') {
		// echo "ono gambar";die();
		if (move_uploaded_file($tmp, $path)){
			$q="UPDATE `tb_organisasi` SET nama='$nama', jabatan='$jabatan', struktural='$struktural', alamat='$alamat', pict='$pict',no_hp='$no', aktif='$aktif' WHERE id='$_POST[id_org]'";
			mysqli_query($conn, $q);

			if ($struktural!='' AND $aktif=='1') {
				$q2="UPDATE `tb_organisasi` SET aktif='0' WHERE id !='$_POST[id_org]' AND struktural='$struktural'";
				mysqli_query($conn, $q2);
			}
		}
	} else {
		// echo "ra ono gambar".$_POST[no];die();
		$q="UPDATE `tb_organisasi` SET nama='$nama', jabatan='$jabatan', struktural='$struktural', alamat='$alamat', no_hp='$no', aktif='$aktif' WHERE id = '$_POST[id_org]'";
		mysqli_query($conn, $q);

		if ($struktural!='' AND $aktif=='1') {
			$q2="UPDATE `tb_organisasi` SET aktif='0' WHERE id !='$_POST[id_org]' AND struktural='$struktural'";
			mysqli_query($conn, $q2);
		}
	}

	
	echo "<script>
		window.location='index.php?pg=organisasi';
	</script>";
?>
