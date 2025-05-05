<?php
include '../config/database.php';

if (isset($_POST['login_admin'])) {
	$username			     	=	$db->real_escape_string(addslashes(trim($_POST['username'])));
	$password	         		=	$db->real_escape_string(sha1($_POST['password']));

	$qa = "SELECT * FROM user WHERE username='$username' AND password='$password'AND level_user='admin' ";
	$qu = "SELECT * FROM user WHERE username='$username' AND password='$password'AND level_user='mahasiswa' ";
	$qd = "SELECT * FROM user WHERE username='$username' AND password='$password'AND level_user='dosen' ";
	// eksekusi query
	$e = mysqli_query($db, $qa);
	$eu = mysqli_query($db, $qu);
	$ed = mysqli_query($db, $qd);
	// hitung hasil dan cek ada atau tidaknya data
	$is_exist1 = mysqli_num_rows($e);
	$is_exist2 = mysqli_num_rows($eu);
	$is_exist3 = mysqli_num_rows($ed);
	
	if($is_exist1>0){
	// keluarkan hasil
		session_start();
		$r = mysqli_fetch_assoc($e);
		$_SESSION['nama_lengkap'] 	= $r['nama_lengkap']; // set session untuk nama
		$_SESSION['username'] 		= $r['username']; // set session untuk username
		$_SESSION['password'] 		= $r['password']; // set session untuk password
		$_SESSION['level_user'] = 'admin';  

		echo "<script>window.location = '/tampol/admin/index.php'</script>";
	}elseif($is_exist2>0){
		session_start();
		$r = mysqli_fetch_assoc($eu);
		$_SESSION['nama_lengkap'] 	= $r['nama_lengkap']; // set session untuk nama
		$_SESSION['username'] 		= $r['username']; // set session untuk username
		$_SESSION['password'] 		= $r['password']; // set session untuk password
		$_SESSION['level_user'] = 'mahasiswa';
		
		echo "<script>window.location = /tampol/mahasiswa/index.php'</script>";
	}elseif($is_exist3>0){
		session_start();
		$r = mysqli_fetch_assoc($ed);
		$_SESSION['nama_lengkap'] 	= $r['nama_lengkap']; // set session untuk nama
		$_SESSION['username'] 		= $r['username']; // set session untuk username
		$_SESSION['password'] 		= $r['password']; // set session untuk password
		$_SESSION['level_user'] = 'dosen';
		
		echo "<script>window.location = '/tampol/dosen/index.php'</script>";
	}
	else{
		echo "<script>window.location = '../login.php?alert=gagal_ditemukan'</script>";

		
	}
}
?>