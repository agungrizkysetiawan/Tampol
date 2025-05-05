<?php
include '../../config/database.php';

$nama_tatib      = $_POST['nama_tatib'];
$level_tingkat   = $_POST['level_tingkat'];
$sanksi          = $_POST['sanksi'];

// Periksa apakah data pelanggaran sudah ada
$qry_cek = "SELECT * FROM jenis_tatib WHERE nama_tatib = '$nama_tatib' AND level_tingkat = '$level_tingkat'";
$exe_cek = mysqli_query($db, $qry_cek);

if (mysqli_num_rows($exe_cek) > 0) {
    echo "<script>window.location = '../tambah_data_pelanggaran.php?alert=gagal'</script>";
} else {
    // Simpan data pelanggaran ke dalam database
    $qry_input = "INSERT INTO jenis_tatib (nama_tatib, level_tingkat, sanksi) VALUES ('$nama_tatib', '$level_tingkat', '$sanksi')";
    $exe_input = mysqli_query($db, $qry_input);

    if ($exe_input) {
        echo "<script>window.location = '../data_pelanggaran.php?alert=berhasil'</script>";
    } else {
        echo "Error: " . $qry_input . "<br>" . mysqli_error($db);
    }
}
?>
