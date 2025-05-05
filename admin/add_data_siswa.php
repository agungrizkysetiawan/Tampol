<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php require 'pesan_mhs.php'; ?>

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
                <i class="gi gi-group"></i><i class="gi gi-plus"></i>Tambah Data Mahasiswa<br><small>POLITEKNIK NEGERI MALANG</small>
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
                    <h2><strong>Tambah</strong>Data Siswa</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form action="proses/add_data_siswa.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">nim</label>
                        <div class="col-md-9">
                            <input type="number" name="nim" class="form-control" placeholder="nim" required="">
                            <span class="help-block">Silahkan Masukan"nim Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Nama</label>
                        <div class="col-md-9">
                            <input type="text" name="nama" class="form-control" placeholder="NAMA" required="">
                            <span class="help-block">Silahkan Masukan Nama Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Kelas</label>
                        <div class="col-md-9">
                        <select class="form-control" name="kelas" id="nama_kelas" placeholder="Nama Kelas" style="margin-bottom: 15px;" onchange="changeValuerifki(this.value)">
                            <option value="">Pilih Kelas anda</option>
                                <?php
                                $sqlt = mysqli_query($db, "SELECT * FROM kelas");
                                $jsArray2 = "var dtplg = new Array();\n";

                                 while ($rowt = mysqli_fetch_array($sqlt)) {
                                ?>
                                <option value="<?php echo $rowt['nama_kelas']; ?>"><?php echo $rowt['nama_kelas']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">prodi</label>
                        <div class="col-md-9">
                        <select class="form-control" name="prodi" id="prodi" placeholder="Pilih Prodi" style="margin-bottom: 15px;" onchange="changeValuerifki(this.value)">
                            <option value="">Pilih Prodi anda</option>
                                <?php
                                $sqlt = mysqli_query($db, "SELECT * FROM kelas");
                                $jsArray2 = "var dtplg = new Array();\n";

                                while ($rowt = mysqli_fetch_array($sqlt)) {
                                    ?>
                                    <option value="<?php echo $rowt['prodi']; ?>"><?php echo $rowt['prodi']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
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
<script type="text/javascript">
    <?php echo $jsArray2; ?>
    function changeValuerifki(id_kelas){
        document.getElementById('nama_kelas').value = dtplg[id_kelas].nama_kelas;
        document.getElementById('prodi').value = dtplg[id_kelas].prodi;
    };
</script>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsGeneral.js"></script>
<script>$(function(){ FormsGeneral.init(); });</script>

<?php include 'inc/template_end.php'; ?>