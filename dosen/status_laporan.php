<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php
include '../config/database.php';

$qry_nomor_pelanggaran = "SELECT * FROM data_pelanggaran ORDER BY id ASC";
$exe_nomor_pelanggaran = mysqli_query($db, $qry_nomor_pelanggaran);

?>

    <!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-group"></i>Status Laporan<br><small>POLITEKNIK NEGERI MALANG</small>
            </h1>
        </div>
    </div> 

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-body">
        <form name="input" method="post" action="summary.php">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                        <div class="block-title">
                        <h2><strong>Data</strong> Mahasiswa</h2>
                        </div>
                            </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                        <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nomor Pelanggaran</th>
                                            <th style="text-align: center;">Nama Pelapor</th>
                                            <th style="text-align: center;">NIM</th>
                                            <th style="text-align: center;">Nama</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">Prodi</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Waktu Konfirmasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        while ($show    =   mysqli_fetch_array($exe_nomor_pelanggaran)){
                                            $no++;
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no; ?></td>
                                                <td style="text-align: center;"><?php echo $show['no_pelanggaran']; ?></td>
                                                <td style="text-align: center;"><?php echo $nama; ?></td>
                                                <td style="text-align: center;"><?php echo $show['nim']; ?></td>
                                                <td style="text-align: center;"><?php echo $show['nama']; ?></td>
                                                <td style="text-align: center;"><?php echo $show['kelas']; ?></td>
                                                <td style="text-align: center;"><?php echo $show['prodi']; ?></td>
                                                <td style="text-align: center;">
                                                    <?php  
                                                    if ( $show['status'] == 'Y' ){
                                                        // echo "Selesai ("; echo $show['status2']; echo " )";
                                                        echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                                                    }else if ( $show['status'] == 'N' ){
                                                        // echo "Belum";
                                                        echo '<span class="badge badge-warning">Belum</span>';
                                                    }else if ( $show['status'] == 'P' ){
                                                        // echo "proses ("; echo $show['status2']; echo " )";
                                                        echo '<span class="badge badge-danger">Proses</span>';
                                                    }
                                                    ?>
                                                </td>
                                                <td style="text-align: center;">
                                            
                                                    <?php  
                                                    if ( $show['status'] == 'Y' ){
                                                        echo $show['waktu_konfirmasi'];
                                                    }else if ( $show['status'] == 'P' ){
                                                        echo "proses ("; echo $show['status2']; echo " )";
                                                    }else if ( $show['status'] == 'N' ){
                                                        echo "Belum";
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
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>


</div><!-- Page Inner -->
</main><!-- Page Content -->
<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/pace-master/pace.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/waves/waves.min.js"></script>
<script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/modern.min.js"></script>
<script src="assets/js/pages/table-data.js"></script>

</body>
</html>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>