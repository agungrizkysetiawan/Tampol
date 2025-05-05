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

$status    =   $_POST['status'];

$qry_laporan_pelanggaran   =     "SELECT * FROM data_pelanggaran WHERE status = '$status'";
$exe_laporan_pelanggaran    =     mysqli_query($db, $qry_laporan_pelanggaran);


?>


<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-book"></i>Data Pelanggaran ( <?php  
                    if ( $status == 'N' ){
                        echo "Belum Ditindaklanjuti";
                    }else if ( $status == 'P' ){
                        echo "Sedang Ditindaklanjuti";
                    }else if ( $status == 'Y' ){
                        echo "Sudah Ditindaklanjuti";
                    }
                    ?> )<br><small>POLITEKNIK NEGERI MALANG</small>
                </h1>
            </div>
        </div>
        <!-- END Datatables Header -->

        <!-- Datatables Content -->
        <div class="block full">
            <div class="block-title" style="padding : 20px;" >
                <h2><strong>Isi</strong> Data Pelanggaran ( <?php  
                    if ( $status == 'N' ){
                        echo "Belum Ditindaklanjuti";
                    }else if ( $status == 'P' ){
                        echo "Sedang Ditindaklanjuti";
                    }else if ( $status == 'Y' ){
                        echo "Sudah Ditindaklanjuti";
                    }
                    ?> )</h2>
                    <a href="report/cek.php?status=<?php echo $status; ?>" target="_blank" class="pull-right"><input type="button" value="REPORT" class="btn btn-danger"></a>
                </div>
                <h2 style="text-align: center; font-family: Arial; margin-bottom: 30px;"> <?php  
                if ( $status == 'N' ){
                    echo "Belum Ditindaklanjuti";
                }else if ( $status == 'P' ){
                    echo "Sedang Ditindaklanjuti";
                }else if ( $status == 'Y' ){
                    echo "Sudah Ditindaklanjuti";
                }
                ?>  </h2>

                <div class="table-responsive">
                    <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th class="text-center" width="20px">No</th>
                            <th style="text-align: center;"> NIM </th>
                            <th style="text-align: center;"> Nama </th>
                            <th>Kelas</th>
                            <th>Prodi</th>
                            <th>jenis Pelanggaran</th>
                            <th>level Tingkat</th>
                            <th>Tanggal, Tempat Kejadian</th>
                            <th>Bukti Sanksi</th>
                                <?php 
                                if ($status == 'N') {
                                    echo "<th hidden> Status </th>";
                                }else{
                                    echo "<th> Status </th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                         $no = 0;
                         while ($show = mysqli_fetch_array($exe_laporan_pelanggaran)){
                            $no++;
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no; ?></td>
                        <td style="text-align: center;"><?php echo $show['nim']; ?></td>
                        <td style="text-align: center;"><?php echo $show['nama']; ?></td>
                        <td style="text-align: center;"><?php echo $show['kelas']; ?></td>
                        <td style="text-align: center;"><?php echo $show['prodi']; ?></td>
                        <td style="text-align: center;"><?php echo $show['nama_tatib']; ?></td>
                        <td style="text-align: center;"><?php echo $show['level_tingkat']; ?></td>
                        <td style="text-align: center;"><?php echo $show['tanggal_kejadian']; echo ", "; echo $show['tempat_kejadian']; ?></td>
                        <td style="text-align: center;"><?php echo $show['bukti_sanksi']; ?></td>
                                <?php 
                                if ($status != 'N') {
                                    ?>
                                    <td style='text-align: center;'><?php echo $show['status2']; ?></td>
                                    <?php
                                }else if($status == 'N'){
                                    echo "<th hidden> Status </th>";
                                }
                                ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Datatables Content -->
        </div>
        <!-- END Page Content -->

        <?php include 'inc/page_footer.php'; ?>
        <?php include 'inc/template_scripts.php'; ?>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>

        <?php include 'inc/template_end.php'; ?>