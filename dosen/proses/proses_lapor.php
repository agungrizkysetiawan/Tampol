<?php 

include("../../config/database.php");
date_default_timezone_set('Asia/Jakarta');

function nomor() {

	include("../../config/database.php");

	$sql = "SELECT no_pelanggaran FROM data_pelanggaran ORDER BY no_pelanggaran DESC LIMIT 0,3";
	$query = mysqli_query($db, $sql);
	list ($no_temp) = mysqli_fetch_row($query);

	if ($no_temp == '') {
		$no_urut = 'LPR001';
		
	} else {
		$jum = substr($no_temp,3,6);
		$jum++;
		if($jum <= 9) {
			$no_urut = 'LPR00' . $jum;
		} elseif ($jum <= 99) {
			$no_urut = 'LPR0' . $jum;
		} elseif ($jum <= 999) {
			$no_urut = 'LPR' . $jum;
		} elseif ($jum <= 9999) {
			$no_urut = 'LP' . $jum;
		} elseif ($jum <= 99999) {
			$no_urut = 'L' . $jum; 	
		} else {
			die("Nomor urut melebih batas");		
		}
	}
	return $no_urut;
}

$nomor = nomor();

$nim 					=   isset($_POST['nim']) ? $_POST['nim'] : '';
$nama 					=	$_POST['nama'];
$kelas 			        =	$_POST['kelas'];
$prodi 					=	$_POST['prodi'];
$nama_tatib 			= 	isset($_POST['nama_tatib']) ? $_POST['nama_tatib'] : '';
$level_tingkat 			= 	$_POST['level_tingkat'];
$sanksi					= 	$_POST['sanksi'];
$tanggal_kejadian 		= 	isset($_POST['tanggal_kejadian']) ? $_POST['tanggal_kejadian'] : '';
$waktu					=	date('d-m-Y H:i:s');
$status					=	'N';

$qry_input = $qry_input = "INSERT INTO data_pelanggaran (id, no_pelanggaran, nim, nama, kelas, prodi, nama_tatib, level_tingkat, sanksi, tanggal_kejadian, waktu, waktu_konfirmasi, status, status2 ) VALUES ('', '$nomor', '$nim', '$nama', '$kelas','$prodi','$nama_tatib', '$level_tingkat', '$sanksi', '$tanggal_kejadian','$waktu', '', '$status', '')";

$exe_input = mysqli_query($db, $qry_input);

if (!$qry_input){
	echo "<script>window.location = '../lapor.php?alert=gagal'</script>";
} else {
	echo "<script>window.location = '../no_pelanggaran.php?no_pelanggaran=$nomor'</script>";
}

?>
