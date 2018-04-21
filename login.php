<?php
	session_start(); 						//mulai session, krena kita akan menggunakan session pd file php ini
	include "koneksi.php"; 					//hubungkan dengan config.php untuk berhubungan dengan database
	$username=$_POST['username']; 			//tangkap data yg di input dari form login input username
	$password=$_POST['password']; 			//tangkap data yg di input dari form login input password

	$query=mysqli_query($conn, "select * from tb_admin where username='$username' and password='$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	$cek=mysqli_num_rows($query);	 			//melakukan pencocokan
	if($cek==TRUE){ 							// melakukan pemeriksaan kecocokan dengan percabangan.
		$user=mysqli_fetch_assoc($query);
		$_SESSION['username']=$username;  	//jika cocok, buat session dengan nama sesuai dengan username
		
		if ($username=="admin") {
			header("location:index.php?pg=kategori");
		} else {
			header("location:index.php?pg=beranda_index");
		}
	}else{   								//jika tidak tampilkan pesan gagal login
		header("location:index.php?msg=Username/Password Salah");
	}

?>