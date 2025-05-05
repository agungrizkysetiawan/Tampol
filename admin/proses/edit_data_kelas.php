<?php
	include '../../config/database.php';

	$id_kelas			=	$_POST['id_kelas'];
	$nama_kelas 		=	$_POST['nama_kelas'];
	$prodi			    =	$_POST['prodi'];
	$nama_dosen 		=	$_POST['nip'];

	$qry_dosen = "SELECT nip FROM dosen WHERE nama_dosen = '$nama_dosen'";
	$exe_dosen = mysqli_query($db, $qry_dosen);	

	
if ($exe_dosen) {
    // Check if the class exists
    if ($row_dosen = mysqli_fetch_assoc($exe_dosen)) {
        $nip = $row_dosen['nip'];

        // Update the student data in the mahasiswa table
        $qry_update = "UPDATE kelas SET nama_kelas='$nama_kelas', prodi='$prodi', nip='$nip' WHERE id_kelas='$id_kelas'";
        $exe_update = mysqli_query($db, $qry_update);

        if ($exe_update) {
            echo "<script>window.location = '../data_kelas.php?alert=berhasil_edit'</script>";
        } else {
            echo "Error updating record: " . mysqli_error($db);
        }
    } else {
        echo "<script>window.location = '../data_kelas.php?alert=gagal_kelas'</script>";
    }
} else {
    echo "Error: " . $qry_dosen . "<br>" . mysqli_error($db);
}
?>
