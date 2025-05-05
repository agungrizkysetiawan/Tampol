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
$nip      =   $_GET['nip'];

$qry_cek_dosen  =   "SELECT * FROM dosen WHERE nip = '$nip'";
$exe_cek_dosen  =   mysqli_query($db, $qry_cek_dosen);
while($show = mysqli_fetch_array($exe_cek_dosen))   {

    ?>


    <!-- Page content -->
    <div id="page-content">
        <!-- Forms General Header -->
        <div class="content-header">
            <div class="header-section">
                <h1>
                    <i class="gi gi-group"></i><i class="gi gi-settings"></i>Edit Data Dosen<br><small>POLITEKNIK NEGERI MALANG</small>
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
                        <h2><strong>Edit</strong> Data Dosen</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="proses/edit_data_dosen.php" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Nip</label>
                            <div class="col-md-9">
                            <input type="number" name="nip" class="form-control" value="<?php echo $show['nip']; ?>" placeholder="Masukan NIP" required="" readonly>
                                <span class="help-block">Silahkan Masukan NIP anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Nama</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_dosen" class="form-control" value="<?php echo $show['nama_dosen']; ?>" placeholder="Masukan NAMA" required="">
                                <span class="help-block">Silahkan Masukan NAMA anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Jenis Kelamin</label>
                        <div class="col-md-9">
                            <select name="jenis_kelamin" class="form-control" size="1" required="">
                            <option value="laki" <?php echo ($show['jenis_kelamin'] == 'laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php echo ($show['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                      </select>
                    </div>
                    </div>

                        <div class="form-group">
                         <label class="col-md-3 control-label" for="example-hf-email">Nomer HP</label>
                         <div class="col-md-9">
                            <input type="text" name="nomerHP" class="form-control" value="<?php echo isset($show['nomerHP']) ? $show['nomerHP'] : ''; ?>" placeholder="Masukkan Nomer HP" required="">
                         <span class="help-block">Silahkan Masukkan Nomer HP Anda</span>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Alamat</label>
                            <div class="col-md-9">
                                <input type="text" name="alamat" class="form-control" value="<?php echo $show['alamat']; ?>" placeholder="Masukan Alamat" required="">
                                <span class="help-block">Silahkan Masukan Alamat anda</span>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
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