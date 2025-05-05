<?php
	include '../../config/database.php';

	$id_kelas			=	$_POST['id_kelas'];
	$nama_kelas 		=	$_POST['nama_kelas'];
	$nama_dpa 		    =	$_POST['nama_dpa'];
	$prodi			    =	$_POST['prodi'];

	$qry_update = "UPDATE kelas SET nama_kelas='$nama_kelas', nama_dpa='$nama_dpa', prodi='$prodi' WHERE id_kelas='$id_kelas'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../data_kelas.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../data_kelas.php?alert=gagal_edit'</script>";
	}
?>