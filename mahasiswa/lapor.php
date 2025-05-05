<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

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


<?php

error_reporting(0);
ini_set('display_errors', 0);
                    //kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == 'gagal') {
    echo '<script>

    swal({
        title: "Gagal",
        text: "Gagal Mengirim Laporan!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "lapor.php";
        }
    });
    </script>';
}

?>


     <!-- Tampilan Utuk inputan pelanggaran -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <form name="input" method="post" action="summary.php">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
    <div class="form-group">
  <label>Nim</label>
  <select class="js-selectize" name="nim" id="nim" placeholder="Pilih Nim Pelanggar" onchange="changeValue(this.value)">
  <option>
    <?php
    $result = mysqli_query($db, "select * from mahasiswa");
    $jsArray = "var dtMhs = new Array();\n";

    while ($row = mysqli_fetch_array($result)) {
      echo '<option value="' . $row['nim'] . '">' . $row['nim'] . '</option>';

      $prodi = isset($row['prodi']) ? $row['prodi'] : 'Belum ditentukan';
      $jsArray .= "dtMhs['" . $row['nim'] . "'] = {nama:'" . addslashes($row['nama']) . "',kelas:'" . addslashes($row['kelas']) . "',prodi:'" . addslashes($prodi) . "'};\n";
    }
    ?>
    </option>
  </select>
</div>

<script>
  var dtMhs = new Array();
  <?php echo $jsArray; ?>

  function changeValue(nim) {
    document.getElementById('nama').value = dtMhs[nim].nama;
    document.getElementById('kelas').value = dtMhs[nim].kelas;
    document.getElementById('Prodi').value = dtMhs[nim].prodi;
  }
</script>

<div class="form-group">
  <label>Nama Mahasiswa</label>
  <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Pelanggar" readonly />
</div>

<div class="form-group">
  <label>Kelas</label>
  <input name="kelas" id="kelas" type="text" class="form-control" placeholder="Kelas Pelanggar" readonly />
</div>

<div class="form-group">
  <label>Program Studi</label>
  <input name="prodi" id="prodi" type="text" class="form-control" placeholder="Program Studi Pelanggar" readonly />
</div>

<div class="form-group">
    <label>Nama Pelapor</label>
    <input name="pelapor" id="pelapor" type="text" class="form-control" value="<?php echo $nama; ?>" readonly />
</div>


<label>Jenis Pelanggaran</label>
<select class="form-control" name="jenis_tatib" id="data_pelanggaran" placeholder="Jenis Pelanggaran" style="margin-bottom: 15px;" onchange="changeValuerifki(this.value)">
    <option value="">Pilih Jenis Pelanggaran</option>
    <?php
    $sqlt = mysqli_query($db, "SELECT * FROM jenis_tatib");
    $jsArray2 = "var dtplg = new Array();\n";

    while ($rowt = mysqli_fetch_array($sqlt)) {
    ?>
        <option value="<?php echo $rowt['nama_tatib']; ?>"><?php echo $rowt['nama_tatib']; ?></option>
    <?php
        $jsArray2 .= "dtplg['" . $rowt['nama_tatib'] . "'] = { level_tingkat: '" . addslashes($rowt['level_tingkat']) . "' };\n";
    }
    ?>
</select>

<div class="form-group">
    <label>Tingkatan Pelanggaran</label>
    <input name="level_tingkat" id="level_tingkat" type="text" class="form-control" placeholder="Tingkatan level pelanggaran" readonly />
</div>

<script type="text/javascript">
    <?php echo $jsArray2; ?>

    function changeValuerifki(nama_tatib) {
        document.getElementById('level_tingkat').value = dtplg[nama_tatib].level_tingkat;
    };
</script>


                <div class="form-group">
                  <label>Tanggal Kejadian</label>
                  <div class="input-group date" id="tgl4">
                            <input type="text" class="form-control" name="tanggal_kejadian" placeholder="Tanggal Kejadian"/>
                            <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                        </div>
                <div class="form-group">
                  <label>Tempat Kejadian</label>
                  <input name="tempat_kejadian" id="tempat_kejadian" type="text" class="form-control" placeholder="Tempat Kejadian" />
                </div>

                <hr />
                <center>
                  <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary" />
                  <input type="reset" name="reset" value="RESET" class="btn btn-warning" />
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</div>
</div>



</div><!-- Page Inner -->
</main><!-- Page Content -->


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
<script src="assets/plugins/summernote-master/summernote.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/modern.min.js"></script>
<script src="assets/js/pages/form-elements.js"></script>

<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(nim){
        document.getElementById('nama').value = dtMhs[nim].nama;
        document.getElementById('kelas').value = dtMhs[nim].kelas;
        document.getElementById('prodi').value = dtMhs[nim].prodi;
    };
</script>

<script type="text/javascript">
    <?php echo $jsArray2; ?>
    function changeValuerifki(nama_tatib){
        document.getElementById('level_tingkat').value = dtplg[nama_tatib].level_tingkat;
    };
</script>


<script type="text/javascript">
  <?php echo $jsArrayPelanggaran; ?>
  function changeValueee(jenispelanggaran){
    document.getElementById('isi_pelanggaran').value = dtPelanggaran[jenispelanggaran].isi_pelanggaran;
};
</script>

<script>
    $(function() {
  // defualt script for datetimepicket
  $('#tgl4').datepicker({
     locale:'id',
     format:'DD, dd/mm/yyyy'
 });
});

</script>



  <script>
    $(document).ready(function(){
      // TAHUN
      $('#jenis_pelanggaran').change(function(){
        var jenis_pelanggaran = $('#jenis_pelanggaran').val();

        if (jenis_pelanggaran == '-- Pilih Jenis Pelanggaran --') {
          $('#tampilisi').fadeOut();
          $.ajax({
            type: 'POST',
            url: 'umpet_isi.php',
            data: 'jenis_pelanggaran=' + jenis_pelanggaran,
            success: function(response){
            $('#isi_pelanggaran').html(response);
            }
          });
        }else{
          $('#tampilisi').fadeOut();
          $.ajax({
            type: 'POST',
            url: 'user_jenis.php',
            data: 'jenis_pelanggaran=' + jenis_pelanggaran,
            success: function(response){
            $('#isi_pelanggaran').html(response);
            }
          });

        }
      });
    });
  </script>



<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>















