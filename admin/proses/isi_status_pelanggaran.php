<?php
include '../../config/database.php';

	$status	=	$_POST['status'];

	if ($status == 'N') {
		echo "<script>window.location='../konfirmasi_pelanggaran.php'</script>";
	}else if ($status == 'Y') {
		echo "<script>window.location='../konfirmasi_pelanggaran2.php'</script>";
	}
?>