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
$id_kelas      =   $_GET['id_kelas'];

$qry_cek_kelas  =   "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
$exe_cek_kelas  =   mysqli_query($db, $qry_cek_kelas);
while($show = mysqli_fetch_array($exe_cek_kelas))   {

    ?>


    <!-- Page content -->
    <div id="page-content">
        <!-- Forms General Header -->
        <div class="content-header">
            <div class="header-section">
                <h1>
                    <i class="gi gi-group"></i><i class="gi gi-settings"></i>Edit Data Kelas<br><small>POLITEKNIK NEGERI MALANG</small>
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
                        <h2><strong>Edit</strong> Data Kelas</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="proses/edit_data_kelas.php" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Id Kelas</label>
                            <div class="col-md-9">
                            <input type="text" name="id_kelas" class="form-control" value="<?php echo $show['id_kelas']; ?>" placeholder="Masukan Id kelas" required="" readonly>
                                <span class="help-block">Silahkan Masukan id kelas anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Nama Kelas</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_kelas" class="form-control" value="<?php echo $show['nama_kelas']; ?>" placeholder="Masukan nama kelas" required="">
                                <span class="help-block">Silahkan Masukan nama kelas anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="example-select">Nama DPA</label>
                          <div class="col-md-9">
                          <select class="form-control" name="nip" id="nama_dosen" placeholder="Pilih nama Dpa" style="margin-bottom: 15px;" onchange="changeValuerifki(this.value)">
                             <option value="">Pilih DPA anda</option>
                             <?php
                                $sqlt = mysqli_query($db, "SELECT nama_dosen FROM dosen");

                                while ($rowt = mysqli_fetch_array($sqlt)) {
                                ?>
                                <option value="<?php echo $rowt['nama_dosen']; ?>"><?php echo $rowt['nama_dosen']; ?></option>
                                <?php
                                }
                                ?>
                                </select>
                     </div>
                </div>
                        <div class="form-group">
                         <label class="col-md-3 control-label" for="example-hf-email">Prodi</label>
                         <div class="col-md-9">
                         <select name="prodi" class="form-control" size="1" required="">
                                    <option value="Teknik Informatika" <?php if($show['prodi'] == 'Teknik Informatika'){ echo 'selected'; } ?>>Teknik Informatika</option>
                                    <option value="Sistem Informasi Bisnis" <?php if($show['prodi'] == 'Sistem Informasi Bisnis'){ echo 'selected'; } ?>>Sistem Informasi Bisnis</option>
                                </select>
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