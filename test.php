<?php 
	include 'koneksi.php';
	
	$query_9 = mysqli_query($conn, $q_9);
	$query_10 = mysqli_query($conn, $q_10);
	$query_11 = mysqli_query($conn, $q_11);
	$query_12 = mysqli_query($conn, $q_12);
	$query_13 = mysqli_query($conn, $q_13);
	$query_14 = mysqli_query($conn, $q_14);
	$query_15 = mysqli_query($conn, $q_15);
	$query_16 = mysqli_query($conn, $q_16);
	$query_17 = mysqli_query($conn, $q_17);
	$query_18 = mysqli_query($conn, $q_18);
	$query_19 = mysqli_query($conn, $q_19);
	$query_20 = mysqli_query($conn, $q_20);
	$query_21 = mysqli_query($conn, $q_21);
	$query_22 = mysqli_query($conn, $q_22);
	$query_23 = mysqli_query($conn, $q_23);
	$query_24 = mysqli_query($conn, $q_24);
	$query_25 = mysqli_query($conn, $q_25);
	$query_26 = mysqli_query($conn, $q_26);
	$query_27 = mysqli_query($conn, $q_27);
	$query_28 = mysqli_query($conn, $q_28);
	$query_29 = mysqli_query($conn, $q_29);
	$query_30 = mysqli_query($conn, $q_30);
	$query_31 = mysqli_query($conn, $q_31);
	$query_32 = mysqli_query($conn, $q_32);
	$query_33 = mysqli_query($conn, $q_33);
	$query_34 = mysqli_query($conn, $q_34);
	$query_35 = mysqli_query($conn, $q_35);
	$query_36 = mysqli_query($conn, $q_36);
	$query_37 = mysqli_query($conn, $q_37);
	$query_38 = mysqli_query($conn, $q_38);
	$query_39 = mysqli_query($conn, $q_39);
	$query_40 = mysqli_query($conn, $q_40);
?>
<?php 
while ($data = mysqli_fetch_assoc($query_5)) {
	echo $data['nama_inventaris'].", ";
}
?>
<?php 
	while ($data = mysqli_fetch_assoc($query_6)) {
		echo $data['nama_inventaris'].", ";
	}
?>
<?php 
while ($data = mysqli_fetch_assoc($query_7)) {
	echo $data['nama_inventaris'].", ";
}
?>
<?php 
	while ($data = mysqli_fetch_assoc($query_8)) {
		echo $data['nama_inventaris'].", ";
	}
?>