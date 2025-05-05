<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php include '../config/database.php';

error_reporting(0);
ini_set('display_errors', 0);

$qry_cek    =   "SELECT * FROM data_pelanggaran ORDER BY no_pelanggaran DESC LIMIT 1";
$exe_cek    =   mysqli_query($db, $qry_cek);

$nomor_pelanggaran  =   $_GET['no_pelanggaran'];
?>
<!DOCTYPE html>
<html>
<head>

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

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="page-header-fixed compact-menu page-horizontal-bar">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <div class="navbar">
          <!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-group"></i>Data Kelas<br><small>POLITEKNIK NEGERI MALANG</small>
            </h1>
        </div>
    </div>
        
            <div id="main-wrapper" class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Nomor Laporan Pelanggaran</h4>
                            </div>
                            <div class="panel-body">
                                <div class="well">
                                    <h4>Nomor Laporan Pelanggaran</h4>
                                    <p>Terima Kasih! Laporan anda telah berhasil dikirim. Gunakan nomor laporan pelanggaran anda untuk mengetahui apakah laporan anda sudah/belum ditindaklanjuti oleh Admin. Nomor laporan pelanggaran anda adalah <b> <?php echo $nomor_pelanggaran; ?></p>
                                        <center><a href="status_laporan.php" class="btn btn-primary" style="margin-top: 20px;">Status Konfirmasi</a></center>
                                    </div>
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
        <script src="assets/js/modern.min.js"></script>

    </body>
    </html>
    <!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>
