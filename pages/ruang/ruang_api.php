<?php 
	include 'koneksi.php';
	$query = "SELECT * FROM tb_ruang";
	$q = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($q);

	$myJSON = json_encode($data);
	echo $myJSON;
 ?>