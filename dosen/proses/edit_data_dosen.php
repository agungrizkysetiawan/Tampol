<?php
	include '../../config/database.php';

	$nip				=	$_POST['nip'];
	$nama_dosen 		=	$_POST['nama_dosen'];
	$jenis_kelamin 		=	$_POST['jenis_kelamin'];
	$nomerHP			=	$_POST['nomerHP'];
    $alamat 			=	$_POST['alamat'];

	$qry_update = "UPDATE dosen SET nama_dosen='$nama_dosen', jenis_kelamin='$jenis_kelamin', nomerHP='$nomerHP', alamat='$alamat' WHERE nip='$nip'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../data_dosen.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../data_dosen.php?alert=gagal_edit'</script>";
	}
?>