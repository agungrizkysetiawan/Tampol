<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php

error_reporting(0);
ini_set('display_errors', 0);

$pelapor                =   $_POST['pelapor'];
$nim                    =   $_POST['nim'];
$nama                   =   $_POST['nama'];
$kelas                  =   $_POST['kelas'];
$prodi                  =   $_POST['prodi'];
$pelapor                =   $_POST['pelapor'];
$nama_tatib             =   $_POST['nama_tatib'];
$tanggal_kejadian       =   $_POST['tanggal_kejadian'];
$tempat_kejadian        =   $_POST['tempat_kejadian'];
$level_tingkat          =   $_POST['level_tingkat'];
$sanksi                 =   $_POST['sanksi'];
?>

<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-group"></i>Input Pelanggaran<br><small>POLITEKNIK NEGERI MALANG</small>
            </h1>
        </div>
    </div>

    <!-- Title -->
    <title>Aplikasi Tata Tertib</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>

    <!-- Tanggal -->
    <script src="assets/js/fullcalendar/fullcalendar.js"></script>
    <script src="assets/js/fullcalendar/locale-all.js"></script>
    <!-- Selesai Tanggal -->

    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="../dist/js/standalone/selectize.js"></script>
    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script src="../../admin/SweetAlert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../admin/SweetAlert/sweetalert.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- <body class="page-header-fixed compact-menu page-horizontal-bar">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner container">
                <div class="logo-box">
        </div> -->
        <!-- Page Sidebar -->
        <!-- <div class="page-inner">
            <div class="page-title">
                <div class="container">
                    <h4>Konfirmasi Laporan Pelanggaran</h4>
                </div>
            </div> -->
            <!-- <div id="main-wrapper" class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12"> -->
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4>Konfirmasi Laporan Pelanggaran</h4>
                            </div>
                            <form action="proses/proses_lapor.php" method="POST" enctype="multipart/form-data" id="example4">
                                <div class="panel-body">
                                    <div class="well">
                                        <table>
                                        <tr>
                                                <td><h4 style="margin-right: 20px;">Dosen Pelapor :</h4></td>
                                                <td><h4><?php echo $pelapor; ?></h4></td>
                                                <td><input type="text" name="pelapor" value="<?php echo $pelapor; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Nim Pelanggar :</h4></td>
                                                <td><h4><?php echo $nim; ?></h4></td>
                                                <td><input type="text" name="nim" value="<?php echo $nim; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Nama Pelanggar :</h4></td>
                                                <td><h4><?php echo $nama; ?></h4></td>
                                                <td><input type="text" name="nama" value="<?php echo $nama; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Kelas Pelanggar :</h4></td>
                                                <td><h4><?php echo $kelas; ?></h4></td>
                                                <td><input type="text" name="kelas" value="<?php echo $kelas; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Program Studi Pelanggar :</h4></td>
                                                <td><h4><?php echo $prodi; ?></h4></td>
                                                <td><input type="text" name="prodi" value="<?php echo $prodi; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Jenis Pelanggaran :</h4></td>
                                                <td><h4><?php echo $nama_tatib; ?></h4></td>
                                                <td><input type="text" name="nama_tatib" value="<?php echo $nama_tatib; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Tingkat Pelanggaran :</h4></td>
                                                <td><h4><?php echo $level_tingkat; ?></h4></td>
                                                <td><input type="text" name="level_tingkat" value="<?php echo $level_tingkat; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Sanksi Pelanggaran :</h4></td>
                                                <td><h4><?php echo $sanksi; ?></h4></td>
                                                <td><input type="text" name="sanksi" value="<?php echo $sanksi; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h4 style="margin-right: 20px;">Tanggal Kejadian :</h4></td>
                                                <td><h4><?php echo $tanggal_kejadian; ?></h4></td>
                                                <td><input type="text" name="tanggal_kejadian" value="<?php echo $tanggal_kejadian; ?>" hidden></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                    <div class="checkbox" style="text-align: left; margin-left: 40px;">
                                    <input onchange="this.setCustomValidity(validity.valueMissing ? 'Dimohon untuk meninggalkan indikasi bahwa Anda bertanggung jawab atas pelaporan data ini' : '');" id="field_terms" type="checkbox" required name="terms"> Saya bertanggung jawab. Bahwa, <u> data yang saya laporkan benar adanya</u>
                                    <div style="margin-top: 10px; text-align: center;">
                                        <input type="submit" value="SUBMIT" class="btn btn-primary">
                                        <a href="lapor.php"><input type="button" value="CANCEL" class="btn btn-warning"></a>
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
               
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
        <script src="assets/js/modern.min.js"></script>

        <script type="text/javascript">
            document.getElementById("field_terms").setCustomValidity("Pleaseee indicate that you accept the Terms and Conditions");
        </script>
    </body>
    <?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pengecekan apakah ada file yang diunggah
    if (isset($_FILES['bukti']) && $_FILES['bukti']['error'] === UPLOAD_ERR_OK) {
      // Mendapatkan informasi file yang diunggah
      $nama_file = $_FILES['bukti']['name'];
      $tmp_file = $_FILES['bukti']['tmp_name'];
  
      // Lokasi untuk menyimpan file yang diunggah dalam direktori 'unggahan'
      $lokasi_simpan = 'unggahan/' . $nama_file;
  
      // Pindahkan file yang diunggah ke lokasi yang ditentukan
      if (move_uploaded_file($tmp_file, $lokasi_simpan)) {
        // File berhasil diunggah, Anda dapat menyimpan nama file ini ke database atau melakukan tindakan lain sesuai kebutuhan aplikasi Anda.
      } else {
        // Jika file tidak berhasil diunggah, berikan pesan kesalahan
        echo 'Gagal mengunggah file bukti.';
      }
    }
  }
  
?>
<?php include 'inc/template_end.php'; ?>
    </html>

