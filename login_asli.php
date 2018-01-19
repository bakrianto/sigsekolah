<?php
$valid=false;
$user = $_POST['username'];
$pass = $_POST['password'];

if(!empty($_POST['username']) && !empty($_POST['password'])){
	include "koneksi.php";
	$q="SELECT * FROM `tb_admin` WHERE `username` ='$user' AND `password`='$pass'";

	if ($q) {
		$qx=mysqli_query($conn, $q);

		if(mysqli_num_rows($qx)>0){
			$valid=true;
			$user=mysqli_fetch_assoc($qx);
			$_SESSION['level']=$user['level'];

			if ($user['level']==1) {
				session_start();
				$_SESSION['userid']=$user['id_admin'];
				$_SESSION['usernm']=$user['username'];
				header('location:admin.php?pg=kategori');
			}
			elseif ($user['level']==2){
				session_start();
				$_SESSION['userid']=$user['id_admin'];
				$_SESSION['usernm']=$user['username'];
				header('location:user.php?pg=beranda');
			}
		}
	}
}

if($valid==false){
header("location:index.php?msg=Username/Password Salah");
}?>
