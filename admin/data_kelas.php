<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - POLITEKNIK NEGERI MALANG</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6, p, a, ul, ol, li, table, th, td {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
    <link rel="stylesheet" href="link-ke-css-anda.css"> <!-- Gantilah dengan link ke CSS Anda -->
</head>
<body>
<?php 

error_reporting(0);
ini_set('display_errors', 0);
                    //kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == 'berhasil_edit') {
    echo '<script> 

    swal({
        title: "Berhasil",
        text: "Berhasil mengedit data!",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "data_kelas.php";
        }
    });
    </script>';
} else if ($_GET['alert'] == 'gagal_edit') {
    echo '<script> 

    swal({
        title: "Gagal",
        text: "Gagal mengedit data!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "data_kelas.php";
        }
    });
    </script>';
}else if ($_GET['alert'] == 'berhasil_hapus') {
        echo '<script> 

        swal({
            title: "Berhasil",
            text: "Data berhasil dihapus!",
            type: "success",
            confirmButtonColor: "#8CD4F5",
            confirmButtonText: "Okay",
            closeOnConfirm: false,
        },
        function(isConfirm){
            if (isConfirm) {
                window.location = "data_kelas.php";
            }
        });
        </script>';
    }
?>


<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-group"></i>Data Kelas<br><small>POLITEKNIK NEGERI MALANG</small>
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Data</strong> Kelas</h2>
        </div>
        <h2 style="text-align: center; font-family: Arial; margin-bottom: 30px;">Semua Data Kelas</h2>

        <a href="add_data_kelas.php"><button class="btn btn-sm btn-info" title="Tambah Data" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i> Tambah Data</button></a>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Id kelas</th>
                        <th>Nama Kelas</th>
                        <th class="text-center">nama Dpa</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                 <?php
                 $no = 0;
                 while ($show = mysqli_fetch_array($exe_kelas)){
                    $no++;
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td><?php echo $show['id_kelas']; ?></td>
                        <td><?php echo $show['nama_kelas']; ?></td>
                        <td class="text-center"><?php echo $show['nama_dosen']; ?></td>
                        <td><?php echo $show['prodi']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="edit_data_kelas.php?id_kelas=<?php echo $show['id_kelas']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="proses/delete_data_kelas.php?id_kelas=<?php echo $show['id_kelas']; ?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>
</body>
</html>