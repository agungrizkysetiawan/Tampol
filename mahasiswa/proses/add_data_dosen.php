<?php
include '../../config/database.php';

$nip 			=	$_POST['nip'];
$nama_dosen 	=	$_POST['nama_dosen'];
$jenis_kelamin 	=	$_POST['jenis_kelamin'];
$nomerHP 		=	$_POST['nomerHP'];
$alamat 		=	$_POST['alamat'];

$qry_cek	=	"SELECT * FROM dosen WHERE nip = '$nip'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_data_dosen.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO dosen (nip, nama_dosen, jenis_kelamin, nomerHP, alamat) VALUES ('$nip', '$nama_dosen', '$jenis_kelamin', '$nomerHP','$alamat')";
	$exe_input	=	mysqli_query($db, $qry_input);
			
	echo "<script>window.location = '../add_data_dosen.php?alert=berhasil'</script>";
}
?>