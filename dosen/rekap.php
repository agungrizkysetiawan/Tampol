<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php 

include '../config/database.php';
$qry_nomor_pelanggaran = "SELECT * FROM data_pelanggaran ORDER BY id ASC";
$exe_nomor_pelanggaran = mysqli_query($db, $qry_nomor_pelanggaran);
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
            window.location = "data_siswa.php";
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
            window.location = "data_siswa.php";
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
                window.location = "data_siswa.php";
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
                <i class="fa fa-group"></i>Rekap Pelanggaran<br><small>POLITEKNIK NEGERI MALANG</small>
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Rekap</strong> Pelanggaran</h2>
        </div>
        

        
        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Pelapor</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nim</th>
                        <th>Kelas</th>
                        <th>Program Studi</th>
                        <th>Pelanggaran</th>
                        <th>Tingkat</th>
                        <th>Sanksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                <?php
$no = 0;
while ($show = mysqli_fetch_array($exe_laporan_pelanggaran)) {
    $no++;
?>
    <tr>
        <td class="text-center"><?php echo $no; ?></td>
        <td style="text-align: center;"><?php echo $show['pelapor'] . $nama; ?></td>
        <td><?php echo $show['nama']; ?></td>
        <td class="text-center"><?php echo $show['nim']; ?></td>
        <td><?php echo $show['kelas']; ?></td>
        <td><?php echo $show['prodi']; ?></td>
        <td><?php echo $show['nama_tatib']; ?></td>
        <td><?php echo $show['level_tingkat']; ?></td>
        <td><?php echo $show['sanksi']; ?></td>
        <td style="text-align: center;">
            <?php
            $status = $show['status'];
            $status2 = $show['status2'];

            switch ($status) {
                case 'Y':
                    echo "Sudah Ditindaklanjuti ($status2)";
                    break;
                case 'N':
                    echo "Belum Ditindaklanjuti";
                    break;
                case 'P':
                    echo "Sedang Ditindaklanjuti ($status2)";
                    break;
                default:
                    echo "Unknown Status";
                    break;
            }
            ?>
        </td>
    </tr>
<?php
}
?>

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

<?php include 'inc/template_end.php';?>
