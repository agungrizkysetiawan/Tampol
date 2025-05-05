<?php
	include '../../config/database.php';

	$Nim 		=	$_GET['Nim'];

	$qry_del_siswa	=	"DELETE FROM tbl_siswa WHERE Nim = '$Nim'";
	$exe_del_siswa	=	mysqli_query($db, $qry_del_siswa);

	if($exe_del_siswa){
		echo "<script>window.location = '../data_siswa.php?alert=berhasil_hapus'</script>";
	}
?>