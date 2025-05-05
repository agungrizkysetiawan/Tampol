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
    <style>
        body, h1, h2, h3, h4, h5, h6, p, a, ul, ol, li, table, th, td {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
    <link rel="stylesheet" href="link-ke-css-anda.css"> <!-- Gantilah dengan link ke CSS Anda -->
</head>
<body>
<!-- Page content -->
<div id="page-content">
    <!-- Components Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-book"></i>Pilih Status Pelanggaran<br><small>POLITEKNIK NEGERI MALANG</small>
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
                    <h2><strong>Pilih</strong> Status Pelanggaran</h2>
                </div>
                <!-- END Select Components Title -->

                <!-- Select Components Content -->
                <form action="proses/isi_status_pelanggaran.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-chosen">Status Pelanggaran</label>
                        <div class="col-md-6">
                            <select id="example-chosen" name="status" class="select-chosen" style="width: 250px;">
                                <option value="N"> Belum DiKonfirmasi </option>
                                <option value="Y"> Sedang DiKonfirmasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send" style="margin-right: 10px;"></i> Submit</button>
                        </div>
                    </div>
                </form>
                <!-- END Select Components Content -->
            </div>
        </div>
    </div>
    <!-- END Form Components Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/ckeditor/ckeditor.js"></script>

<?php include 'inc/template_end.php'; ?>
</body>
</html>
