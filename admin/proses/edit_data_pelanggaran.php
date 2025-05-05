<?php
	include '../../config/database.php';

	$nama_tatib			=	$_POST['nama_tatib'];
	$level_tingkat		=	$_POST['level_tingkat'];
	$sanksi				=	$_POST['sanksi'];

	$qry_update = "UPDATE jenis_tatib SET level_tingkat='$level_tingkat', sanksi ='$sanksi' WHERE nama_tatib='$nama_tatib'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../data_pelanggaran.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../data_pelanggaran.php?alert=gagal_edit'</script>";
	}
?>