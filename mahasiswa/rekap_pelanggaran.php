<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php 
session_start();

error_reporting(0);
ini_set('display_errors', 0);

// Mendapatkan nim dari sesi
$nim_from_session = $_SESSION['nim'];

//kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == 'berhasil_edit') {
    echo '<script> 
    // ... (kode swal)
    </script>';
} else if ($_GET['alert'] == 'gagal_edit') {
    echo '<script> 
    // ... (kode swal)
    </script>';
} else if ($_GET['alert'] == 'berhasil_hapus') {
    echo '<script> 
    // ... (kode swal)
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
                        <!-- ... (kolom tabel lainnya) -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    // Menggunakan nim dari sesi untuk mengambil data rekap pelanggaran
                    $qry_laporan_pelanggaran = "SELECT * FROM data_pelanggaran WHERE nim = '$nim_from_session' ORDER BY id ASC";
                    $exe_laporan_pelanggaran = mysqli_query($db, $qry_laporan_pelanggaran);

                    while ($show = mysqli_fetch_array($exe_laporan_pelanggaran)) {
                        $no++;
                        ?>
                        <tr>
                            <!-- ... (isi data lainnya) -->
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
