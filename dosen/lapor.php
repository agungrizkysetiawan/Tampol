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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>






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
    <!-- Inputan Pencarian NIM -->
<div class="form-group">
  <label>Cari NIM</label>
  <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM Pelanggar" oninput="searchNim(this.value)">
</div>

<!-- Bidang untuk menampilkan data -->
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

<script>
  // Data NIM dan detail mahasiswa
  var nimData = {
    <?php
    $result = mysqli_query($db, "SELECT m.nim , m.nama,k.nama_kelas AS kelas, k.prodi
  from mahasiswa m
join kelas k on m.id_kelas = k.id_kelas");
    while ($row = mysqli_fetch_array($result)) {
      echo "'" . $row['nim'] . "': { 'nama': '" . addslashes($row['nama']) . "', 'kelas': '" . addslashes($row['kelas']) . "', 'prodi': '" . addslashes($row['prodi']) . "' },\n";
    }
    ?>
  };

  // Fungsi untuk mencari dan menampilkan data berdasarkan NIM
  function searchNim(nim) {
    // Menghapus spasi dan karakter lainnya dari NIM untuk mencocokkan dengan data yang ada
    nim = nim.replace(/\s/g, '');

    if (nimData[nim]) {
      // Jika NIM ditemukan, setel nilai bidang-bidang yang sesuai dengan data yang ditemukan
      document.getElementById('nama').value = nimData[nim].nama;
      document.getElementById('kelas').value = nimData[nim].kelas;
      document.getElementById('prodi').value = nimData[nim].prodi;
    } else {
      // Jika NIM tidak ditemukan, kosongkan bidang-bidang
      document.getElementById('nama').value = '';
      document.getElementById('kelas').value = '';
      document.getElementById('prodi').value = '';
    }
  }
</script>


<div class="form-group">
    <label>Nama Pelapor</label>
    <input name="pelapor" id="pelapor" type="text" class="form-control" value="<?php echo $nama; ?>" readonly />
</div>

<label>Jenis Pelanggaran</label>
<select class="form-control" name="nama_tatib" id="data_pelanggaran" placeholder="Jenis Pelanggaran" style="margin-bottom: 15px;" onchange="updateFields(this.value)">
    <option value="">Pilih Jenis Pelanggaran</option>
    <?php
    $sqlt = mysqli_query($db, "SELECT * FROM jenis_tatib");
    $jsArray2 = "var dtplg = new Array();\n";

    while ($rowt = mysqli_fetch_array($sqlt)) {
    ?>
        <option value="<?php echo $rowt['nama_tatib']; ?>"><?php echo $rowt['nama_tatib']; ?></option>
    <?php
        $jsArray2 .= "dtplg['" . $rowt['nama_tatib'] . "'] = { level_tingkat: '" . addslashes($rowt['level_tingkat']) . "', sanksi: '" . addslashes($rowt['sanksi']) . "' };\n";
    }
    ?>
</select>

<div class="form-group">
    <label>Tingkatan Pelanggaran</label>
    <input name="level_tingkat" id="level_tingkat" type="text" class="form-control" placeholder="Tingkatan level pelanggaran" readonly />
</div>
<div class="form-group">
    <label>Sanksi</label>
    <input name="sanksi" id="sanksi" type="text" class="form-control" placeholder="Sanksi pelanggaran" readonly />
</div>

<script>
    // Function to update input fields based on the selected option
    function updateFields(selectedValue) {
        var selectedOption = dtplg[selectedValue];

        // Check if the selected option exists in the dtplg array
        if (selectedOption) {
            // Update "Tingkatan Pelanggaran" and "Sanksi" input fields
            document.getElementById('level_tingkat').value = selectedOption.level_tingkat;
            document.getElementById('sanksi').value = selectedOption.sanksi;
        } else {
            // Clear the input fields if no option is selected
            document.getElementById('level_tingkat').value = '';
            document.getElementById('sanksi').value = '';
        }
    }
</script>



                <div class="form-group">
                  <label>Tanggal Kejadian</label>
                  <div class="input-group date" id="tgl4">
                            <input type="text" class="form-control" name="tanggal_kejadian" placeholder="Tanggal Kejadian"/>
                            <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                        </div>
                <div class="form-group">
    <label>Bukti</label>
    <input type="file" name="bukti" id="bukti" accept="image/*" class="form-control" />
</div>
<form name="input" method="post" action="summary.php" enctype="multipart/form-data">
  <div class="col-md-12">
    <div class="panel panel-default">
      <!-- Isi formulir di sini -->
    </div>
  </div>
</form>




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

<script>
    $(function() {
  // defualt script for datetimepicket
  $('#tgl4').datepicker({
     locale:'id',
     format:'DD, dd/mm/yyyy'
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
