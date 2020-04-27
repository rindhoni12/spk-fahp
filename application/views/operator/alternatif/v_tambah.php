<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<!-- ini isi v_head.php -->
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->

		<!-- ini isi v_navbar.php -->
		<?php $this->load->view("admin/_partials/v_navbar.php") ?>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->

		<!-- Sidebar scroll-->
		<!-- ini isi v_sidebaroperator.php -->
		<?php $this->load->view("admin/_partials/v_sidebaroperator.php") ?>
		<!-- End Sidebar scroll-->

		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Alternatif
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->

			<div class="container-fluid">
				<!-- Multiple Input With Default Label -->
				<div class="row">
					<div class="col-12">
						<div class="card">

							<div class="card-header text-white bg-light">
								<a href="<?php echo site_url('operator/alternatif') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>

							<div class="card-body">

                <form action="<?php base_url('operator/alternatif/tambah') ?>" method="post" enctype="multipart/form-data" >

								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="kode_alternatif">Kode Alternatif </label>
												<input class="form-control <?php echo form_error('kode_alternatif') ? 'is-invalid':'' ?>" type="text"  name="kode_alternatif" placeholder="Masukkan kode alternatif"/>
												<div class="invalid-feedback">
													<?php echo form_error('kode_alternatif') ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="nama_alternatif">Nama Alternatif </label>
												<input class="form-control <?php echo form_error('nama_alternatif') ? 'is-invalid':'' ?>" type="text"  name="nama_alternatif" placeholder="Masukkan nama alternatif"/>
												<div class="invalid-feedback">
													<?php echo form_error('nama_alternatif') ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="kec_alternatif">Kecamatan Alternatif </label>
												<input class="form-control <?php echo form_error('kec_alternatif') ? 'is-invalid':'' ?>" type="text"  name="kec_alternatif" placeholder="Masukkan kecamatan alternatif"/>
												<div class="invalid-feedback">
													<?php echo form_error('kec_alternatif') ?>
												</div>
											</div>
										</div>
									</div>
								</div>

									<div class="form-actions mt-4">
										<div class="text-left">
											<button type="submit" class="btn btn-info">Tambah Data</button>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- end of Multiple Input With Default Label -->

				<!-- basic table from tutorial -->
				<!-- DataTables -->
				<!-- <div class="card mb-3">
					<div class="card-header">
						<a href="><i class="fas fa-plus"></i> Add New</a>
					</div>
				</div> -->
				<!-- end of it -->
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->


			<!-- ini isi v_footer.php -->
			<?php $this->load->view("admin/_partials/v_footer.php") ?>

			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<!-- ini isi v_js.php -->
	<?php $this->load->view("admin/_partials/v_js.php") ?>

</body>

</html>
