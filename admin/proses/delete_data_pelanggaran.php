<?php
	include '../../config/database.php';

	$nama_tatib 		=	$_GET['nama_tatib'];

	$qry_del_pelanggaran	=	"DELETE FROM jenis_tatib WHERE nama_tatib = '$nama_tatib'";
	$exe_del_pelanggaran	=	mysqli_query($db, $qry_del_pelanggaran);

	if($exe_del_pelanggaran){
		echo "<script>window.location = '../data_pelanggaran.php?alert=berhasil_hapus'</script>";
	}
?>