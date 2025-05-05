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
$id_dpa      =   $_GET['id_dpa'];

$qry_data_dpa  =   "SELECT * FROM dpa WHERE id_dpa = '$id_dpa'";
$exe_data_dpa  =   mysqli_query($db, $qry_data_dpa);
while($show = mysqli_fetch_array($exe_data_dpa))   {

    ?>


    <!-- Page content -->
    <div id="page-content">
        <!-- Forms General Header -->
        <div class="content-header">
            <div class="header-section">
                <h1>
                    <i class="gi gi-group"></i><i class="gi gi-settings"></i>Edit Data DPA<br><small>POLITEKNIK NEGERI MALANG</small>
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
                        <h2><strong>Edit</strong> Data DPA</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="proses/edit_data_dpa.php" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">ID DPA</label>
                            <div class="col-md-9">
                            <input type="text" name="id_dpa" class="form-control" value="<?php echo $show['id_dpa']; ?>" placeholder="Masukan Nama ID DPA" required="" readonly>
                                <span class="help-block">Silahkan Masukan ID DPA</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Level-Tingkat</label>
                            <div class="col-md-9">
                            <input type="text" name="nama_dpa" class="form-control" value="<?php echo $show['nama_dpa']; ?>" placeholder="Masukan Nama DPA" required="">
                            <span class="help-block">Silahkan Masukan Nama DPA</span>
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