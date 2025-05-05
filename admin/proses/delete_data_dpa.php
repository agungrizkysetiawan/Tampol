<?php
	include '../../config/database.php';

	$id_dpa		=	$_GET['id_dpa'];

	$qry_del_dpa	=	"DELETE FROM dpa WHERE id_dpa = '$id_dpa'";
	$exe_del_dpa	=	mysqli_query($db, $qry_del_dpa);

	if($exe_del_dpa){
		echo "<script>window.location = '../data_dpa.php?alert=berhasil_hapus'</script>";
	}
?>