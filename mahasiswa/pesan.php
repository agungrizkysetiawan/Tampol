<?php

error_reporting(0);
ini_set('display_errors', 0);

function tampilkanAlert($judul, $pesan, $tipe, $redirect) {
    echo "<script>
        swal({
            title: '$judul',
            text: '$pesan',
            type: '$tipe',
            confirmButtonColor: '#8CD4F5',
            confirmButtonText: 'Okay',
            closeOnConfirm: false,
        },
        function(isConfirm){
            if (isConfirm) {
                window.location = '$redirect';
            }
        });
    </script>";
}

if (isset($_GET['alert'])) {
    switch ($_GET['alert']) {
        case 'berhasil':
            tampilkanAlert("Berhasil", "Berhasil menambahkan Data Siswa baru!", "success", "data_siswa.php");
            break;
        case 'gagal':
            tampilkanAlert("Gagal", "Gagal menambahkan data!", "error", "add_data_siswa.php");
            break;
        case 'berhasil_edit':
            tampilkanAlert("Berhasil", "Berhasil mengedit data!", "success", "data_siswa.php");
            break;
        case 'berhasil_hapus':
            tampilkanAlert("Berhasil", "Data berhasil dihapus!", "success", "data_siswa.php");
            break;
        case 'gagal_edit':
            tampilkanAlert("Gagal", "Gagal mengedit data!", "error", "data_siswa.php");
            break;
        default:
            break;
    }
}
?>
