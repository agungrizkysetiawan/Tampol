<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php
include '../config/database.php';

// Inisialisasi variabel
$search_condition = "";
$kelas_data = [];

// Cek apakah parameter search_id diset pada URL
if(isset($_GET['search_id'])) {
    $search_id = $_GET['search_id'];
    
    // Cek apakah nilai search_id tidak kosong
    if(!empty($search_id)) {
        // Menggunakan parameter search_id untuk mencari kelas dengan nama tertentu
        $search_condition = "WHERE d.nama_kelas = '$search_id'";
        
        // Query untuk mendapatkan data kelas berdasarkan pencarian
        $qry_kelas = "SELECT * FROM data_kelas $search_condition ORDER BY id_kelas ASC";
        $exe_kelas = mysqli_query($db, $qry_kelas);

        // Mengambil data kelas ke dalam array
        while ($row_kelas = mysqli_fetch_assoc($exe_kelas)) {
            $kelas_data[] = $row_kelas;
        }
    }
}

// Query untuk mendapatkan data pelanggaran
$qry_nomor_pelanggaran = "SELECT * FROM data_pelanggaran $search_condition ORDER BY id ASC";
$exe_nomor_pelanggaran = mysqli_query($db, $qry_nomor_pelanggaran);
?>

<!-- Page content -->
<div id="page-content">
    <!-- Components Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-book"></i>Kelas Saya<br><small>POLITEKNIK NEGERI MALANG</small>
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
                    <h2><strong>Kelas</strong> Saya</h2>
                </div>
                <!-- END Select Components Title -->

                <!-- Select Components Content -->
                <div class="search-form">
                    <form action="search_kelas.php" method="GET"> <!-- Ganti "search_kelas.php" dengan nama file untuk menampilkan hasil pencarian -->
                        <label for="searchKelasSaya">Cari Kelas :</label>
                        <input type="text" id="searchKelasSaya" name="search_id" placeholder="Cari Kelas">
                        <button type="submit">Cari</button>
                    </form>
                </div>

                <!-- Tampilkan hasil pencarian -->
                <?php if (!empty($kelas_data)) : ?>
                    <div class="table-responsive">
                        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">ID Kelas</th>
                                    <th style="text-align: center;">Nama Kelas</th>
                                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kelas_data as $key => $kelas) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $key + 1; ?></td>
                                        <td style="text-align: center;"><?php echo $kelas['id_kelas']; ?></td>
                                        <td style="text-align: center;"><?php echo $kelas['nama_kelas']; ?></td>
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
