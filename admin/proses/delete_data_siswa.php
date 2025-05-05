<?php
	include '../../config/database.php';

	$nim 		=	$_GET['nim'];

	$qry_del_siswa	=	"DELETE FROM mahasiswa WHERE nim = '$nim'";
	$exe_del_siswa	=	mysqli_query($db, $qry_del_siswa);

	if($exe_del_siswa){
		echo "<script>window.location = '../data_siswa.php?alert=berhasil_hapus'</script>";
	}
?>