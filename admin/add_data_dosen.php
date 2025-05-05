<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php require 'pesan_dosen.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - POLITEKNIK NEGERI MALANG</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-group"></i><i class="gi gi-plus"></i>Tambah Data Dosen<br><small>POLITEKNIK NEGERI MALANG</small>
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
                    <h2><strong>Tambah</strong>Data Dosen</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form action="proses/add_data_dosen.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">NIP</label>
                        <div class="col-md-9">
                            <input type="number" name="nip" class="form-control" placeholder="nip" required="" >
                            <span class="help-block">Silahkan Masukan NIP Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Nama</label>
                        <div class="col-md-9">
                            <input type="text" name="nama_dosen" class="form-control" placeholder="nama_dosen" required="">
                            <span class="help-block">Silahkan Masukan Nama Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Jenis Kelamin</label>
                        <div class="col-md-9">
                            <select name="jenis_kelamin" class="form-control" size="1" required="">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">NomerHP</label>
                        <div class="col-md-9">
                            <input type="text" name="nomerHP" class="form-control" placeholder="nomerHP" required="">
                            <span class="help-block">Silahkan Masukan Nomer HP Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Alamat</label>
                        <div class="col-md-9">
                            <input type="text" name="alamat" class="form-control" placeholder="alamat" required="">
                            <span class="help-block">Silahkan Masukan alamat Anda</span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send" style="margin-right: 5px;"></i>Tambah Data</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-refresh" style="margin-right: 5px;"></i> Reset</button>
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