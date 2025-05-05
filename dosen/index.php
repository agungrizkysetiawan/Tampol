<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  /* Ganti font teks widget menjadi Poppins */
  .widget-content {
    font-family: 'Poppins', sans-serif;
    color: #000; /* Warna teks hitam */
  }
</style>
<!-- Page content -->
<div id="page-content">
		<!-- Mini Top Stats Row -->
		<div class="row">
			<div class="col-sm-12 ">
				<!-- Widget -->
				<a href="index.php" class="widget widget-hover-effect1" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background-color: #ffffff;">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-night animation-fadeIn">
							<i class="fa fa-user"></i>
						</div>
						<h3 class="widget-content text-left animation-pullDown">
							Selamat Datang <strong><?php echo $nama; ?></strong><br>
						</h3>
						<small class="widget-content">Dosen</small>
					</div>
				</a>
			<!-- END Widget -->
		
			<div class="col-sm-6 col-lg-4">
				<!-- Widget -->
				<a href="data_siswa.php" class="widget widget-hover-effect1" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background-color: #ffffff;">
					<div class="widget-simple">
					<div class="widget-icon pull-left themed-background-night animation-fadeIn">
                		<i class="fa fa-user"></i>
						
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							Status Laporan <strong>Mahasiswa</strong><br>
							<h4 class="widget-content pull-right"><?php echo !empty($far_data_pelanggaran[0]) ? $far_data_pelanggaran[0] : 0; ?></h4>
						</h3>
					</div>
				</a>
				<!-- END Widget --> 
			
			</div>

			<div class="col-sm-6 col-lg-4">
				<!-- Widget -->
				<a href="jenis_tatib.php" class="widget widget-hover-effect1" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background-color: #ffffff;">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-spring animation-fadeIn">
							<i class="gi gi-book"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							Kelas <strong>Saya</strong><br>
							<h4 class="widget-content pull-right"><?php echo !empty($far_count_jenis_tatib[0]) ? $far_count_jenis_tatib[0] : 0; ?></h4>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			


		</div>

		<!-- Datatables Content -->
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
