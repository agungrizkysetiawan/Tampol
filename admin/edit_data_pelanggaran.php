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
<?php
$nama_tatib      =   $_GET['nama_tatib'];

$qry_data_pelanggaran  =   "SELECT * FROM jenis_tatib WHERE nama_tatib = '$nama_tatib'";
$exe_data_pelanggaran  =   mysqli_query($db, $qry_data_pelanggaran);
while($show = mysqli_fetch_array($exe_data_pelanggaran))   {

    ?>


    <!-- Page content -->
    <div id="page-content">
        <!-- Forms General Header -->
        <div class="content-header">
            <div class="header-section">
                <h1>
                    <i class="gi gi-group"></i><i class="gi gi-settings"></i>Edit Data Pelanggaran<br><small>POLITEKNIK NEGERI MALANG</small>
                </h1>
            </div>
        </div>
        <!-- END Forms General Header -->
        <!-- Form Example with Blocks in the Grid -->
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form Block -->
                <div class="block">
                    <!-- Horizontal Form Title -->
                    <div class="block-title">
                        <div class="block-options pull-right">
                        </div>
                        <h2><strong>Edit</strong> Data Pelanggaran</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="proses/edit_data_pelanggaran.php" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">nama Pelanggaran</label>
                            <div class="col-md-9">
                            <input type="text" name="nama_tatib" class="form-control" value="<?php echo $show['nama_tatib']; ?>" placeholder="Masukan Nama Tata Tertib" required="" readonly>
                                <span class="help-block">Silahkan Masukan nama Tata tertib</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Level-Tingkat</label>
                            <div class="col-md-9">
                            <select name="level_tingkat" class="form-control" size="1" required="">
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                            </select>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Sanksi Pelanggaran</label>
                            <div class="col-md-9">
                                <input type="text" name="sanksi" class="form-control" value="<?php echo $show['sanksi']; ?>" placeholder="Masukkan Nama Sanksi" required="">
                                <span class="help-block">Silahkan Masukkan Sanksi</span>
                            </div>
                        </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send" style="margin-right: 5px;"></i> Edit Data</button>
                        </div>
                    </div>
                </form>
                <!-- END Horizontal Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>
    </div>
    <!-- END Form Example with Blocks in the Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsGeneral.js"></script>
<script>$(function(){ FormsGeneral.init(); });</script>

<?php include 'inc/template_end.php'; ?>