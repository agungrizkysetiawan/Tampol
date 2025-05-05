<?php
include '../../config/database.php';

$id_kelas   	= $_POST['id_kelas'];
$nama_kelas 	= $_POST['nama_kelas'];
$prodi      	= $_POST['prodi'];
$nama_dosen 	= $_POST['nip']; // Nama DPA dari form

// Check if the class with the given ID already exists
$qry_cek = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
$exe_cek = mysqli_query($db, $qry_cek);
$cr_cek  = mysqli_num_rows($exe_cek);

if ($cr_cek > 0) {
    echo "<script>window.location = '../add_data_kelas.php?alert=gagal'</script>";
} else {
    // Fetch the dosen name based on the given Nama DPA
    $qry_dosen = "SELECT nip FROM dosen WHERE nama_dosen = '$nama_dosen'";
    $exe_dosen = mysqli_query($db, $qry_dosen);
	if ($exe_dosen) {
        $row_dosen = mysqli_fetch_assoc($exe_dosen);
        $nip = $row_dosen['nip'];

        // Insert the class data into the kelas table
        $qry_input = "INSERT INTO kelas (id_kelas, nama_kelas, prodi, nip) VALUES ('$id_kelas', '$nama_kelas', '$prodi', '$nip')";
        $exe_input = mysqli_query($db, $qry_input);

        if ($exe_input) {
            echo "<script>window.location = '../add_data_kelas.php?alert=berhasil'</script>";
        } else {
            echo "Error: " . $qry_input . "<br>" . mysqli_error($db);
        }
    } else {
        echo "Error: " . $qry_dosen . "<br>" . mysqli_error($db);
    }
}
?>
