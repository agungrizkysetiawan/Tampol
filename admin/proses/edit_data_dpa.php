<?php
	include '../../config/database.php';

	$id_dpa = $_POST['id_dpa'];
	$nama_dpa = $_POST['nama_dpa'];

	$qry_update = "UPDATE dpa SET nama_dpa='$nama_dpa' WHERE id_dpa='$id_dpa'";
	$exe_update = mysqli_query($db, $qry_update);

	if ($exe_update) {
		echo "<script>window.location = '../data_dpa.php?alert=berhasil_edit'</script>";
	} else {
		echo "<script>window.location = '../data_dpa.php?alert=gagal_edit'</script>";
	}
?>
