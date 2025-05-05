<?php
	include '../../config/database.php';

	$id_kelas 		=	$_GET['id_kelas'];

	$qry_del_kelas	=	"DELETE FROM kelas WHERE id_kelas = '$id_kelas'";
	$exe_del_kelas	=	mysqli_query($db, $qry_del_kelas);

	if($exe_del_kelas){
		echo "<script>window.location = '../data_kelas.php?alert=berhasil_hapus'</script>";
	}
?>