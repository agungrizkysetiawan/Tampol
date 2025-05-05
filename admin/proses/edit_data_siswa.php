<?php
include '../../config/database.php';

$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$kelas  = $_POST['kelas'];
$prodi  = $_POST['prodi'];  // Mengambil ID kelas dari form

// Fetch the class ID based on the selected class name and program
$qry_kelas = "SELECT id_kelas FROM kelas WHERE nama_kelas = '$kelas' AND prodi = '$prodi'";
$exe_kelas = mysqli_query($db, $qry_kelas);

if ($exe_kelas) {
    // Check if the class exists
    if ($row_kelas = mysqli_fetch_assoc($exe_kelas)) {
        $id_kelas = $row_kelas['id_kelas'];

        // Update the student data in the mahasiswa table
        $qry_update = "UPDATE mahasiswa SET nama='$nama', nim='$nim', id_kelas='$id_kelas' WHERE nim='$nim'";
        $exe_update = mysqli_query($db, $qry_update);

        if ($exe_update) {
            echo "<script>window.location = '../data_siswa.php?alert=berhasil_edit'</script>";
        } else {
            echo "Error updating record: " . mysqli_error($db);
        }
    } else {
        echo "<script>window.location = '../data_siswa.php?alert=gagal_kelas'</script>";
    }
} else {
    echo "Error: " . $qry_kelas . "<br>" . mysqli_error($db);
}
?>
