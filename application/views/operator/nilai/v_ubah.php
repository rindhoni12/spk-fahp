<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<!-- ini isi v_head.php -->
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<?php $this->load->view("admin/_partials/v_navbar.php") ?>
		<?php $this->load->view("admin/_partials/v_sidebaroperator.php") ?>
		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ubah Data Alternatif
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">

							<div class="card-header text-white bg-light">
								<a href="<?php echo site_url('operator/nilai') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>

							<div class="card-body">
								<form action="<?php base_url('operator/nilai/ubah') ?>" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $alternatif->id_alternatif?>" />
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="kode_alternatif">Kode Alternatif </label>
												<input class="form-control <?php echo form_error('kode_alternatif') ? 'is-invalid':'' ?>" type="text"  name="kode_alternatif" placeholder="Masukkan kode alternatif" value="<?php echo $alternatif->kode_alternatif ?>"/>
												<div class="invalid-feedback">
													<?php echo form_error('kode_alternatif') ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="nama_alternatif">Nama Alternatif </label>
												<input class="form-control <?php echo form_error('nama_alternatif') ? 'is-invalid':'' ?>" type="text"  name="nama_alternatif" placeholder="Masukkan nama alternatif" value="<?php echo $alternatif->nama_alternatif ?>"/>
												<div class="invalid-feedback">
													<?php echo form_error('nama_alternatif') ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="kec_alternatif">Kecamatan Alternatif </label>
												<input class="form-control <?php echo form_error('kec_alternatif') ? 'is-invalid':'' ?>" type="text"  name="kec_alternatif" placeholder="Masukkan kecamatan alternatif" value="<?php echo $alternatif->kec_alternatif ?>"/>
												<div class="invalid-feedback">
													<?php echo form_error('kec_alternatif') ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions mt-4">
									<div class="text-left">
										<button type="submit" class="btn btn-info">Ubah Data</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_js.php") ?>
</body>

</html>
