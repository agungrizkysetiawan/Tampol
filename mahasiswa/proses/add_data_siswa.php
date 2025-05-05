<?php
include '../../config/database.php';

$nim 			=	$_POST['Nim'];
$nama 			=	$_POST['nama'];
$kelas 			=	$_POST['kelas'];
$Prodi 			=	$_POST['Prodi'];

$qry_cek	=	"SELECT * FROM tbl_siswa WHERE Nim = '$nim'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_data_siswa.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO tbl_siswa (Nim, nama, kelas, Prodi) VALUES ('$nim', '$nama', '$kelas', '$Prodi')";
	$exe_input	=	mysqli_query($db, $qry_input);
			
	echo "<script>window.location = '../add_data_siswa.php?alert=berhasil'</script>";
}
?>