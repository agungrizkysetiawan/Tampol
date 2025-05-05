<?php
include '../../config/database.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];

// Check if the student with the given NIM already exists
$qry_cek = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exe_cek = mysqli_query($db, $qry_cek);
$cr_cek = mysqli_num_rows($exe_cek);

if ($cr_cek > 0) {
    echo "<script>window.location = '../add_data_siswa.php?alert=gagal'</script>";
} else {
    // Fetch the class ID based on the selected class name
    $qry_kelas = "SELECT id_kelas FROM kelas WHERE nama_kelas = '$kelas' AND prodi = '$prodi'";
    $exe_kelas = mysqli_query($db, $qry_kelas);

    if ($exe_kelas) {
        $row_kelas = mysqli_fetch_assoc($exe_kelas);
        $id_kelas = $row_kelas['id_kelas'];

        // Insert the student data into the mahasiswa table
        $qry_input = "INSERT INTO mahasiswa (nim, nama, id_kelas) VALUES ('$nim', '$nama', '$id_kelas')";
        $exe_input = mysqli_query($db, $qry_input);

        if ($exe_input) {
            echo "<script>window.location = '../add_data_siswa.php?alert=berhasil'</script>";
        } else {
            echo "Error: " . $qry_input . "<br>" . mysqli_error($db);
        }
    } else {
        echo "Error: " . $qry_kelas . "<br>" . mysqli_error($db);
    }
}
?>
