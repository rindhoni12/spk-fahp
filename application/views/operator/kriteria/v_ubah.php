<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
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
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ubah Data Kriteria
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
								<a href="<?php echo site_url('operator/kriteria') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>

							<div class="card-body">

								<form action="<?php base_url('operator/kriteria/ubah') ?>" method="post" enctype="multipart/form-data">

								<input type="hidden" name="id" value="<?php echo $kriteria->id_kriteria?>" />

								<div class="form-body">
										<label for="kode_kriteria">Kode Kriteria </label>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<input class="form-control <?php echo form_error('kode_kriteria') ? 'is-invalid':'' ?>" type="text"  name="kode_kriteria" placeholder="Masukkan kode kriteria" value="<?php echo $kriteria->kode_kriteria ?>"/>
													<div class="invalid-feedback">
														<?php echo form_error('kode_kriteria') ?>
													</div>
												</div>
											</div>
										</div>

										<label class="mt-3">Nama Kriteria </label>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<input class="form-control <?php echo form_error('nama_kriteria') ? 'is-invalid':'' ?>" type="text"  name="nama_kriteria" placeholder="Masukkan nama kriteria" value="<?php echo $kriteria->nama_kriteria ?>"/>
													<div class="invalid-feedback">
														<?php echo form_error('nama_kriteria') ?>
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
