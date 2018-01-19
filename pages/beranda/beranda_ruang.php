<?php 
	include 'koneksi.php';
	$query = 'SELECT * FROM tb_ruang';
	$q = mysqli_query($conn, $query);
	while ($data = mysqli_fetch_assoc($q)) {
		echo $data[nama_ruang];
	}
 ?>