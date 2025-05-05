<?php
	include '../../config/database.php';

	$Nim				=	$_POST['Nim'];
	$nama 				=	$_POST['nama'];
	$kelas 				=	$_POST['kelas'];
	$Prodi				=	$_POST['Prodi'];

	$qry_update	=	"UPDATE tbl_siswa SET nama='$nama', kelas='$kelas', Prodi='$Prodi' WHERE Nim='$Nim'";
	$exe_update	=	mysqli_query($db, $qry_update);

	if($exe_update){
		echo "<script>window.location = '../data_siswa.php?alert=berhasil_edit'</script>";
	}else{
		echo "<script>window.location = '../data_siswa.php?alert=gagal_edit'</script>";
	}
?>