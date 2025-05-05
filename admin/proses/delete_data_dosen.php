<?php
	include '../../config/database.php';

	$nip 		=	$_GET['nip'];

	$qry_del_dosen	=	"DELETE FROM dosen WHERE nip = '$nip'";
	$exe_del_dosen	=	mysqli_query($db, $qry_del_dosen);

	if($exe_del_dosen){
		echo "<script>window.location = '../data_dosen.php?alert=berhasil_hapus'</script>";
	}
?>