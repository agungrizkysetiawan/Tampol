<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<!-- Page content -->
<div id="page-content">


		<!-- Mini Top Stats Row -->
		<div class="row">
			<div class="col-sm-8 col-lg-7 ">
				<!-- Widget -->
				<a href="index.php" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-night animation-fadeIn">
							<i class="fa fa-user"></i>
						</div>
						<h6 class="widget-content text-left animation-pullDown">
							nim : <strong><?php echo $nama; ?></strong><br>
						</h6>
						
						<small>Mahasiswa</small>
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