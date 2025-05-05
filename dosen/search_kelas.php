<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php
include '../config/database.php';

// Inisialisasi variabel
$search_condition = "";
$pelanggaran_data = [];

// Cek apakah parameter search_id diset pada URL
if(isset($_GET['search_id'])) {
    $search_id = $_GET['search_id'];
    
    // Cek apakah nilai search_id tidak kosong
    if(!empty($search_id)) {
        // Menggunakan parameter search_id untuk mencari kelas dengan nama tertentu
        $search_condition = "WHERE d.kelas = '$search_id'";
        
        // Query untuk mendapatkan data pelanggaran berdasarkan pencarian kelas
        $qry_pelanggaran = "SELECT * FROM data_pelanggaran d $search_condition ORDER BY id ASC";
        $exe_pelanggaran = mysqli_query($db, $qry_pelanggaran);

        // Mengambil data pelanggaran ke dalam array
        while ($row_pelanggaran = mysqli_fetch_assoc($exe_pelanggaran)) {
            $pelanggaran_data[] = $row_pelanggaran;
        }
    }
}
?>

<!-- Page content -->
<div id="page-content">
    <!-- Components Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-book"></i>Hasil Pencarian Pelanggaran Berdasarkan Kelas<br><small>POLITEKNIK NEGERI MALANG</small>
            </h1>
        </div>
    </div>
    <!-- END Components Header -->

    <!-- Form Components Row -->
    <div class="row">
        <div class="col-md-12">
            <!-- Select Components Block -->
            <div class="block">
                <!-- Select Components Title -->
                <div class="block-title">
                    <h2><strong>Hasil Pencarian</strong> Pelanggaran</h2>
                </div>
                <!-- END Select Components Title -->

                <!-- Select Components Content -->
                <?php if (!empty($pelanggaran_data)) : ?>
                    <div class="table-responsive">
                        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">No Pelanggaran</th>
                                    <th style="text-align: center;">NIM</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">Kelas</th>
                                    <th style="text-align: center;">Prodi</th>
                                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pelanggaran_data as $key => $pelanggaran) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $key + 1; ?></td>
                                        <td style="text-align: center;"><?php echo $pelanggaran['no_pelanggaran']; ?></td>
                                        <td style="text-align: center;"><?php echo $pelanggaran['nim']; ?></td>
                                        <td style="text-align: center;"><?php echo $pelanggaran['nama']; ?></td>
                                        <td style="text-align: center;"><?php echo $pelanggaran['kelas']; ?></td>
                                        <td style="text-align: center;"><?php echo $pelanggaran['prodi']; ?></td>
                                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else : ?>
                    <p>Tidak ada hasil pencarian.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- END Form Components Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>
