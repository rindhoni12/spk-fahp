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
		<?php $this->load->view("admin/_partials/v_sidebar.php") ?>
		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Data Pengguna
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
								<a href="<?php echo site_url('admin/pengguna') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>
							<div class="card-body">
								<form action="<?php base_url('admin/pengguna/tambah') ?>" method="post" enctype="multipart/form-data">
									<div class="form-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="nama_user">Nama Pengguna </label>
													<input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"	type="text" name="nama_user" placeholder="Masukkan nama pengguna" autofocus autocomplete="off">
													<div class="invalid-feedback"><?php echo form_error('nama_user') ?></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="role">Role Pengguna</label>
													<select class="form-control" name="role" required>
														<option value="" selected disabled hidden>Pilih role pengguna</option>';
														<option value="administrator">Administrator</option>
														<option value="operator">Operator</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="mt-3" for="username">Username </label>
													<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"	type="text" name="username" placeholder="Masukkan username" autocomplete="off">
													<div class="invalid-feedback"><?php echo form_error('username') ?></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="mt-3" for="password">Password </label>
													<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="password"	name="password" placeholder="Masukkan password" autocomplete="off">
													<div class="invalid-feedback"><?php echo form_error('password') ?></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="mt-3" for="foto">Foto Pengguna (Optional) </label>
													<input class="form-control-file" type="file" name="foto" accept=".gif, .jpg, .jpeg, .png">
												</div>
											</div>
										</div>
										<input type="hidden" name="login_terakhir">
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
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_js.php") ?>
</body>

</html>
