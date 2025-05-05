<?php
include '../../config/database.php';

$id_kelas 		=	$_POST['id_kelas'];
$nama_kelas 	=	$_POST['nama_kelas'];
$nama_dpa 	    =	$_POST['nama_dpa'];
$prodi 		    =	$_POST['prodi'];

$qry_cek	=	"SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
$exe_cek	=	mysqli_query($db, $qry_cek);
$cr_cek		=	mysqli_num_rows($exe_cek);

if($cr_cek>0){
	echo "<script>window.location = '../add_data_kelas.php?alert=gagal'</script>";
}else{
	$qry_input 	=	"INSERT INTO kelas (id_kelas, nama_kelas, nama_dpa, prodi) VALUES ('$id_kelas', '$nama_kelas', '$nama_dpa', '$prodi')";
	$exe_input	=	mysqli_query($db, $qry_input);
			
	echo "<script>window.location = '../add_data_kelas.php?alert=berhasil'</script>";
}
?>