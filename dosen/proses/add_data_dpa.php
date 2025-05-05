<?php
include '../../config/database.php';

$id_dpa      = $_POST['id_dpa'];
$nama_dpa    = $_POST['nama_dpa'];

// Gunakan parameterized query untuk menghindari SQL Injection
$qry_cek    = "SELECT * FROM dpa WHERE id_dpa = ?";
$stmt_cek   = $db->prepare($qry_cek);
$stmt_cek->bind_param("s", $id_dpa);
$stmt_cek->execute();
$result_cek = $stmt_cek->get_result();

if ($result_cek->num_rows > 0) {
    echo "<script>window.location = '../add_data_dpa.php?alert=gagal'</script>";
} else {
    // Gunakan parameterized query untuk menghindari SQL Injection
    $qry_input = "INSERT INTO dpa (id_dpa, nama_dpa) VALUES (?, ?)";
    $stmt_input = $db->prepare($qry_input);
    $stmt_input->bind_param("ss", $id_dpa, $nama_dpa);
    $stmt_input->execute();
    $stmt_input->close();

    echo "<script>window.location = '../add_data_dpa.php?alert=berhasil'</script>";
}
?>
